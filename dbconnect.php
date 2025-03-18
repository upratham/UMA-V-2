<?php
$servername = "sql113.infinityfree.com";
$username = "if0_38169637";
$password = "wouRWn6Ss32Bv";
$database = "if0_38169637_virtula_lab_sim";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
