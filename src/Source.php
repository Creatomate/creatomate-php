<?php

namespace Creatomate;

use Creatomate\Elements\ElementBase;

class Source
{
    /**
     * @var array
     */
    public $properties;

    /**
     * The source of a render.
     * 
     * @param array $properties Source properties. See \Creatomate\SourceProperties.
     */
    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
    }

    public function toArray(): array
    {
        $array = $this->properties;

        if (array_key_exists('elements', $this->properties) && is_array($this->properties['elements'])) {
            $array['elements'] = array_map(static function ($element) {
                return $element instanceof ElementBase ? $element->toArray() : $element;
            }, $this->properties['elements']);
        }

        return $array;
    }
}
