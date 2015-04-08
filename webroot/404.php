<?php 
/**
 * This is a Skjold pagecontroller.
 *
 */
// Include the essential config-file which also creates the $skjold variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Skjold container.
$skjold['title'] = "404";
$skjold['header'] = "";
$skjold['main'] = "This is a Anax 404. Document is not here.";
$skjold['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Skjold.
include(SKJOLD_THEME_PATH);