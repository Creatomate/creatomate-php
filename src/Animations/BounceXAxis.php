<?php

namespace Creatomate\Animations;

class BounceXAxis extends Bounce
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\BounceProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'axis' => 'x',
        ], $properties));
    }
}
