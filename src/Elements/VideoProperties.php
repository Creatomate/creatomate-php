<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with \Creatomate\Elements\Video.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 * @link https://creatomate.com/docs/json/elements/video-element
 */
class VideoProperties extends ElementProperties
{
    /**
     * Identical to duration from the common properties, but with the addition that it can be set to "media" to make the
     * element as long as the source video.
     */
    public const DURATION = 'duration';

    /**
     * The URL of an video (an mp4) you want to display. If it was uploaded using the template editor, it may also be its
     * internal GUID.
     */
    public const SOURCE = 'source';

    /**
     * This property specifies how the video should be resized to fit the element. It can be set to cover, contain, or
     * fill.
     */
    public const FIT = 'fit';

    /**
     * Trims the source video to begin at the specified time (in seconds) rather than at the beginning.
     */
    public const TRIM_START = 'trim_start';

    /**
     * Trims the source video so that it stops playing after the specified duration (in seconds) rather than at the end of
     * the source video.
     */
    public const TRIM_END = 'trim_end';

    /**
     * When set to true, the video starts over when it reaches the end.
     */
    public const LOOP = 'loop';

    /**
     * When set to true, the audio track of the video is ignored.
     */
    public const MUTED = 'muted';

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
