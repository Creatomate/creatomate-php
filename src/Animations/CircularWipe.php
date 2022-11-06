<?php

namespace Creatomate\Animations;

class CircularWipe extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\CircularWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('circular-wipe', $properties);
    }
}
