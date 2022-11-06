<?php

namespace Creatomate\Animations;

class RotateSlide extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\RotateSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('rotate-slide', $properties);
    }
}
