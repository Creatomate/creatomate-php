<?php

namespace Creatomate\Animations;

class TextFly extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextFlyProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-fly', $properties);
    }
}
