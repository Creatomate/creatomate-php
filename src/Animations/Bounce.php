<?php

namespace Creatomate\Animations;

class Bounce extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\BounceProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('bounce', $properties);
    }
}
