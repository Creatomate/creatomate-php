<?php

namespace Creatomate\Animations;

class PanDownWithZoom extends Pan
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\PanProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'scope' => 'element',
            'start_x' => '50%',
            'start_y' => '0%',
            'start_scale' => '100%',
            'end_x' => '50%',
            'end_y' => '100%',
            'end_scale' => '150%',
        ], $properties));
    }
}
