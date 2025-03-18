<?php
//Database credentials
$sname = "sql5.freesqldatabase.com";
$uname = "sql5766902";
$db_password = "s2tUS6CUP4";
$db_name = "sql5766902";
$port = 3306; // Specify the port

// $sname = "localhost";
// $uname = "root";
// $db_password = "Captain@56";
// $db_name = "virtual_lab_sim";
// $port = 3307;

// Create connection
$conn = new mysqli($sname, $uname, $db_password, $db_name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
