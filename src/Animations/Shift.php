<?php

namespace Creatomate\Animations;

class Shift extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ShiftProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('shift', $properties);
    }
}
