<?php

namespace Creatomate\Animations;

class CircularWipeDown extends CircularWipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\CircularWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'y_anchor' => '0%',
        ], $properties));
    }
}
