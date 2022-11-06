<?php

namespace Creatomate\Animations;

class TextSpinLettersLeft extends TextSpin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'direction' => 'left',
        ], $properties));
    }
}
