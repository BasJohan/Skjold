<?php 
/**
 * This is a skjold pagecontroller.
 *
 */
// Include the essential config-file which also creates the $skjold variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Add style for csource
$skjold['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..')); 
 
// Do it and store it all in variables in the skjold container.
$skjold['title'] = "Visa Källkod";
 

$skjold['main'] =  "<h1>Visa källkod</h1>\n" . $source->View();
 

 
 
// Finally, leave it all to the rendering phase of skjold.
include(SKJOLD_THEME_PATH);