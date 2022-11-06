<?php

namespace Creatomate\Animations;

class Shake extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ShakeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('shake', $properties);
    }
}
