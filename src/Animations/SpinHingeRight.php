<?php

namespace Creatomate\Animations;

class SpinHingeRight extends Spin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'scope' => 'composition',
            'rotation' => '22.5°',
            'x_anchor' => '100%',
            'y_anchor' => '50%',
        ], $properties));
    }
}
