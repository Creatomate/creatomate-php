<?php

namespace Creatomate\Animations;

class FlipPage extends Flip
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FlipProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_rotation' => '0°',
            'y_rotation' => '90°',
            'x_anchor' => '0%',
            'fade' => false,
        ], $properties));
    }
}
