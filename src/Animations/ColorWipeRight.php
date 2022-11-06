<?php

namespace Creatomate\Animations;

class ColorWipeRight extends ColorWipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ColorWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'right',
        ], $properties));
    }
}
