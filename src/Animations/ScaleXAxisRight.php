<?php

namespace Creatomate\Animations;

class ScaleXAxisRight extends Scale
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '0%',
            'y_anchor' => '50%',
            'axis' => 'x',
        ], $properties));
    }
}
