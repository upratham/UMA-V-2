<?php
//Database credentials
$sname = "localhost";
$uname = "root";
$db_password = "Captain@56";
$db_name = "virtual_lab_sim";
$port = 3307; // Specify the port

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
