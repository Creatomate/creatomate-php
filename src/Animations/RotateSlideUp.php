<?php

namespace Creatomate\Animations;

class RotateSlideUp extends RotateSlide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\RotateSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'up',
        ], $properties));
    }
}
