<?php

namespace Creatomate\Animations;

class Shake45 extends Shake
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ShakeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => '45°',
        ], $properties));
    }
}
