<?php

require_once 'functions.php';

$count = get_count($argv, 5);

echo 'START' . "\n";

$i = 0;
while ($i < $count) {
  if ($i < 3) {
    print get_hello_world($i) . "\n";
  }
  else {
    print get_hello_world($i) . " Too much 2 \n";
  }
  $i = $i + 1;
}

print 'FINISH' . "\n";
