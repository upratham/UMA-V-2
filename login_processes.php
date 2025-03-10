<?php
 include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    echo $username;
    echo $password;
    echo $role;


    // Database connection settings
    // $sname = "localhost";
    // $uname = "root";
    // $db_password = "Captain@56";
    // $db_name = "virtual_lab_sim";

    // Create a connection using the provided settings
    //$conn = mysqli_connect($sname, $uname, $db_password, $db_name, 3307);

    // Check connection
    if (!$conn) {
        header("Location: index.html?error=Connection+failed");
        exit();
    }

    // Prepare and bind the SQL statement to get the user's password and role
    $stmt = $conn->prepare("SELECT password, role FROM users WHERE user_name = ?");
    $stmt->bind_param("s", $username);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching user was found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
        $stored_role = $row['role'];

        // Determine if the stored password is hashed
        $is_hashed = password_get_info($stored_password)['algo'] !== 0;

        // Check if the password is correct
        $password_matches = $is_hashed ? password_verify($password, $stored_password) : ($password === $stored_password);

        // Verify the role as well
        if ($password_matches && $role === $stored_role) {
            // If the password is not hashed, hash it and update the database
            if (!$is_hashed) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
                $update_stmt->bind_param("ss", $hashed_password, $username);
                $update_stmt->execute();
                $update_stmt->close();
            }

            // Successful login, store user information in session
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;

            // Redirect to the appropriate homepage based on role
            if ($role === 'director') {
                header("Location: homepage_d.php");
            } else {
                header("Location: homepage/homepage.html");
            }
            exit();
        } else {
            // Invalid password or role, redirect back with an error message
            header("Location: index.html?error=invalid_credentials");
            exit();
        }
    } else {
        // User not found, redirect back with an error message
        header("Location: index.html?error=invalid_credentials");
        exit();
    }

    // Close connections
    $stmt->close();
    $conn->close();
}
?>
