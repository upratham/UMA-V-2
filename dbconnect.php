<?php
// Database connection settings
$sname = 'rubicon-b.vis-hosting.com';
$uname = 'simulador';
$db_password = 'iRX0YiTwJyiko4G';
$db_name = 'simulador';
$port = 3306;

// Create a connection using the provided settings
$conn = mysqli_connect($sname, $uname, $db_password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
