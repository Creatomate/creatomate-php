<?php

namespace Creatomate\Animations;

class ScaleLeft extends Scale
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '100%',
            'y_anchor' => '50%',
        ], $properties));
    }
}
