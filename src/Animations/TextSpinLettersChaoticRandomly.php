<?php

namespace Creatomate\Animations;

class TextSpinLettersChaoticRandomly extends TextSpin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'distance' => '200%',
            'direction' => 'down',
            'easing' => 'elastic-out',
            'order' => 'random',
        ], $properties));
    }
}
