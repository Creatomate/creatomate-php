<?php

namespace Creatomate\Animations;

class CircularWipeShockwave extends CircularWipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\CircularWipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'ring_color' => 'rgba(255, 255, 255, 0.5)',
            'ring_width' => '50%',
        ], $properties));
    }
}
