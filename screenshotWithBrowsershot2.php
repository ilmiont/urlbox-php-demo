<?php

require_once(__DIR__ . "/vendor/autoload.php");

use Spatie\Browsershot\Browsershot;

$urlToCapture = "https://spatie.be/docs/browsershot/v2/introduction";

$screenshot = Browsershot::url($urlToCapture)
    -> windowSize(1920, 1080)
    -> dismissDialogs()
    -> setDelay(100)
    -> save("captureWithBrowsershot.png");

?>
