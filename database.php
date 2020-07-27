<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {

  die ("Connection failed: " . $conn->connect_error);

}
?>
