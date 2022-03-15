<?php
// @usage
// php flatfiles_write.php 1 Alex 3 89

// STUDENT
// id
// name
// class
// avg (0-100)

$id = $argv[1];
$name = $argv[2];
$class = $argv[3];
$avg = $argv[4];

print 'ID    ' . $id . "\n";
print 'Name  ' . $name . "\n";
print 'Class ' . $class . "\n";
print 'AVG   ' . $avg . "\n";
print "\n";

$filename = 'students.txt';

$record = implode(',', [$id, $name, $class, $avg]);

// Writing to a file.
$file = fopen($filename, 'a+');
fwrite($file, $record . "\n");
fclose($file);
