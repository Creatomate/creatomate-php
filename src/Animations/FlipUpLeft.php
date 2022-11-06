<?php

namespace Creatomate\Animations;

class FlipUpLeft extends Flip
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FlipProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_rotation' => '90°',
            'y_rotation' => '-90°',
        ], $properties));
    }
}
