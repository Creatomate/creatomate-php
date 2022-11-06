<?php

namespace Creatomate\Animations;

class TextSlideDownLineByLine extends TextSlide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'down',
            'split' => 'line',
            'scope' => 'element',
            'distance' => '200%',
            'background_effect' => 'disabled',
        ], $properties));
    }
}
