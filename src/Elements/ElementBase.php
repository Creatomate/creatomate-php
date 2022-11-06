<?php

namespace Creatomate\Elements;

use Creatomate\Animations\AnimationBase;

abstract class ElementBase
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    public $properties;

    /**
     * An image element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     */
    public function __construct(string $type, array $properties = [])
    {
        $this->type = $type;
        $this->properties = $properties;
    }

    public function toArray(): array
    {
        /** @var array */
        $array = array_merge(['type' => $this->type], $this->properties);

        $animations = [];

        // Scene animations
        if (array_key_exists('animations', $array) && is_array($array['animations'])) {
            $animations = array_map(static function ($animation) {
                return $animation instanceof AnimationBase ? $animation->toArray() : $animation;
            }, $array['animations']);
        }

        // Transition animation
        if (array_key_exists('transition', $array)) {

            $transition = $array['transition'];
            unset($array['transition']);

            array_unshift($animations, array_merge(
                $transition instanceof AnimationBase ? $transition->toArray() : $transition,
                ['time' => 'start', 'transition' => true]
            ));
        }

        // Enter animation
        if (array_key_exists('enter', $array)) {

            $enter = $array['enter'];
            unset($array['enter']);

            array_unshift($animations, array_merge(
                $enter instanceof AnimationBase ? $enter->toArray() : $enter,
                ['time' => 'start'],
            ));
        }

        // Exit animation
        if (array_key_exists('exit', $array)) {

            $exit = $array['exit'];
            unset($array['exit']);

            array_unshift($animations, array_merge(
                $exit instanceof AnimationBase ? $exit->toArray() : $exit,
                ['time' => 'end', 'reversed' => true],
            ));
        }

        if (count($animations) > 0) {
            $array['animations'] = $animations;
        }

        return $array;
    }
}
