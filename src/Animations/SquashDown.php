<?php

namespace Creatomate\Animations;

class SquashDown extends Squash
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SquashProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'down',
        ], $properties));
    }
}
