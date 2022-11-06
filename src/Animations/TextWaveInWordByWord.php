<?php

namespace Creatomate\Animations;

class TextWaveInWordByWord extends TextWave
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextWaveProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'word',
            'overlap' => '50%',
        ], $properties));
    }
}
