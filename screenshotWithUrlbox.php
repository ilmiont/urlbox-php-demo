<?php

require_once(__DIR__ . "/vendor/autoload.php");

use Urlbox\Screenshots\Urlbox;

$urlToCapture = "urlbox.io";

$urlbox = Urlbox::fromCredentials("API_KEY", "API_SECRET");

$urlboxUrl = $urlbox -> generateUrl(["url" => $urlToCapture, "width" => 1280, "height" => 720]);
(new \GuzzleHttp\Client()) -> request("GET", $urlboxUrl, ["sink" => "captureWithUrlBox.png"]);

?>
