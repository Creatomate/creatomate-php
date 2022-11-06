<?php

namespace Creatomate\Elements;

/**
 * Properties that can be used with \Creatomate\Elements\Audio.
 *
 * @link https://creatomate.com/docs/json/elements/common-properties
 * @link https://creatomate.com/docs/json/elements/audio-element
 */
class AudioProperties
{
    /**
     * Identical to duration from the common properties, but with the addition that it can be set to "media" to make the
     * element as long as the source audio clip.
     */
    public const DURATION = 'duration';

    /**
     * The URL of an audio clip (an mp3) you want to insert. If it was uploaded using the template editor, it may also be
     * its internal GUID.
     */
    public const SOURCE = 'source';

    /**
     * Trims the source audio clip to begin at the specified time (in seconds) rather than at the beginning of the audio
     * file.
     */
    public const TRIM_START = 'trim_start';

    /**
     * Trims the source audio clip so that it stops playing after the specified duration (in seconds) rather than at the
     * end of the clip.
     */
    public const TRIM_DURATION = 'trim_duration';

    /**
     * Fades in the volume for the specified duration (in seconds) at the beginning of the audio clip.
     */
    public const AUDIO_FADE_IN = 'audio_fade_in';

    /**
     * Fades out the volume for the specified duration (in seconds) at the end of the audio clip.
     */
    public const AUDIO_FADE_OUT = 'audio_fade_out';

    /**
     * When set to true, the audio clip starts over when it reaches the end.
     */
    public const LOOP = 'loop';
}
