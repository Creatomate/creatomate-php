<?php

namespace Creatomate\Animations;

class CircularWipeLeft extends CircularWipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\CircularWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '100%',
        ], $properties));
    }
}
