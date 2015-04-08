<?php 
/**
 * This is a skjold pagecontroller.
 *
 */
// Include the essential config-file which also creates the $skjold variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the skjold container.
$skjold['title'] = "Redovisning";
 

 
$skjold['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur skjold ser ut och fungerar.</p>
EOD;
 

 
 
// Finally, leave it all to the rendering phase of skjold.
include(SKJOLD_THEME_PATH);