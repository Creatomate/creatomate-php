<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with \Creatomate\Elements\Text.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 * @link https://creatomate.com/docs/json/elements/text-element
 */
class TextProperties extends ElementProperties
{
    /**
     * The text displayed in the element.
     */
    public const TEXT = 'text';

    /**
     * The font family used to render the text. You can define your own custom fonts at the top of the template.
     */
    public const FONT_FAMILY = 'font_family';

    /**
     * The font's weight.
     */
    public const FONT_WEIGHT = 'font_weight';

    /**
     * The font's style (e.g., italics).
     */
    public const FONT_STYLE = 'font_style';

    /**
     * Use this property to set a fixed font size, or keep it at null if you want the font size to be automatically sized
     * based on the available space.
     */
    public const FONT_SIZE = 'font_size';

    /**
     * 	Use this property to specify the minimum font size when the text is auto-sized.
     */
    public const FONT_SIZE_MINIMUM = 'font_size_minimum';

    /**
     * Use this property to specify the maximum font size when the text is auto-sized.
     */
    public const FONT_SIZE_MAXIMUM = 'font_size_maximum';

    /**
     * The text's letter spacing as a percentage of the font size.
     */
    public const LETTER_SPACING = 'letter_spacing';

    /**
     * The text's line height as a percentage of the font size.
     */
    public const LINE_HEIGHT = 'line_height';

    /**
     * If this is set to false, text will not wrap to the next line when there isn't enough space available in the
     * element.
     */
    public const TEXT_WRAP = 'text_wrap';

    /**
     * Set this to true to clip off text that overflows the element's borders. An ellipsis (...) will be displayed if the
     * text is clipped off. If you do not want to display an ellipsis, use the common property clip instead.
     */
    public const TEXT_CLIP = 'text_clip';

    /**
     * A transformation applied to the text content. It can be set to none, lowercase or uppercase.
     */
    public const TEXT_TRANSFORM = 'text_transform';

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
     * The text background color.
     */
    public const BACKGROUND_COLOR = 'background_color';

    /**
     * Horizontal padding added to the text background as a percentage of the font size.
     */
    public const BACKGROUND_X_PADDING = 'background_x_padding';

    /**
     * Vertical padding added to the text background as a percentage of the font size.
     */
    public const BACKGROUND_Y_PADDING = 'background_y_padding';

    /**
     * Border radius of the text background.
     */
    public const BACKGROUND_BORDER_RADIUS = 'background_border_radius';

    /**
     * You can use this threshold to align the text background with other text lines. It is a percentage of the element's
     * width. A value of 0% disables alignment.
     */
    public const BACKGROUND_ALIGN_THRESHOLD = 'background_align_threshold';

    /**
     * To use auto-transcription for this text element, set it to the ID of the video element for which subtitles are to
     * be generated.
     */
    public const TRANSCRIPT_SOURCE = 'transcript_source';

    /**
     * The transcript effect: color, karaoke, highlight, fade, bounce, slide, or enlarge.
     */
    public const TRANSCRIPT_EFFECT = 'transcript_effect';

    /**
     * The transcript split: none, word, or line.
     */
    public const TRANSCRIPT_SPLIT = 'transcript_split';

    /**
     * The transcript placement: static, animate, or align.
     */
    public const TRANSCRIPT_PLACEMENT = 'transcript_placement';

    /**
     * The maximum number of characters shown simultaneously.
     */
    public const TRANSCRIPT_MAXIMUM_LENGTH = 'transcript_maximum_length';

    /**
     * The color applied to the currently spoken text (word or line). Use this in conjunction with "transcript_split".
     */
    public const TRANSCRIPT_COLOR = 'transcript_color';
}
