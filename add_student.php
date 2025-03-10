<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_username = $_POST['student_username'];
    $student_password = $_POST['student_password'];
    
    // Check connection
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Hash the password before storing it
    $hashed_password = password_hash($student_password, PASSWORD_DEFAULT);

    // Insert the new student into the users table
    $stmt = $conn->prepare("INSERT INTO users (user_name, password, role) VALUES (?, ?, 'student')");
    $stmt->bind_param("ss", $student_username, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>
            alert('¡Nuevo estudiante añadido con éxito!');
            window.location.href = 'homepage_d.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . $stmt->error . "');
            window.history.back();
        </script>";
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
