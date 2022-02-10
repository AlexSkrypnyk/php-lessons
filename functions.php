<?php

function get_count($argv, $default){
  // Default number of times to show.
  $count = $default;

  // If number of times was passed in the command line.
  if (isset($argv[1])) {
    if (empty(intval($argv[1]))) {
      return FALSE;
    }

    // Update the number of times variable.
    $count = $argv[1];
  }

  return $count;
}

function get_hello_world($i) {
  $text = "";
  $text = $text . "Hello world";
  $text = $text . " Tony ";
  $text = $text . "$i";
  return $text;
}
