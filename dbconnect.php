<?php
// Updated database connection settings
$sname = "161.97.185.246";
$uname = "root";
$db_password = "Uma2025.2025";
$db_name = "virtual_lab_sim";
$port = 3306;

// Create connection
$conn = mysqli_connect($sname, $uname, $db_password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
