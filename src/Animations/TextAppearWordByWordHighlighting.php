<?php

namespace Creatomate\Animations;

class TextAppearWordByWordHighlighting extends TextAppear
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextAppearProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'word',
            'start_opacity' => '20%',
        ], $properties));
    }
}
