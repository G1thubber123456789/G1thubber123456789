<?php
$mysqli = new mysqli("localhost","root","root","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "CREATE DATABASE myDB";
if ($mysqli->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $mysqli->error;
}

$mysqli->close();
?>
