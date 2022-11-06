<?php

namespace Creatomate\Animations;

class TextScaleUp extends TextScale
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'line',
            'axis' => 'y',
            'y_anchor' => '100%',
        ], $properties));
    }
}
