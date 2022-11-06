<?php

namespace Creatomate\Animations;

class TextFlyInWordByWord extends TextFly
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextFlyProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'word',
        ], $properties));
    }
}
