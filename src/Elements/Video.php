<?php

namespace Creatomate\Elements;

class Video extends ElementBase
{
    /**
     * A video element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\VideoProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/video-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('video', $properties);
    }
}
