<?php

namespace Creatomate\Animations;

class Pan extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\PanProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('pan', $properties);
    }
}
