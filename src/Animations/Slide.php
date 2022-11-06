<?php

namespace Creatomate\Animations;

class Slide extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('slide', $properties);
    }
}
