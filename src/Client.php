<?php

namespace Creatomate;

use GuzzleHttp;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;
use Psr\Http\Message\ResponseInterface;

class Client
{
    /** @var string */
    private $apiKey;

    /** @var \GuzzleHttp\Client */
    private $client;

    /**
     * @param string $apiKey Your Creatomate API key. See https://creatomate.com/docs/api/rest-api/authentication.
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->client = new \GuzzleHttp\Client(
            [
                'base_uri' => 'https://api.creatomate.com/v1/',
                'timeout' => 15.0,
            ]
        );
    }

    /**
     * Creates one or multiple renders and waits for them to finish.
     * 
     * @param array $options Render options. See \Creatomate\RenderOptions.
     * @param int   $timeout Maximum number of seconds to wait. Throws \Creatomate\Exceptions\TimeoutException when elapsed.
     *
     * @throws CreatomateException
     */
    public function render(array $options = [], int $timeout = 900)
    {
        $renders = $this
            ->startRender($options)
            ->wait();

        $unfinishedRenders = $renders;
        $finishedRenders = [];

        $queue = [];

        $startTime = microtime(true);

        while ((microtime(true) - $startTime) < $timeout) {
            sleep(2);

            if (count($queue) == 0) {
                $queue = $unfinishedRenders;
            }

            $render = array_pop($queue);
            if (is_null($render)) {
                break;
            }

            $updatedRender = $this->fetchRender($render['id'])->wait();

            if ($updatedRender['status'] !== 'planned' && $updatedRender['status'] !== 'rendering' && $updatedRender['status'] !== 'transcribing') {

                $id = $updatedRender['id'];
                $unfinishedRenders = array_filter($unfinishedRenders, static function ($render) use ($id) {
                    return $render['id'] !== $id;
                });

                array_push($finishedRenders, $updatedRender);

                if (count($unfinishedRenders) == 0) {
                    break;
                }
            }
        }

        if (count($unfinishedRenders) > 0) {
            throw new Exceptions\TimeoutException();
        }

        return $finishedRenders;
    }

    /**
     * Creates one or multiple renders without waiting for them to finish.
     * 
     * @param array $options Render options. See \Creatomate\RenderOptions.
     *
     * @throws CreatomateException
     */
    public function startRender(array $options): Promise\Promise
    {
        if (array_key_exists('source', $options) && $options['source'] instanceof Source) {
            $options['source'] = $options['source']->toArray();
        }

        return $this->requestAsync('POST', 'renders', $options);
    }

    /**
     * Fetches the status of a render.
     * 
     * @param string $renderId The ID of the render.
     *
     * @throws BadRequestException
     * @throws InvalidApiKeyException
     * @throws InsufficientCreditsException
     * @throws RateLimitExceededException
     * @throws CreatomateException
     */
    public function fetchRender(string $renderId): Promise\Promise
    {
        return $this->requestAsync('GET', 'renders/' . $renderId);
    }

    private function requestAsync(string $method, string $uri, ?array $body = null): Promise\Promise
    {
        $options = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'User-Agent' => 'Creatomate-PHP/1.0.1',
            ],
        ];

        if (!is_null($body)) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body'] = json_encode($body);
        }

        $promise = $this->client->requestAsync($method, $uri, $options);

        return $promise->then(
            function (ResponseInterface $res) {
                $body = json_decode($res->getBody(), true);
                return $body;
            },
            function (RequestException $e) {
                if ($e->getCode() == 400) {

                    $body = json_decode($e->getResponse()->getBody(), true);
                    $message = 'Creatomate Error: ' . $body['hint'];
                    if (in_array('documentation_url', $body)) {
                        $message += ' (' . $body['documentation_url'] . ')';
                    }

                    throw new Exceptions\BadRequestException($message);
                } else if ($e->getCode() == 401) {
                    throw new Exceptions\InvalidApiKeyException();
                } else if ($e->getCode() == 402) {
                    throw new Exceptions\InsufficientCreditsException();
                } else if ($e->getCode() == 429) {
                    throw new Exceptions\RateLimitExceededException();
                } else {
                    $body = json_decode($e->getCode(), true);
                    var_dump($body);
                    throw new Exceptions\CreatomateException('Connection error');
                }
            },
        );
    }
}
