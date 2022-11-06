<?php

namespace Creatomate\Elements;

class Rectangle extends Shape
{
    /**
     * A rectangle element. See \Creatomate\Elements\Shape.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\ShapeProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/shape-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'width' => '100%',
            'height' => '100%',
            'path' => 'M 0 0 L 100 0 L 100 100 L 0 100 L 0 0 Z',
        ], $properties));
    }
}
