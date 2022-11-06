<?php

namespace Creatomate\Animations;

class TextSlideLeftLineByLineClipped extends TextSlide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'left',
            'split' => 'line',
            'scope' => 'split-clip',
        ], $properties));
    }
}
