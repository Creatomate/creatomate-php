<?php

namespace Creatomate\Animations;

class FilmRollUp extends FilmRoll
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\FilmRollProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'up',
        ], $properties));
    }
}
