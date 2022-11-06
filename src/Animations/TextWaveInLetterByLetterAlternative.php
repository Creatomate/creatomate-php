<?php

namespace Creatomate\Animations;

class TextWaveInLetterByLetterAlternative extends TextWave
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextWaveProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'overlap' => '90%',
            'frequency' => '1 Hz',
        ], $properties));
    }
}
