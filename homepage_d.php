<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Lab</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styling for the user profile section */
        .user-profile {
            position: fixed;
            top: 10px;
            right: 10px;
            text-align: right;
            z-index: 1000;
        }

        .user-profile .user-name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-profile .dropdown {
            position: relative;
            display: inline-block;
        }

        .user-profile .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .user-profile .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .user-profile .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .user-profile .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Form styling inside the modal */
        .modal-content h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .modal-content form label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
            align-self: flex-start;
        }

        .modal-content form input {
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
        }

        .modal-content form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .modal-content form button:hover {
            background-color: #45a049;
        }

    </style>
    <script>
        // Function to open a modal
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }

        // Function to close a modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>
</head>
<body id="index-page">

    <!-- Logo in the upper left corner -->
    <header>
        <img src="Images/logo_UMA.png" alt="UMA Logo" class="site-logo">
    </header>

    <!-- User Profile Section -->
    <div class="user-profile">
        <div class="user-name">Hola, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></div>
        <div class="dropdown">
            <span>perfil ▼</span>
            <div class="dropdown-content">
                <a href="#" onclick="openModal('changePasswordModal')"> Cambiar la contraseña</a>
                <a href="logout.php"> cerrar sesión</a>
                <?php if ($_SESSION['role'] === 'director'): ?>
                    <a href="#" onclick="openModal('addStudentModal')">Agregar estudiante</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <section id="virtual-lab">
        <div class="lab-content">
            <h1>UMA Laboratorio virtual</h1>
            <div class="subject-buttons">
                <a href="student_insights.php" class="lab-button">Rendimiento de los estudiantes</a>
                <a href="biology.php" class="lab-button">Biologia</a>
                <a href="chemistry.php" class="lab-button">Química General</a>
                <a href="anatomy.php" class="lab-button">Anatomia</a>
            </div>
        </div>
    </section>

    <!-- Add Student Modal -->
    <div id="addStudentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addStudentModal')">&times;</span>
            <h2>Agregar nuevo estudiante</h2>
            <form action="add_student.php" method="POST">
                <label for="student_username">nombre de usuario</label>
                <input type="text" id="student_username" name="student_username" required>

                <label for="student_password"> Contraseña::</label>
                <input type="password" id="student_password" name="student_password" required>

                <button type="submit"> Agregar estudiante</button>
            </form>
        </div>
    </div>

    <!-- Change Password Modal -->
    <div id="changePasswordModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('changePasswordModal')">&times;</span>
            <h2>Cambiar la contraseña </h2>
            <form action="change_password.php" method="POST">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="current_password" required>

                <label for="new_password">Nueva contraseña:</label>
                <input type="password" id="new_password" name="new_password" required>

                <label for="confirm_password">Confirmar nueva contraseña</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit">Cambiar la contraseña </button>
            </form>
        </div>
    </div>

</body>
</html>
