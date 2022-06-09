<?php

// This will store the screenshot.js process exit code
$exitCode = null;

// Webpage URL to screenshot
$urlToCapture = "https://developers.google.com/web/tools/puppeteer";

// Execute screenshot.js to launch Chrome and create the capture
$result = exec(
    command: sprintf(
        "node screenshotWithPuppeteer.js '%s' '%s'",
        escapeshellcmd($urlToCapture),
        escapeshellcmd("captureWithPuppeteer.png")
    ),
    result_code: $exitCode
);

// Check the success status
if ($result && ($exitCode === 0)) {
    // The process succeeded
}
else {
    // An error occurred with the command
}

?>
