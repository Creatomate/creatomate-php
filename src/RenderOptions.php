<?php

namespace Creatomate;

/**
 * Options that can be used with \Creatomate\Client. See https://creatomate.com/docs/api/rest-api/post-v1-renders.
 */
final class SourceProperties
{
  /**
   * The output format of the render, which can be jpg, png, gif, or mp4. If it's not set, the template's output_format
   * is used.
   */
  public const OUTPUT_FORMAT = 'output_format';

  /**
   * The frame rate of the rendered video, which can be 1 to 60 fps for mp4, and 1 to 15 for gif. Do not provide this
   * parameter when rendering a jpg or png.
   */
  public const FRAME_RATE = 'framerate';

  /**
   * The scale at which you want your render to be in relation to the template. The default value is 1.0 (100%), which
   * means the render will have the same dimensions as the template.
   */
  public const RENDER_SCALE = 'render_scale';

  /**
   * Scales the render so that its width never exceeds the provided number while maintaining its aspect ratio. This
   * parameter can be combined with max_height. If set, render_scale will be ignored.
   */
  public const MAX_WIDTH = 'max_width';

  /**
   * Scales the render so that its height never exceeds the provided number while maintaining its aspect ratio. This
   * parameter can be combined with max_width. If set, render_scale will be ignored.
   */
  public const MAX_HEIGHT = 'max_height';

  /**
   * The ID of the template that you want to use. Using this parameter will always result in a single render.
   */
  public const TEMPLATE_ID = 'template_id';

  /**
   * An JSON array containing one or more template tags. You can assign tags to your templates under My Templates in
   * your dashboard. Depending on how many templates are assigned to those tags, this may create a single render,
   * multiple renders, or none at all.
   */
  public const TAGS = 'tags';

  /**
   * You can provide the template source here directly if you do not want to use a template from your account. Using
   * this parameter will always result in a single render.
   */
  public const SOURCE = 'source';

  /**
   * A JSON map containing modifications you want to apply to your template before it is rendered.
   */
  public const MODIFICATIONS = 'modifications';

  /**
   * A URL that you want to be called when the render succeeds or fails. Read more about webhooks.
   */
  public const WEBHOOK_URL = 'webhook_url';

  /**
   * A string you want to pass to the webhook URL. In this field, you can store your own data to identify renders later,
   * such as a database ID.
   */
  public const METADATA = 'metadata';
}
