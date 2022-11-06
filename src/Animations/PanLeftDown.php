<?php

namespace Creatomate\Animations;

class PanLeftDown extends Pan
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\PanProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'scope' => 'element',
            'start_x' => '100%',
            'start_y' => '0%',
            'end_x' => '0%',
            'end_y' => '100%',
        ], $properties));
    }
}
