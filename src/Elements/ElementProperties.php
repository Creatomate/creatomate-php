<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with any of the elements in \Creatomate\Elements\.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 */
class ElementProperties
{
    /**
     * The track number on which this element is placed. If you are rendering an image, you can leave this value undefined.
     */
    public const TRACK = 'track';

    /**
     * The time at which you want the element to appear within its composition.
     */
    public const TIME = 'time';

    /**
     * The duration for which you would like the element to appear. When set to null, the element will be stretched until
     * the end of the composition or the beginning of the next element on the same track, whichever comes first.
     */
    public const DURATION = 'duration';

    /**
     * The x-axis position of the element in the composition.
     */
    public const X = 'x';

    /**
     * The y-axis position of the element in the composition.
     */
    public const Y = 'y';

    /**
     * The width of the element in relation to the composition.
     */
    public const WIDTH = 'width';

    /**
     * The height of the element in relation to the composition.
     */
    public const HEIGHT = 'height';

    /**
     * Using this property, the element will be constrained to a particular aspect ratio (width/height). A value of 1 is
     * square, a value of 1.6 is 16:10.
     */
    public const ASPECT_RATIO = 'aspect_ratio';

    /**
     * Padding of the element on the horizontal axis.
     */
    public const X_PADDING = 'x_padding';

    /**
     * Padding of the element on the vertical axis.
     */
    public const Y_PADDING = 'y_padding';

    /**
     * The order in which the elements are rendered. When set to null (the default), the element is rendered in the same
     * order in which it was defined.
     */
    public const Z_INDEX = 'z_index';

    /**
     * The element's origin from which its x-axis position, scale, rotate, and skew are applied.
     */
    public const X_ANCHOR = 'x_anchor';

    /**
     * The element's origin from which its y-axis position, scale, rotate, and skew are applied.
     */
    public const Y_ANCHOR = 'y_anchor';

    /**
     * The horizontal scale transformation in percent.
     */
    public const X_SCALE = 'x_scale';

    /**
     * The vertical scale transformation in percent.
     */
    public const Y_SCALE = 'y_scale';

    /**
     * The horizontal skew transformation in degrees.
     */
    public const X_SKEW = 'x_skew';

    /**
     * The vertical skew transformation in degrees.
     */
    public const Y_SKEW = 'y_skew';

    /**
     * Rotates the element along the x-axis.
     */
    public const X_ROTATION = 'x_rotation';

    /**
     * Rotates the element along the y-axis.
     */
    public const Y_ROTATION = 'y_rotation';

    /**
     * Rotates the element along the z-axis.
     */
    public const Z_ROTATION = 'z_rotation';

    /**
     * The distance between the z=0 plane and the camera. Use it with the z rotation and y rotation. As this value
     * decreases, the 3D perspective effect will become stronger. If null, the perspective is calculated by the element's
     * dimensions.
     */
    public const PERSPECTIVE = 'perspective';

    /**
     * Set to false to hide the backface of the element when rotated around its x and y axes.
     */
    public const BACKFACE_VISIBLE = 'backface_visible';

    /**
     * The position of the element's content on the x-axis. It's often used with the aspect ratio parameter. Also used to
     * align text in text elements.
     */
    public const X_ALIGNMENT = 'x_alignment';

    /**
     * The position of the element's content on the y-axis. It's often used with the aspect ratio parameter. Also used to
     * align text in text elements.
     */
    public const Y_ALIGNMENT = 'y_alignment';

    /**
     * The shadow color, or null to disable it.
     */
    public const SHADOW_COLOR = 'shadow_color';

    /**
     * The blurriness of the shadow.
     */
    public const SHADOW_BLUR = 'shadow_blur';

    /**
     * The offset of the shadow on the x-axis.
     */
    public const SHADOW_X = 'shadow_x';

    /**
     * The offset of the shadow on the y-axis.
     */
    public const SHADOW_Y = 'shadow_y';

    /**
     * When set to true, the element's content is clipped to its borders.
     */
    public const CLIP = 'clip';

    /**
     * The opacity of the element.
     */
    public const OPACITY = 'opacity';

    /**
     * The blend mode of the element. These options are available: none, multiply, screen, overlay, darken, lighten,
     * color-dodge, color-burn, hard-light, soft-light, lighter, difference, exclusion, hue, saturation, color,
     * luminosity.
     */
    public const BLEND_MODE = 'blend_mode';

    /**
     * The color filter that is applied to the element. These options are currently available: none, brighten, contrast,
     * invert, grayscale, and sepia.
     */
    public const COLOR_FILTER = 'color_filter';

    /**
     * This parameter allows you to control the color filter, such as the intensity.
     */
    public const COLOR_FILTER_VALUE = 'color_filter_value';

    /**
     * A color that is applied on top the element.
     */
    public const COLOR_OVERLAY = 'color_overlay';

    /**
     * The radius of the blur that is applied to the element.
     */
    public const BLUR_RADIUS = 'blur_radius';

    /**
     * The algorithm used to blur the element: stack, box, and box-2.
     */
    public const BLUR_MODE = 'blur_mode';

    /**
     * By setting the mask mode, the element is used as a mask for the element one track below it. The options alpha and
     * alpha-inverted use the alpha channel of this element, and luma and luma-inverted use the luminance.
     */
    public const MASK_MODE = 'mask_mode';

    /**
     * When set to true, the element is repeated in its composition, acting as a fill pattern.
     */
    public const REPEAT = 'repeat';

    /**
     * This parameter is used in conjunction with warp_matrix to apply a warp effect to the element. When set to default,
     * the warp is applied based on a grid of points. By choosing the perspective option, you can warp the element using a
     * 2 by 2 grid, similar to Adobe After Effects' "Perspective Corner Pin".
     */
    public const WARP_MODE = 'warp_mode';

    /**
     * Array of points that control the warp effect. For a better understanding of how it should be configured, use the
     * template designer.
     */
    public const WARP_MATRIX = 'warp_matrix';

    /**
     * An animation used as transition between this and the previous element.
     */
    public const TRANSITION = 'transition';

    /**
     * An animation that is played at the start.
     */
    public const ENTER = 'enter';

    /**
     * An animation that is played at the end.
     */
    public const EXIT = 'exit';

    /**
     * An array of animation keyframes.
     */
    public const ANIMATIONS = 'animations';
}
