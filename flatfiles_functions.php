<?php


function read_from_file($filename) {


  // Reading from a file.
  $file = fopen($filename, 'r');

  $rows = '';
  while ($record = fgets($file)) {
    $record_parts = explode(',', $record);

    $id = $record_parts[0];
    $name = $record_parts[1];
    $class = $record_parts[2];
    $avg = $record_parts[3];

    $rows = $rows . '<tr>';
    $rows = $rows . '<td>' . $id . '</td>';
    $rows = $rows . '<td>' . $name . '</td>';
    $rows = $rows . '<td>' . $class . '</td>';
    $rows = $rows . '<td>' . $avg . '</td>';
    $rows = $rows . '</tr>';
  }

  fclose($file);

  return $rows;
}

// CRUD
// Create
// Read
// Update ----
// Delete

function delete_from_file($filename, $input_id) {
  $content = file_get_contents($filename);

  $lines = explode("\n", $content);

  $records = [];

  foreach ($lines as $line) {
    list($id, $name, $class, $avg) = explode(',', $line);
    $records[] = [
      'id' => $id,
      'name' => $name,
      'class' => $class,
      'avg' => $avg,
    ];
  }



  foreach ($records as $k => $record) {
    if ($record['id'] == $input_id) {
      unset($records[$k]);
    }
  }

  $records = array_filter($records);

  $updated_content = '';
  foreach ($records as $record) {
    $updated_content = $updated_content . implode(',', $record) . "\n";
  }

  file_put_contents($filename, $updated_content);
}
