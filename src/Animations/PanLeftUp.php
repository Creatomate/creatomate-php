<?php

namespace Creatomate\Animations;

class PanLeftUp extends Pan
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
            'start_y' => '100%',
            'end_x' => '0%',
            'end_y' => '0%',
        ], $properties));
    }
}
