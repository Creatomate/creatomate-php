<?php

namespace Creatomate\Animations;

class Flip extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FlipProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('flip', $properties);
    }
}
