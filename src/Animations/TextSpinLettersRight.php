<?php

namespace Creatomate\Animations;

class TextSpinLettersRight extends TextSpin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'direction' => 'right',
        ], $properties));
    }
}
