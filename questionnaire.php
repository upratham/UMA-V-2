<?php
include 'dbconnect.php';
session_start();



if (!$conn) {
    die(json_encode(["status" => "error", "message" => "Database connection failed: " . mysqli_connect_error()]));
}

// Ensure user is logged in
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: index.html");
    exit();
}

// Default response for GET requests
$practical_number = isset($_GET['practical_number']) ? $_GET['practical_number'] : null;
if (!$practical_number) {
    echo "<p>Error: Practical number is not specified.</p>";
    exit();
}

// Subject mapping logic (if required elsewhere in the file)
$subject_name = "Unknown Subject";
if (strpos($practical_number, 'A') === 0) {
    $subject_name = "Anatomy";
} elseif (strpos($practical_number, 'B') === 0) {
    $subject_name = "Biology";
} elseif (strpos($practical_number, 'C') === 0) {
    $subject_name = "Chemistry";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire - Practical <?php echo htmlspecialchars($practical_number); ?> (<?php echo htmlspecialchars($subject_name); ?>)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }
        .profile-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .logout-button {
            padding: 10px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #e53935;
        }
        .question {
            margin-bottom: 15px;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: none;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .feedback {
            margin-top: 20px;
            font-weight: bold;
        }
        .graph-section {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="profile-info">
                <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> (<?php echo htmlspecialchars($_SESSION['role']); ?>)</p>
            </div>
            <div>
                <button class="logout-button" onclick="window.location.href='logout.php'">Logout</button>
            </div>
        </div>

        <h2>Subject: <?php echo htmlspecialchars($subject_name); ?></h2>

        <div class="questions-section" id="questions">
            <p>Loading questions for Practical <?php echo htmlspecialchars($practical_number); ?>...</p>
        </div>

        <div class="form-section">
            <button id="submitAllButton" onclick="submitAllAnswers()">Submit All</button>
        </div>

        <div class="feedback" id="feedback"></div>

        <div class="graph-section" id="graph">
            <p>Performance graph will be displayed here after submission.</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function loadQuestions() {
            var practicalNumber = "<?php echo htmlspecialchars($practical_number); ?>";
            $.ajax({
                url: `http://127.0.0.1:5000/api/practical/${practicalNumber}`,
                method: 'GET',
                success: function (data) {
                    $('#questions').html('<h2>Questionnaire</h2>');
                    data.forEach(function (question, index) {
                        $('#questions').append(`
                            <div class="question">
                                <p><strong>Question ${index + 1}:</strong> ${question.Preguntas}</p>
                                <textarea id="answer_${question.item}" placeholder="Type your answer here"></textarea>
                            </div>
                        `);
                    });
                },
                error: function () {
                    $('#questions').html('<p>Failed to load questions. Please try again later.</p>');
                }
            });
        }

        function submitAllAnswers() {
            var answers = [];
            var allFilled = true; // To track if all fields are filled

            $('.question').each(function () {
                var questionCode = $(this).find('textarea').attr('id').split('_')[1];
                var studentAnswer = $(this).find('textarea').val().trim(); // Trim to remove extra spaces

                if (studentAnswer === "") {
                    allFilled = false;
                    $(this).find('textarea').css('border', '2px solid red'); // Highlight the empty box
                } else {
                    $(this).find('textarea').css('border', ''); // Reset border for filled boxes
                    answers.push({ question_code: questionCode, student_answer: studentAnswer });
                }
            });

            if (!allFilled) {
                alert('Por favor, proporcione respuestas a todas las preguntas antes de enviar.');
                return;
            }

            var practicalNumber = "<?php echo htmlspecialchars($practical_number); ?>";
            var studentName = "<?php echo htmlspecialchars($_SESSION['username']); ?>";
            var subjectName = "<?php echo htmlspecialchars($subject_name); ?>";

            $.ajax({
                url: 'http://127.0.0.1:5000/api/submit_all_answers',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ answers: answers }),
                success: function (response) {
                    var feedbackHtml = '<h3>Feedback:</h3>';
                    var marksArray = [];
                    response.scores.forEach(function (item) {
                        feedbackHtml += `<p>Question ${item.question_code}: Score - ${item.score}</p>`;
                        marksArray.push(item.score);
                    });
                    $('#feedback').html(feedbackHtml);

                    // Send marks array, student name, and subject to PHP
                    $.ajax({
                        url: 'insert_marks.php',
                        method: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            marks: marksArray,
                            student_name: studentName,
                            subject_name: subjectName,
                        }),
                        success: function (data) {
                            console.log(data);
                        },
                        error: function () {
                            console.log('Error updating marks in the database.');
                        },
                    });

                    loadPerformanceGraph(response.scores);
                },
                error: function () {
                    $('#feedback').html('<p>Error submitting answers. Please try again later.</p>');
                }
            });
        }


        function loadPerformanceGraph(scores) {
            $.ajax({
                url: 'http://127.0.0.1:5000/api/performance_graph',
                method: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ scores: scores }),
                xhrFields: {
                    responseType: 'blob'
                },
                success: function (response) {
                    var url = URL.createObjectURL(response);
                    $('#graph').html('<img src="' + url + '" alt="Performance Graph">');
                },
                error: function () {
                    $('#graph').html('<p>Error loading performance graph. Please try again later.</p>');
                }
            });
        }

        $(document).ready(function () {
            loadQuestions();
        });
    </script>
</body>
</html>
