<?php

namespace Creatomate\Animations;

class TextWaveInLetterByLetterRandomly extends TextWave
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextWaveProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'order' => 'random',
        ], $properties));
    }
}
