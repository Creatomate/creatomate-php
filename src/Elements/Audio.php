<?php

namespace Creatomate\Elements;

class Audio extends ElementBase
{
    /**
     * An audio element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\AudioProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/audio-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('audio', $properties);
    }
}
