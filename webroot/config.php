<?php
/**
 * Config-file for Skjold. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Skjold paths.
 *
 */
define('SKJOLD_INSTALL_PATH', __DIR__ . '/..');
define('SKJOLD_THEME_PATH', SKJOLD_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(SKJOLD_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Skjold variable.
 *
 */
$skjold = array();
 
 
/**
 * Site wide settings.
 *
 */
$skjold['lang']         = 'sv';
$skjold['title_append'] = ' | Skjold en webbtemplate';
$skjold['header'] = <<<EOD
<img class='sitelogo' src='img/skjold.png' alt='skjold Logo'/>
<span class='sitetitle'>Me-Sida OOPHP</span>
<span class='siteslogan'>här är min Me-Sida för kursen OOPHP</span>
EOD;
$skjold['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Johan Nilsson (johan@basjohan.com) | <a href='https://github.com/basjohan/Skjold-base'>Skjold på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
 * Main Menu
 *
 */

$skjold['navbar'] = array(
  'callback' => function($items) {
  	$current = basename($_SERVER['SCRIPT_FILENAME'], ".php");
    $vald = isset($current) ? $current : null;
    if ($vald) $items[$vald]['class'] .= 'selected';
    return $items;
   },
 
  'items' => array(
    'me'         => array('text'=>'Me',          'url'=>'me.php',          'class' => null),
    'report'     => array('text'=>'Redovisning', 'url'=>'report.php',      'class' => null),
    'source'     => array('text'=>'Källkod',     'url'=>'source.php',      'class' => null),
  )
  
);

/**
 * Theme related settings.
 *
 */
$skjold['stylesheets'] = array('css/style.css');
$skjold['favicon']    = 'favicon.ico';