<?php

require_once(__DIR__ . "/vendor/autoload.php");

use Spatie\Browsershot\Browsershot;

$urlToCapture = "https://spatie.be/docs/browsershot/v2/introduction";

$screenshot = Browsershot::url($urlToCapture);
$screenshot -> windowSize(1280, 720);
$screenshot -> save("captureWithBrowsershot.png");

?>
