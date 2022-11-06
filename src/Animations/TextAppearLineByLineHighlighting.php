<?php

namespace Creatomate\Animations;

class TextAppearLineByLineHighlighting extends TextAppear
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextAppearProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'split' => 'line',
            'start_opacity' => '20%',
        ], $properties));
    }
}
