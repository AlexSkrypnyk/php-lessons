<?php

// Problem
// -------
// Add 2 numbers
// + show on the screen.
// + Numbers are arguments to the script
// + Numbers must be integers, if numbers are not integers
//   then show error (and exit with non-zero code)
//
// + min 2 arguments
//
// $argv = ['sum.php', 2, 3 ] //array of argumnets
//               0     1  2
// $argc = 5 // count of arguments

if ($argc < 3) {
  print 'ERROR: Min 2 args required' . "\n";
  exit(1);
}

$sum = 0;

foreach ($argv as $k => $v) {
  if ($k == 0) {
    continue;
  }

  if (intval($v) == 0) {
    continue;
  }

  $sum = $sum + $v;
}

print $sum . "\n";


// 5 5 5 5 5
//   3 3 3
//     1
//   3 3 3
// 5 5 5 5 5


// 5 5 5 5 5
// 5 5 5 5 5
// 5 5 5 5 5
// 5 5 5 5 5
// 5 5 5 5 5
