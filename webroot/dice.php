<?php 
/**
 * This is a skjold pagecontroller.
 *
 */
// Include the essential config-file which also creates the $skjold variable with its defaults.
include(__DIR__.'/config.php'); 
 
$dice = new CDice();
$roll = isset($_GET['roll']) && is_numeric($_GET['roll']) ? $_GET['roll'] : 0;
if($roll > 100) {
  throw new Exception("To many rolls on the dice. Not allowed.");
}
$html = null;
if($roll) {
  $dice->Roll($roll);
  $html = "<p>Du gjorde {$roll} kast och fick följande resultat.</p>\n<ul>";
  foreach($dice->GetResults() as $val) {
    $html .= "\n<li>{$val}</li>";
  }
  $html .= "\n</ul>\n";
  $html .= "<p>Totalt fick du " . $dice->GetTotal() . " poäng på dina kast.</p>";
}

 
// Do it and store it all in variables in the skjold container.
$skjold['title'] = "Tärningar";
 
$skjold['header'] = <<<EOD
<img class='sitelogo' src='img/skjold.png' alt='skjold Logo'/>
<span class='sitetitle'>skjold webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$skjold['main'] = <<<EOD
<h1>Testar tärningsmodul</h1>
<p>Detta är en exempelsida som visar hur skjold kan använda moduler.</p>
<p>Hur många kast vill du göra, <a href='?roll=1'>1 kast</a>, <a href='?roll=3'>3 kast</a> eller <a href='?roll=6'>6 kast</a>? </p>
{$html}
EOD;
 
$skjold['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Johan Nilsson (johan@basjohan.com) | <a href='https://github.com/basjohan/Skjold-base'>Skjold på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of skjold.
include(SKJOLD_THEME_PATH);