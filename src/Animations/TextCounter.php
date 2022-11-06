<?php

namespace Creatomate\Animations;

class TextCounter extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextCounterProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-counter', $properties);
    }
}
