<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
include 'dbconnect.php';



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
