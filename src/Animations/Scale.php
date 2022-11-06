<?php

namespace Creatomate\Animations;

class Scale extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('scale', $properties);
    }
}
