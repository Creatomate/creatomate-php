<?php

namespace Creatomate\Animations;

class WipeRight extends Wipe
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\WipeProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'x_anchor' => '0%',
        ], $properties));
    }
}
