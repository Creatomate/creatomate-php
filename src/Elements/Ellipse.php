<?php

namespace Creatomate\Elements;

class Ellipse extends Shape
{
    /**
     * A ellipse element. See \Creatomate\Elements\Shape.
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
            'path' => 'M 50 0 C 77.61 0 100 22.39 100 50 C 100 77.61 77.61 100 50 100 C 22.39 100 0 77.61 0 50 C 0 22.39 22.39 0 50 0 Z',
        ], $properties));
    }
}
