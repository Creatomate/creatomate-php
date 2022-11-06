<?php

namespace Creatomate\Animations;

class TextScale extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextScaleProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('text-scale', $properties);
    }
}
