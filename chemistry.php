<!DOCTYPE html>
<html lang="en">
<header>
      <link rel="stylesheet" href="styles.css">
    
        <img src="Images/logo_UMA.png" alt="UMA Logo" class="site-logo">
    </header>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry Practicals</title>
    <style>
        /* Page background styling */
        body#chemistry-page {
            background: url('Images/chem2.jpg') no-repeat center center/cover; /* Use the uploaded image */
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
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
        #anatomy-content {
            max-width: 800px;
            margin-top: 100px;
            text-align: center;
            color: #000;
        }

        .anat-content h1 {
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

        .anat-button {
            background: transparent;
            color: #000
            ; /* White text for visibility */
            padding: 15px 30px;
            text-decoration: none;
            border: 2px solid #000
            ; /* White border for visibility */
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            width: 24%;
            text-align: center;
            transition: background 0.3s ease, transform 0.3s ease, color 0.3s ease;
        }

        .anat-button:hover {
            background: rgba(255, 255, 255, 0.1); /* Slight hover effect */
            color: #000; /* Change text color to black */
            transform: scale(1.05); /* Slight zoom */
        }
    </style>
</head>
<body id="chemistry-page">
<div class="user-profile">
        
            <span>perfil ▼</span>
            <div class="dropdown-content">
                <a href="#" onclick="openModal('changePasswordModal')"> Cambiar la contraseña</a>
                <a href="logout.php">cerrar sesión</a>
              
            </div>
        </div>
    </div>

    <section id="anatomy-content">
        <div class="anat-content">
            <h1>Prácticas de química</h1>
            <div class="practicals-buttons">
                <a href="Chemistry_Prac_Templates\Chem_Prac_1.php" class="anat-button">Práctica 1</a>
                <a href="Chemistry_Prac_Templates\Chem_prac_2.php" class="anat-button">Práctica 2</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_3.php" class="anat-button">Práctica 3</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_4.php" class="anat-button">Práctica 4</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_5.php" class="anat-button">Práctica 5</a>
                <a href="Chemistry_Prac_Templates\Chem_prac_6.php" class="anat-button">Práctica 6</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_7_8.php" class="anat-button">Práctica 7</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_7_8.php" class="anat-button">Práctica 8</a>
                <a href="Chemistry_Prac_Templates\Chem_Prac_9.php" class="anat-button">Práctica 9</a>
                <a href="Chemistry_Prac_Templates\chem_prac_10_11.php" class="anat-button">Práctica 10</a>
                <a href="Chemistry_Prac_Templates\chem_prac_10_11.php" class="anat-button">Práctica 11</a>
                <a href="Chemistry_Prac_Templates\chem_prac_12.php" class="anat-button">Practical 12</a>
            </div>
        </div>
    </section>
</body>
</html>
