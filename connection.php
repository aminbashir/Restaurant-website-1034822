<?php
// database variables
$host = 'localhost';
$username = 'abdi';
$password = 'password';
$db = 'RESTAURANT';

// connect to database
$conn = mysqli_connect($host, $username, $password, $db);

// check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>