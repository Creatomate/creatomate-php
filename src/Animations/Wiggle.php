<?php

namespace Creatomate\Animations;

class Wiggle extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\WiggleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('wiggle', $properties);
    }
}
