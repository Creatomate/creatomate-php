<?php

namespace Creatomate\Elements;

class Composition extends ElementBase
{
    /**
     * A composition element.
     * 
     * @param array $properties Element properties.
     *              See \Creatomate\Elements\ElementProperties and \Creatomate\Elements\CompositionProperties.
     *
     * @link https://creatomate.com/docs/json/elements/common-properties
     * @link https://creatomate.com/docs/json/elements/composition-element
     */
    public function __construct(array $properties = [])
    {
        parent::__construct('composition', $properties);
    }

    public function toArray(): array
    {
        $array = parent::toArray();

        if (array_key_exists('elements', $this->properties) && is_array($this->properties['elements'])) {
            $array['elements'] = array_map(static function ($element) {
                return $element instanceof ElementBase ? $element->toArray() : $element;
            }, $this->properties['elements']);
        }

        return $array;
    }
}
