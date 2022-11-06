<?php

namespace Creatomate\Animations;

class SpinCounterclockwise extends Spin
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SpinProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'rotation' => '-360°',
        ], $properties));
    }
}
