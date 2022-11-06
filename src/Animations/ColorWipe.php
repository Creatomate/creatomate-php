<?php

namespace Creatomate\Animations;

class ColorWipe extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ColorWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('color-wipe', $properties);
    }
}
