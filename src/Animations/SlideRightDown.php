<?php

namespace Creatomate\Animations;

class SlideRightDown extends Slide
{
    /**
     * @param array $properties Animation properties.
     *              See \Creatomate\Animations\SlideProperties
     */
    public function __construct(array $properties = [])
    {
        parent::__construct(array_merge([
            'direction' => '315°',
        ], $properties));
    }
}
