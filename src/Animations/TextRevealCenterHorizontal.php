<?php

namespace Creatomate\Animations;

class TextRevealCenterHorizontal extends TextReveal
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextRevealProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'line',
            'axis' => 'x',
        ], $properties));
    }
}
