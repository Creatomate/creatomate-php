<?php

namespace Creatomate\Animations;

class TextAppearLetterByLetterHighlighting extends TextAppear
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextAppearProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'letter',
            'start_opacity' => '20%',
        ], $properties));
    }
}
