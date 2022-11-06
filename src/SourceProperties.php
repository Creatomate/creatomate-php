<?php

namespace Creatomate;

/**
 * Properties that can be used with \Creatomate\Source.
 */
final class SourceProperties
{
      /**
       * The output format of the render, which can be jpg, png, gif, or mp4.
       */
      public const OUTPUT_FORMAT = 'output_format';

      /**
       * Only for MP4 renders. Sets the constant rate factor (CRF) ranging from 17 to 51. Higher values result in smaller
       * files, but lower video quality. Defaults to 23.
       */
      public const CRF = 'crf';

      /**
       * Only for GIF renders. With 'best', the GIF generation takes much longer, and the file size increases significantly.
       * Defaults to 'fast'.
       */
      public const GIF_QUALITY = 'gif_quality';

      /**
       * Only for GIF renders. A number ranging from 0 to 200 indicating the compression level (30 means very light
       * compression, 200 means heavy compression). Defaults to 0.
       */
      public const GIF_COMPRESSION = 'gif_compression';

      /**
       * The width of the output in pixels.
       */
      public const WIDTH = 'width';

      /**
       * The height of the output in pixels.
       */
      public const HEIGHT = 'height';

      /**
       *  The frame rate of the rendered video, which can be 1 to 60 fps for mp4, and 1 to 15 for gif. Do not provide this
       *  parameter when rendering a jpg or png.
       */
      public const FRAME_RATE = 'frame_rate';

      /**
       * The duration of the output in seconds.
       */
      public const DURATION = 'duration';

      /**
       * Only for GIF renders. Set to true to make the GIF repeat.
       */
      public const LOOP = 'loop';

      /**
       * If a snapshot image is desired, specify the time in seconds at which the snapshot should be taken.
       */
      public const SNAPSHOT_TIME = 'snapshot_time';

      /**
       * The style of the Emojis used in text elements. Can be set to 'facebook', 'google', 'twitter', or 'apple'.
       */
      public const EMOJI_STYLE = 'emoji_style';

      /**
       * The background fill color. It may be a string or an array of color stops if fillMode is set to linear or
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
       * The radius of the radial gradient in relation to the output's max(width,height).
       */
      public const FILL_RADIUS = 'fill_radius';

      /**
       * Creatomate includes more than a thousand fonts from the Google Font project, but you can also import your own
       * custom font as WOF, OTF, or TTF. Provide them in this array.
       */
      public const FONTS = 'fonts';

      /**
       * Elements that make up the render.
       */
      public const ELEMENTS = 'elements';
}
