<?php

namespace Creatomate\Animations;

class Wipe extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\WipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('wipe', $properties);
    }
}
