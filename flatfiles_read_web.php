<?php
// @usage
// php flatfiles_read.php
require_once 'flatfiles_functions.php';
?>

<table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Class</td>
    <td>AVG</td>
  </tr>
  <?php print read_from_file('students.txt'); ?>
</table>

