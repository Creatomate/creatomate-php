<?php

namespace Creatomate\Animations;

class TextSlideRightLetterByLetterClipped extends TextSlide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextSlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => 'right',
            'split' => 'letter',
            'scope' => 'split-clip',
        ], $properties));
    }
}
