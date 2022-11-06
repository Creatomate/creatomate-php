<?php

namespace Creatomate\Elements;

class Text extends ElementBase
{
    /**
     * A text element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\TextProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/text-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text', $properties);
    }
}
