<?php

namespace Creatomate\Animations;

class PanRightWithZoom extends Pan
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\PanProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'scope' => 'element',
            'start_x' => '0%',
            'start_y' => '50%',
            'start_scale' => '100%',
            'end_x' => '100%',
            'end_y' => '50%',
            'end_scale' => '150%',
        ], $properties));
    }
}
