<?php

namespace Creatomate\Animations;

class TextCountDown extends TextCounter
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextCounterProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'down',
        ], $properties));
    }
}
