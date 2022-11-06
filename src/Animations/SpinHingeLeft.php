<?php

namespace Creatomate\Animations;

class SpinHingeLeft extends Spin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'scope' => 'composition',
            'rotation' => '-22.5°',
            'x_anchor' => '0%',
            'y_anchor' => '50%',
        ], $properties));
    }
}
