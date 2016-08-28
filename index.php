<?php

/**
 * Escapes a string for use with
 * String.fromCharCode()
 */
function encodeToCharString($string) {
  $string = htmlentities($string);
  
  $charString = "";
  foreach(str_split($string) as $char) {
    // e.g. &#64;
    $charString .= sprintf("&#%d;", ord($char));
  }
  
  $chars = array();
  foreach(str_split($charString) as $char) {
    $chars[] = ord($char);
  }
  
  return implode(",", $chars); 
}

$email = encodeToCharString('info@pegproductions.com');
$phone = encodeToCharString('07845 594224');

$description = "Peg Productions is a web programming and design contracting firm, providing highly skilled employees to help build and maintain your web projects. Get in touch today for a quote per hour or per project.";

include 'template.php';