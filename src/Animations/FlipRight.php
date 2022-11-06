<?php

namespace Creatomate\Animations;

class FlipRight extends Flip
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FlipProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_rotation' => '0°',
            'y_rotation' => '180°',
        ], $properties));
    }
}
