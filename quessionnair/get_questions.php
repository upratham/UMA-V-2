<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Correct variable names
$sname = "161.97.185.246";
$uname = "root";
$db_password = "Uma2025.2025";
$db_name = "virtual_lab_sim";
$port = 3306;

// Use the correct variables here
$conn = new mysqli($sname, $uname, $db_password, $db_name, $port);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

$questions = [];

while ($row = $result->fetch_assoc()) {
    $questions[] = [
        "question" => $row["question_text"],
        "options" => [
            $row["option_a"],
            $row["option_b"],
            $row["option_c"],
            $row["option_d"]
        ],
        "correct" => $row["option_" . strtolower($row["correct_option"])]
    ];
}

echo json_encode($questions);
$conn->close();
?>
