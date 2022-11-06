<?php

namespace Creatomate\Animations;

class Squash extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SquashProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('squash', $properties);
    }
}
