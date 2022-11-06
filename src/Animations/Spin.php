<?php

namespace Creatomate\Animations;

class Spin extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('spin', $properties);
    }
}
