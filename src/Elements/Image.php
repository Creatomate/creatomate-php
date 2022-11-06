<?php

namespace Creatomate\Elements;

class Image extends ElementBase
{
    /**
     * An image element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\ImageProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/image-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('image', $properties);
    }
}
