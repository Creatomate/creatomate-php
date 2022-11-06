<?php

namespace Creatomate\Animations;

abstract class AnimationBase
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    public $properties;

    public function __construct(string $type, array $properties = [])
    {
        $this->type = $type;
        $this->properties = $properties;
    }

    public function toArray(): array
    {
        return array_merge(['type' => $this->type], $this->properties);
    }
}
