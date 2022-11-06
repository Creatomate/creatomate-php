<?php

namespace Creatomate\Animations;

class PanCenter extends Pan
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
            'start_y' => '50%',
            'end_x' => '50%',
            'end_y' => '50%',
        ], $properties));
    }
}
