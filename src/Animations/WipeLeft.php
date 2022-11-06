<?php

namespace Creatomate\Animations;

class WipeLeft extends Wipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\WipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '100%',
        ], $properties));
    }
}
