<?php
$servername = "localhost";
$username = "ykhe";
$password = "dowAbQuo";
$dbname = "ykhe";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($conn->connect_errno) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>