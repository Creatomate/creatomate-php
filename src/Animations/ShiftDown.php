<?php

namespace Creatomate\Animations;

class ShiftDown extends Shift
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\ShiftProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'down',
        ], $properties));
    }
}
