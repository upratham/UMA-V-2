<?php
session_start();
if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
    <header>
      <link rel="stylesheet" href="styles.css">
    
        <img src="Images/logo_UMA.png" alt="UMA Logo" class="site-logo">
    </header>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology Practicals</title>
    <style>
        /* Page background styling */
        body#biology-page {
            background: url('Images/bilogy2.jpg') no-repeat center center/cover; /* Use the uploaded image */
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #000;
            display: flex;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }

        /* User profile styling */
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

        /* Section content styling */
        #biology-content {
            max-width: 800px;
            text-align: center;
            color: #000;
        }

        .bio-content h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        /* Transparent buttons */
        .practicals-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .bio-button {
            background: transparent;
            color: #000;
            padding: 15px 30px;
            text-decoration: none;
            border: 2px solid #000;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            width: 24%;
            text-align: center;
            transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
        }

        .bio-button:hover {
            background: rgba(255, 255, 255, 0.1); /* Slight hover effect */
            color: #000; /* Change text color to black */
            transform: scale(1.05); /* Slight zoom */
        }
    </style>
</head>
<body id="biology-page">
<div class="user-profile">
        <div class="user-name">Hola, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></div>
        <div class="dropdown">
            <span>perfil ▼</span>
            <div class="dropdown-content">
                <a href="#" onclick="openModal('changePasswordModal')"> Cambiar la contraseña</a>
                <a href="logout.php">cerrar sesión</a>
                <?php if ($_SESSION['role'] === 'director'): ?>
                    <a href="#" onclick="openModal('addStudentModal')">Agregar estudiante</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
      
    <section id="biology-content">
        <div class="bio-content">
            <h1>Prácticas de biología</h1>
            <div class="practicals-buttons">
                <a href="Biology_Prac_Templates/Bio_Prac_1.php" class="bio-button">Practica 1</a>
                <a href="Biology_Prac_Templates/Bio_Prac_2.php" class="bio-button">Practica 2</a>
                <a href="Biology_Prac_Templates/Bio_Prac_3.php" class="bio-button">Practica 3</a>
                <a href="Biology_Prac_Templates/Bio_Prac_4.php" class="bio-button">Practica 4</a>
                <a href="Biology_Prac_Templates/Bio_Prac_5.php" class="bio-button">Practica 5</a>
                <a href="Biology_Prac_Templates/Bio_Prac_6.php" class="bio-button">Practica 6</a>
                <a href="Biology_Prac_Templates/Bio_Prac_7.php" class="bio-button">Practica 7</a>
                <a href="Biology_Prac_Templates/Bio_Prac_8.php" class="bio-button">Practica 8</a>
                <a href="Biology_Prac_Templates/Bio_Prac_9.php" class="bio-button">Practica 9</a>
                <a href="Biology_Prac_Templates/Bio_Prac_10.php" class="bio-button">Practica 10</a>
                <a href="Biology_Prac_Templates/Bio_Prac_11.php" class="bio-button">Practica 11</a>
                <a href="Biology_Prac_Templates/Bio_Prac_12.php" class="bio-button">Practica 12</a>
                <a href="Biology_Prac_Templates/Bio_Prac_13.php" class="bio-button">Practica 13</a>
            </div>
            </div>
        </div>
    </section>
</body>
</html>
