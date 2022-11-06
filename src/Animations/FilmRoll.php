<?php

namespace Creatomate\Animations;

class FilmRoll extends AnimationBase
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FilmRollProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('film-roll', $properties);
    }
}
