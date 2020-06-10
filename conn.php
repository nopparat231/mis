<?php
$conn = new mysqli("localhost","root","","mis");
$conn -> set_charset("utf8");
// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>