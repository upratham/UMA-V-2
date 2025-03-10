<?php
include 'dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_username = $_POST['student_username'];
    $student_password = $_POST['student_password'];
    

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Verify current password
    $stmt = $conn->prepare("SELECT password FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();
    $stmt->close();

    // Check if the current password is correct
    if (!password_verify($current_password, $hashed_password)) {
        echo "Current password is incorrect.";
        exit();
    }

    // Check if the new password matches the confirmation
    if ($new_password !== $confirm_password) {
        echo "New password and confirmation do not match.";
        exit();
    }

    // Hash the new password
    $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the password in the database
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
    $stmt->bind_param("ss", $new_hashed_password, $username);

    if ($stmt->execute()) {
        echo "Password changed successfully!";
        header("Location: homepage.php");
        exit();
    } else {
        echo "Error updating password: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
<a href="homepage.php">Back to Homepage</a>
