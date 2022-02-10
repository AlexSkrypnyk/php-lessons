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
$rows = $count % 2 ? $count : $count - 1;
$cols = $rows;

$number = $rows;
$k = 1;
$skip = 0;

// Rows.
for ($row = 0; $row < $rows; $row++) {
  // Columns.
  for ($col = 0; $col < $cols; $col++) {
    $number_length = strlen((string) $rows);

    if ($col < $skip || $col >= $cols - $skip) {
      print str_repeat(' ', $number_length);
    }
    else {
      print str_pad($number, $number_length, ' ', STR_PAD_LEFT);
    }

    print str_repeat(' ', $number_length);
  }

  $number = $number - ($k * 2);
  // Increment or decrement skip based on the $k.
  $skip = $skip + $k;
  // Reverse multiplier.
  $k = $number > 1 ? $k : -1;

  print "\n";
}
