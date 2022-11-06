<?php

namespace Creatomate\Elements;

class Shape extends ElementBase
{
    /**
     * A shape element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\ShapeProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/shape-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('shape', $properties);
    }
}
