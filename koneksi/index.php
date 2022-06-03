<?php
ini_set('display_errors', TRUE);

$servername = "localhost";
$username = "root";
$password = "";
$db = 'warung';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?> 