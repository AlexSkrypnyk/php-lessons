<?php

// 7 7 7 7 7 7 7
//   5 5 5 5 5
//     3 3 3
//       1
//     3 3 3
//   5 5 5 5 5
// 7 7 7 7 7 7 7


// Input.
$count = $argv[1];

// Round to the next odd.
$count = $count % 2 ? $count : $count - 1;

$rows = $count;
$cols = $rows;

$number = $rows;
$k = 1;
$skip = 0;

// Rows.
for ($row = 0; $row < $rows; $row++) {
  // Columns.
  for ($col = 0; $col < $cols; $col++) {
    $number_length = strlen((string) $count);

    if ($col < $skip || $col >= $cols - $skip) {
      $string = ' ';
    }
    else {
      $string = $number;
    }
    print str_pad($string, $number_length, ' ', STR_PAD_LEFT);

    print ' ';
  }

  $number = $number - ($k * 2);
  // Increment or decrement skip based on the $k.
  $skip = $skip + $k;
  // Reverse multiplier.
  $k = $number > 1 ? $k : -1;

  print "\n";
}
