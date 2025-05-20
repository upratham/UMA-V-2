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
    <title>Anatomy Practicals</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body id="anatomy-page">
    <!-- Profile Section with Styling -->
    <style>
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
    </style>

    <!-- User Profile Section -->
    <div class="user-profile">
        <div class="user-name">Hola, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></div>
        <div class="dropdown">
            <span>perfil ▼</span>
            <div class="dropdown-content">
                <a href="#" onclick="openModal('changePasswordModal')"> Cambiar la contraseña</a>
                <a href="logout.php">cerrar sesión</a>
                <?php if ($_SESSION['role'] === 'director'): ?>
                    <a href="#" onclick="openModal('addStudentModal')"> Agregar estudiante</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End of Profile Section -->

    <!-- Logo in the upper left corner -->
    <header>
        <img src="Images/logo_UMA.png" alt="UMA Logo" class="site-logo">
    </header>

    <section id="anatomy-content">
        <div class="anat-content">
            
            <h1>Prácticas de anatomía </h1>
            <div id="anatomy-buttons">
                <a href="Anatomy_pract_templets\anatomy_practical1.php" class="anat-button">Práctica 1</a>
                <a href="Anatomy_pract_templets\anatomy_practical2.php" class="anat-button">Práctica 2</a>
                <a href="Anatomy_pract_templets\anatomy_practical3.php" class="anat-button">Práctica 3</a>
                <a href="Anatomy_pract_templets\anatomy_practical4.php" class="anat-button">Práctica 4</a>
                <a href="Anatomy_pract_templets\anatomy_practical5.php" class="anat-button">Práctica 5</a>
                <a href="Anatomy_pract_templets\anatomy_practical6.php" class="anat-button">Práctica 6</a>
                <a href="Anatomy_pract_templets\anatomy_practical7.php" class="anat-button">Práctica 7</a>
                <a href="Anatomy_pract_templets\anatomy_practical8.php" class="anat-button">Práctica 8</a>
                <a href="Anatomy_pract_templets\anatomy_practical9.php" class="anat-button">Práctica 9</a>
                <a href="Anatomy_pract_templets\anatomy_practical10.php" class="anat-button">Práctica 10</a>
                <a href="Anatomy_pract_templets\anatomy_practical11.php" class="anat-button">Práctica 11</a>
                <a href="Anatomy_pract_templets\anatomy_practical12.php" class="anat-button">Práctica 12</a>

            </div>
        </div>
    </section>

</body>
</html>
