<?php
include 'dbconnect.php';
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: index.html");
    exit();
}



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch teacher name from session username
$teacher_name = $_SESSION['username'];

// Fetch data for students assigned to the specific teacher
$sql = "SELECT `student_name`, `question_1_marks`, `question_2_marks`, `question_3_marks`, `question_4_marks`, 
        `question_5_marks`, `question_6_marks`, `question_7_marks`, `question_8_marks`, 
        `question_9_marks`, `question_10_marks` 
        FROM `stud_name` WHERE `teacher_name` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $teacher_name);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
$performance = ["low" => 0, "medium" => 0, "high" => 0];
$question_data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;

        // Calculate total marks
        $total_marks = 0;
        for ($i = 1; $i <= 10; $i++) {
            $question_key = "question_" . $i . "_marks";
            $total_marks += $row[$question_key];

            // Aggregate question-wise performance
            if (!isset($question_data[$i])) {
                $question_data[$i] = [];
            }
            $question_data[$i][] = $row[$question_key];
        }

        // Categorize performance
        if ($total_marks <= 25) {
            $performance["low"]++;
        } elseif ($total_marks <= 37) {
            $performance["medium"]++;
        } else {
            $performance["high"]++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas de rendimiento</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f9;
        }
        h1 {
            color: #333;
        }
        .charts-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin: 20px auto;
            flex-wrap: wrap;
        }
        canvas {
            max-width: 600px;
            max-height: 400px;
        }
        table {
            width: 75%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 2px solid #333; /* Thicker, visible borders */
            padding: 10px;
            text-align: center;
            font-size: 20px;
        }
        th {
        background-color: #cce7ff; /* Light blue for header */
        color: #333; /* Dark text for readability */
        font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Análisis del rendimiento de los estudiantes que estudian bajo <?php echo htmlspecialchars($teacher_name); ?></h1>

    <div class="charts-container">
        <canvas id="performancePieChart"></canvas>
        <canvas id="questionBarChart"></canvas>
    </div>
    <div class="charts-container">
        <canvas id="studentsRiskToppersChart"></canvas>
    </div>

    <h2>tabla de rendimiento estudiantil</h2>
    <table>
        <thead>
            <tr>
                <th> Nombre del estudiante</th>
                <th>Total de calificaciones</th>
                <th>Categoría de rendimiento</th>
            </tr>
        </thead>
        <tbody id="studentTableBody">
        </tbody>
    </table>

    <script>
        // Data passed from PHP to JavaScript
        const performanceData = <?php echo json_encode($performance); ?>;
        const questionData = <?php echo json_encode($question_data); ?>;
        const studentData = <?php echo json_encode($data); ?>;

        // Calculate Students at Risk and Toppers
        let atRisk = 0;
        let toppers = 0;

        // Populate the student performance table
        const studentTableBody = document.getElementById("studentTableBody");

        studentData.forEach(student => {
            let totalMarks = 0;
            for (let i = 1; i <= 10; i++) {
                totalMarks += student[`question_${i}_marks`];
            }

            let performanceCategory = "Low";
            let rowColor = "background-color: #ff4d4d; color: #fff;"; // Red for Low Performance
            if (totalMarks > 25 && totalMarks <= 36) {
                performanceCategory = "Medium";
                rowColor = "background-color: #ffcc00; color: #000;"; // Yellow for Medium Performance
            } else if (totalMarks > 30) {
                performanceCategory = "High";
                rowColor = "background-color: #33cc33; color: #fff;"; // Green for High Performance
            }

            if (totalMarks < 23) atRisk++;
            if (totalMarks > 37) toppers++;

            const row = document.createElement("tr");
            row.style = rowColor;
            row.innerHTML = `
                <td>${student.student_name}</td>
                <td>${totalMarks}</td>
                <td>${performanceCategory}</td>
            `;
            studentTableBody.appendChild(row);
        });

        // Charts configuration
        const pieCtx = document.getElementById('performancePieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Rendimiento bajo', 'Rendimiento medio', 'Rendimiento alto'],
                datasets: [{
                    data: [performanceData.low, performanceData.medium, performanceData.high],
                    backgroundColor: ['#ff4d4d', '#ffcc00', '#33cc33'],
                    hoverBackgroundColor: ['#ff6666', '#ffdb4d', '#4dff4d'],
                }]
            }
        });

        const barCtx = document.getElementById('questionBarChart').getContext('2d');
        const labels = Object.keys(questionData).map(q => `Question ${q}`);
        const averages = Object.values(questionData).map(
            scores => scores.reduce((a, b) => a + b, 0) / scores.length
        );
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Calificaciones promedio',
                    data: averages,
                    backgroundColor: ['#ff9999', '#ffcc99', '#ffff99', '#ccff99', '#99ff99'],
                }]
            }
        });

        const riskToppersCtx = document.getElementById('studentsRiskToppersChart').getContext('2d');
        new Chart(riskToppersCtx, {
            type: 'pie',
            data: {
                labels:['Estudiantes en riesgo', 'Los mejores'],
                datasets: [{
                    data: [atRisk, toppers],
                    backgroundColor: ['#ff4d4d', '#33cc33'],
                }]
            }
        });
    </script>
</body>
</html>
