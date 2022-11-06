<?php

namespace Creatomate\Animations;

class BounceTopLeft extends Bounce
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\BounceProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '0%',
            'y_anchor' => '0%',
        ], $properties));
    }
}
