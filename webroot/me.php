<?php 
/**
 * This is a skjold pagecontroller.
 *
 */
// Include the essential config-file which also creates the $skjold variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the skjold container.
$skjold['title'] = "Min Me-Sida OOPHP";
 
$skjold['main'] = <<<EOD
<h1>Lite om mig</h1>
<p>Jag heter johan Nilsson och har precis tagit tjänstledigt för att studera. Jag läser 
  just nu distanskurser på lite olika håll, alla inom någon genre av programmering</p>
  <img src="img/me.jpg" alt="Bild på Johan Nilsson">
  <p>Tidigare i mitt liv har jag arbetat som teknisk officeer i flottan i karlskrona. 
  Efter det gick jag till försvarsindustrin och jobbade med driftsättning och service
  av mmarina ledningssystem och även vissa sensorer. I framtiden vill jag jobba med 
  utveckling, jag brinner för både mjukvara och hårdva. Min personliga analys är att jag 
  tror hårdvaruutvecklingen kommer ha det svårt i Sverige och jag vill inte flytta till 
  asien, så jag satsar på mjukvara istället.</p>
EOD;
 

 
 
// Finally, leave it all to the rendering phase of skjold.
include(SKJOLD_THEME_PATH);