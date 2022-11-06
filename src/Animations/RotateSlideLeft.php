<?php

namespace Creatomate\Animations;

class RotateSlideLeft extends RotateSlide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\RotateSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'left',
        ], $properties));
    }
}
