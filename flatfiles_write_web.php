<?php
// @usage
// php flatfiles_write.php 1 Alex 3 89
//

require_once 'flatfiles_functions.php';

if (!empty($_REQUEST['id'])) {
  $id = $_REQUEST['id'];
  $name = $_REQUEST['name'];
  $class = $_REQUEST['class'];
  $avg = $_REQUEST['avg'];

  $filename = 'students.txt';

  $record = implode(',', [$id, $name, $class, $avg]);

  // Writing to a file.
  $file = fopen($filename, 'a+');
  fwrite($file, $record . "\n");
  fclose($file);

  print 'DATA SAVED for ID ' . $id . '!';
}

if (!empty($_REQUEST['delete_id'])) {
  $id = $_REQUEST['delete_id'];
  delete_from_file('students.txt', $id);
}
?>


Hi from writer

<form action="flatfiles_write_web.php">
  ID <input type="text" name="id" required><br/>
  Name <input type="text" name="name" required><br/>
  Class <input type="text" name="class"><br/>
  AVG <input type="text" name="avg"><br/>
  <input type="submit" value="Save">
  <input type="reset" value="Clear">
</form>

DELETE FORM
<form action="flatfiles_write_web.php">
  ID <input type="text" name="delete_id" required><br/>
  <input type="submit" value="Save">
</form>

