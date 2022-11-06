<?php

namespace Creatomate\Animations;

class ScaleLarger extends Scale
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'start_scale' => '100%',
            'end_scale' => '150%',
        ], $properties));
    }
}
