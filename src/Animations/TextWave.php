<?php

namespace Creatomate\Animations;

class TextWave extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextWaveProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-wave', $properties);
    }
}
