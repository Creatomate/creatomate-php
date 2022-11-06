<?php

namespace Creatomate\Animations;

class TextTypewriter extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextTypewriterProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-typewriter', $properties);
    }
}
