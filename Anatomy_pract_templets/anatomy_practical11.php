<?php
include '../header.php';
$practical_number = "A11"
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy PRÁCTICA N° 11: 
        RECONOCE Y EXPLICA LAS ESTRUCTURAS ÓSEAS, MUSCULARES Y VASCULONERVIOSAS DEL MIEMBRO INFERIOR        
</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex; /* Changes display to flex to help with the layout */
            flex-direction: column; /* Stack elements vertically */
        }

        .practical-header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin: 0;
            width: 100%;
            height: 100%;
            min-height: 100vh;
        }

        /* Sidebar (Shortcuts/Contents) */
        .sidebar {
            width: 20%;
            background-color: #f4f4f4;
            position: sticky;
            top: 0; /* Sticks at the top of the viewport */
            align-self: flex-start; /* Ensures sidebar stays at the top when scrolling */
            overflow-y: auto; 
            padding: 10px;
            height: 100vh;
            float:left;
        }
        .sidebar a {
            text-decoration: none; 
            color: #333;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #ddd;
            padding-left: 10px;
        }

        .sidebar h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #007BFF;
        }

        /* Main Content Section */
        #practical-content {
            flex-grow: 1;
            flex: 1; /* Takes the remaining space */
            padding: 20px;
            overflow-y: auto; /* Allows the main content to scroll */
            display: inline-block;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        /* Images styling */
        .image-container {
            text-align: left;
        }

        .anatomical-image {
            max-width: 100%;
            height: auto;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
        .practical-header {
            position: sticky;
            top: 0;
            background-color: white; /* Ensures the logo background stays clean when sticky */
            z-index: 100; /* Ensures it stays above the rest of the content */
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Optional: Adds a bottom border to the header */}
        
            .styled-button {
            padding: 12px 24px; /* Larger padding for a bigger button */
            background-color: #E40D5E;
            color: white;
            border: black;
            border-radius: 8px; /* Larger border radius for a smoother look */
            cursor: pointer;
            font-size: 18px; /* Larger font size */
            transition: background-color 0.3s ease;
            margin-left: 20px; /* Adds space between the text and the button */
            justify-content: center; /* Centers both the text and the button */
            align-items: center;
            display: flex;
            width: 80%;
        }

        .styled-button:hover {
        background-color: #0e0d07; /* Darker color on hover */
        }
}

    </style>
</head>
<body>

   
    <header class="practical-header">
        <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>

    <div class="container">
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#Nervios y vasos sanguíneos">Nervios y vasos sanguíneos</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA PRÁCTICA N° 11: 
                    RECONOCE Y EXPLICA LAS ESTRUCTURAS ÓSEAS, MUSCULARES Y VASCULONERVIOSAS DEL MIEMBRO INFERIOR                                        
                </h1>

            <p>La mayoría de nosotros damos por hecho el poder contar con nuestras extremidades inferiores (miembros inferiores), pero no hay que olvidar que estas son en realidad dos máquinas que trabajan en perfecta armonía gracias a las numerosas y complejas estructuras anatómicas que las conforman. Si alguna de las piezas de la máquina llegara a fallar, entonces ya no podrías realizar actividades tales como caminar hacia tu clase de anatomía favorita (o no tan favorita), saltar, correr, pararte, agacharte, etcétera. Es por esto que es importante mantener una buena condición física mediante una rutina saludable de ejercicio.<br><br>
                La extremidad inferior (miembro inferior) se puede dividir en las siguientes partes o regiones:
             </p>

             <div class="image-container">
                <img src="Anatomy images\11 prac\11.1.jpg" alt="Fowler position" class="center">
            </div>
            <br>

            <div class="image-container">
                <img src="Anatomy images\11 prac\11.2.jpg" alt="Fowler position" class="center">
            </div>
            <br>

            <div class="image-container">
                <img src="Anatomy images\11 prac\after2.jpg" alt="Fowler position" class="center">
            </div>
            <br>

            <div class="image-container">
                <img src="Anatomy images\11 prac\after2_1.jpg" alt="Fowler position" class="center">
            </div>
            <br>

            <div class="image-container">
                <img src="Anatomy images\11 prac\after2_2.png" alt="Fowler position" class="center">
            </div>
            <br>

            <div class="image-container">
                <img src="Anatomy images\11 prac\11.3.jpg" alt="Fowler position" class="center">
            </div>
            <br>


            <p>Los músculos del muslo se pueden dividir en tres grupos: anterior, medial y posterior. El grupo anterior ocupa el compartimento anterior situado al frente del muslo, e incluye a los músculos sartorio y cuadríceps femoral. Este último es, por cierto, un músculo grande compuesto de cuatro músculos más pequeños llamados recto femoral, vasto medial, vasto lateral y vasto intermedio.</p>
            <p>El grupo de músculos medial ocupa, adivinaste, el compartimento medial del muslo. Este incluye a los músculos pectíneo, aductor mayor, aductor mínimo, aductor largo, aductor corto y grácil. Estos músculos también se conocen como aductores del muslo.</p>
            <p>El grupo posterior es el más pequeño, ocupando el compartimento posterior del muslo.  Contiene  tres  músculos  isquiotibiales  llamados semimembranoso, semitendinoso y bíceps femoral.</p>
            <h3 id = "Nervios y vasos sanguíneos"></h3>
                Los nervios y vasos sanguíneos del muslo son una continuación directa de los que encontramos en la cadera. La irrigación arterial proviene de la arteria femoral y sus ramas. La principal vena que drena al muslo, y de hecho a todo el miembro inferior, es la vena femoral. Esta forma parte del sistema venoso profundo, drena hacia la vena ilíaca externa y es una continuación directa de la vena poplítea. La vena femoral también recibe sangre desoxigenada de las venas circunflejas, la vena safena magna y la vena profunda del muslo. La inervación está dada por dos grandes nervios y sus ramos: los nervios femoral y ciático. Estos se originan de los plexos lumbar y sacro, respectivamente.
                </p>
            
                <div class="image-container">
                    <img src="Anatomy images\11 prac\11.4.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <div class="image-container">
                    <img src="Anatomy images\11 prac\11.5.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <div>
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>

                <h2 id = "Cuestionario">Cuestionario:</h2>
                <ol>
                    <li>Investigar las afecciones relacionadas con enfermedades osteroarticulares y tratamiento actual.</li>
                </ol>