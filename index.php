<?php

require_once 'functions.php';

$return_code = main($argv, $argc);
exit( $return_code  );

// -----------

function main($argv, $argc) {
  $count = get_count($argv, 5);

  if (empty($count)) {
    print 'Error: only integer values greater then 0 are supported' . "\n";
    return 1;
  }

  echo 'START' . "\n";

  $i = 0;
  while ($i < $count) {
    if ($i < 3) {
      print get_hello_world($i) . "\n";
    }
    else {
      print get_hello_world($i) . " Too much \n";
    }
    $i = $i + 1;
  }

  print 'FINISH' . "\n";

  return 0;
}
