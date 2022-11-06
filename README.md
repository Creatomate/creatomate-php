# Creatomate PHP Library

Create videos and images from your PHP application!

[Creatomate](https://creatomate.com) is a media generation API for editing and rendering videos and images using code. The platform uses a JSON format to specify how a **MP4, GIF, JPEG or PNG** should be generated. It's all handled by Creatomate's render farm, so you don't have to worry about server infrastructure.

This library makes working with the Creatomate API even easier by providing a well-structured, lightweight interface. With just a few lines of code, you can create hundreds, even thousands, of dynamic videos and images.

As an alternative to creating everything from code, Creatomate also comes with an online video editor to create reusable templates. These templates can then be rendered with custom and personalized data using this PHP library. Check out [Creatomate.com](https://creatomate.com) to learn more.

## Usage

Examples of how to use this library can be found at: [https://github.com/creatomate/php-examples](https://github.com/creatomate/php-examples). For general information about the Creatomate API, check out the [Creatomate API docs](https://creatomate.com/docs/api/introduction).

### Installation

Install `creatomate` into your PHP project with the following command:

```bash
composer require creatomate/creatomate
```

### Quick example

You build up your video or image with elements (*videos, images, texts, shapes, compositions*), which can then be animated by using keyframes and transitions. A basic implementation looks like this. Here, two videos are concatenated together with a text overlay:

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

if (count($argv) < 2) {
    die('Please provide your API key, as follows: php run.php YOUR_API_KEY');
}

$apiKey = $argv[1];
$client = new Creatomate\Client($apiKey);

$source = new Creatomate\Source([

  // Supported formats are mp4, gif, jpg and png
  'output_format' => 'mp4',

  // Output resolution
  'width' => 1280,
  'height' => 720,

  // Add videos, images, texts, shapes, compositions, keyframes, animations and more. Check out:
  // https://github.com/creatomate/php-examples
  'elements' => [

    // Video 1
    new Creatomate\Elements\Video([
      'track' => 1,
      'source' => 'https://creatomate-static.s3.amazonaws.com/demo/video1.mp4',
    ]),

    // Video 2, played after video 1 as it is on the same track
    new Creatomate\Elements\Video([
      'track' => 1,
      'source' => 'https://creatomate-static.s3.amazonaws.com/demo/video2.mp4',
      'transition' => new Creatomate\Animations\Fade([ 'duration' => 1 ]),
    ]),
    
    // Text overlay
    new Creatomate\Elements\Text([
      'text' => 'Your text overlay here',
      
      // Make the container as big as the screen and add some padding
      'width' => '100%',
      'height' => '100%',
      'x_padding' => '3 vmin',
      'y_padding' => '8 vmin',

      // Align text to the bottom center
      'x_alignment' => '50%',
      'y_alignment' => '100%',

      // Text style
      'font_family' => 'Aileron',
      'font_weight' => 800,
      'font_size' => '8.48 vh',
      'shadow_color' => 'rgba(0,0,0,0.65)',
      'shadow_blur' => '1.6 vmin',
      'fill_color' => '#ffffff',
    ]),
  ],
]);

echo 'Please wait while your video is being rendered...' . PHP_EOL;
$renders = $client->render(['source' => $source]);

echo 'Completed: ' . json_encode($renders, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . PHP_EOL;
```

## Issues & Comments

Feel free to contact us if you encounter any issues with the library or Creatomate API at [support@creatomate.com](mailto:support@creatomate.com).

## License

The Creatomate PHP Library is licensed under the MIT license. Please refer to the [LICENSE](https://github.com/Creatomate/creatomate-php/blob/main/LICENSE) for more information.
