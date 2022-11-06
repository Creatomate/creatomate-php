<?php

namespace Creatomate\Animations;

class TextAppear extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextAppearProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-appear', $properties);
    }
}
