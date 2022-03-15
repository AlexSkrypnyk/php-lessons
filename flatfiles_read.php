<?php
// @usage
// php flatfiles_read.php

$filename = 'students.txt';

// Reading from a file.
$file = fopen($filename, 'r');

while ($record = fgets($file)) {
  $record_parts = explode(',', $record);

  $id = $record_parts[0];
  $name = $record_parts[1];
  $class = $record_parts[2];
  $avg = $record_parts[3];

  print 'ID    ' . $id . "\n";
  print 'Name  ' . $name . "\n";
  print 'Class ' . $class . "\n";
  print 'AVG   ' . $avg . "\n";
  print "\n";
}

fclose($file);
