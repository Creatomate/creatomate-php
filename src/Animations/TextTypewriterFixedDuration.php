<?php

namespace Creatomate\Animations;

class TextTypewriterFixedDuration extends TextTypewriter
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\TextProperties and \Creatomate\Animations\TextTypewriterProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'typing_start' => '0 s',
            'typing_duration' => '0.5 s',
        ], $properties));
    }
}
