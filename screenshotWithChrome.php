<?php

require_once(__DIR__ . "/vendor/autoload.php");

use HeadlessChromium\BrowserFactory;

$browser = (new BrowserFactory()) -> createBrowser();

$urlToCapture = "https://packagist.org/packages/chrome-php/chrome";

try {
    
    $page = $browser -> createPage();
    $page -> setViewport(1280, 720);
    $page -> navigate($urlToCapture) -> waitForNavigation();

    $screenshot = $page -> screenshot();
    $screenshot -> saveToFile("captureWithChrome.png");

}
catch (\Exception $ex) {
    // Something went wrong
}
finally {
    $browser -> close();
}

?>
