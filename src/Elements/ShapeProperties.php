<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with \Creatomate\Elements\Shape.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 * @link https://creatomate.com/docs/json/elements/shape-element
 */
class ShapeProperties extends ElementProperties
{
    /**
     * The fill color of the element. It may be a string or an array of color stops if fillMode is set to linear or
     * radial. Use the template designer to see how color stops are formatted.
     */
    public const FILL_COLOR = 'fill_color';

    /**
     * The fill method used: solid, linear, and radial.
     */
    public const FILL_MODE = 'fill_mode';

    /**
     * The start position of the gradient on the x-axis. Use with fillMode linear or radial.
     */
    public const FILL_X0 = 'fill_x0';

    /**
     * The start position of the gradient on the y-axis. Use with fillMode linear or radial.
     */
    public const FILL_Y0 = 'fill_y0';

    /**
     * The end position of the gradient on the x-axis. Use with fillMode linear or radial.
     */
    public const FILL_X1 = 'fill_x1';

    /**
     * The end position of the gradient on the y-axis. Use with fillMode linear or radial.
     */
    public const FILL_Y1 = 'fill_y1';

    /**
     * The radius of the radial gradient in relation to the element's max(width,height).
     */
    public const FILL_RADIUS = 'fill_radius';

    /**
     * The stroke color of the element.
     */
    public const STROKE_COLOR = 'stroke_color';

    /**
     * The size of the stroke.
     */
    public const STROKE_WIDTH = 'stroke_width';

    /**
     * The stroke cap: but, square, and round.
     */
    public const STROKE_CAP = 'stroke_cap';

    /**
     * The stroke join: miter, bevel, and round.
     */
    public const STROKE_JOIN = 'stroke_join';

    /**
     * The start of the stroke relative to its total length.
     */
    public const STROKE_START = 'stroke_start';

    /**
     * The end of the stroke relative to its total length.
     */
    public const STROKE_END = 'stroke_end';

    /**
     * The offset of the stroke relative to its total length.
     */
    public const STROKE_OFFSET = 'stroke_offset';

    /**
     * The border radius of the element.
     */
    public const BORDER_RADIUS = 'border_radius';

    /**
     * The path of a shape can be defined either using unboxed or boxed coordinates.
     * - In order to use the unboxed coordinate system, set the width and height to null. The path can then be expressed
     *    as a series of coordinates that are relative to the element's x and y position.
     * - When you want to use boxed coordinates, define your path in relation to the width and height of the element using
     *    coordinates from 0% to 100%.
     * Learn how to use the shape element by using the template editor.
     */
    public const PATH = 'path';
}
