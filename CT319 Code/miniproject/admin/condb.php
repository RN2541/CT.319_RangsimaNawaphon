<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname= 'ct319'; //เรียกใช้งานตัว database ใน Xammp
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>