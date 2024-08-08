<?php
$servername = "sql211.infinityfree.com";
$username = "if0_37063122";
$password = "kAAbAsEE0UU";
$dbname = "if0_37063122_curd64";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
