<?php

namespace Creatomate\Animations;

class ScaleLeftDown extends Scale
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '100%',
            'y_anchor' => '0%',
        ], $properties));
    }
}
