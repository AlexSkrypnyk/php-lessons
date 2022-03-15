<?php
// @usage
// php flatfiles_read.php

$filename = 'students.txt';

// Reading from a file.
$file = fopen($filename, 'r');

print '<table>';
print '<tr>';
print '<td>ID</td>';
print '<td>Name</td>';
print '<td>Class</td>';
print '<td>AVG</td>';
print '</tr>';

while ($record = fgets($file)) {
  $record_parts = explode(',', $record);

  $id = $record_parts[0];
  $name = $record_parts[1];
  $class = $record_parts[2];
  $avg = $record_parts[3];

  print '<tr>';
  print '<td>' . $id . '</td>';
  print '<td>' . $name . '</td>';
  print '<td>' . $class . '</td>';
  print '<td>' . $avg . '</td>';
  print '</tr>';
}
print '</table>';

fclose($file);
?>
