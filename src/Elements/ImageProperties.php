<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with \Creatomate\Elements\Image.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 * @link https://creatomate.com/docs/json/elements/image-element
 */
final class ImageProperties extends ElementProperties
{
    /**
     * The URL of an image (a jpg, png, or svg) you want to display. If it was uploaded using the template editor, it may
     * also be its internal GUID.
     */
    public const SOURCE = 'source';

    /**
     * This optional parameter indicates whether to generate the image using a third-party AI platform (such as OpenAI or
     * Stability AI). Refer to the template editor for details on setting up a provider.
     */
    public const PROVIDER = 'provider';

    /**
     * This property specifies how the image should be resized to fit the element. It can be set to cover, contain, or
     * fill.
     */
    public const FIT = 'fit';

    /**
     * Experimental feature. If smart cropping is enabled and fit is set to cover, an edge detection algorithm scans the
     * image to find the best cropping.
     */
    public const SMART_CROP = 'smart_crop';

    /**
     * The stroke.
     */
    public const STROKE = 'stroke';

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
     * The border radius of the element.
     */
    public const BORDER_RADIUS = 'border_radius';
}
