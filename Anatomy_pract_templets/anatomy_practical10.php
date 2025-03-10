<?php
include '../header.php';
$practical_number = "A10"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy PRÁCTICA N° 10: 
    ESTRUCTURAS ÓSEAS, MUSCULARES Y VASCULONERVIOSAS DEL MIEMBRO SUPERIOR. 
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

        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
                <li><a href="#Musculos del brazo">Musculos del brazo</a></li>
                <li><a href="#Lesiones">Lesiones</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1> PRÁCTICA N° 10: 
                    ESTRUCTURAS ÓSEAS, MUSCULARES Y VASCULONERVIOSAS DEL MIEMBRO SUPERIOR.                    
                </h1>

                <p><Irrigación del miembro superior y drenaje venoso<br>
                    La irrigación del miembro superior está dada por varias arterias llamadas: ArteriaHumeral, Arteria Radial, Arteria Cubital y dos arcos palmares. En este post seexplicará sus relaciones con otras partes del cuerpo, así como las ramas que emitey su distribución en el organismo<br>
                    La arteria humeral o también llamada braquial, es un vaso sanguíneo prominente que se encarga de irrigar los tejidos localizados en el brazo hasta llegar al codo. Pero para poder realizar la irrigación completa la arteria necesita de las 6 ramas colaterales que recorren los músculos.<br>
                </p>

                <div class="image-container">
                    <img src="Anatomy images\Prac10\1.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac10\2.png" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "Musculos del brazo">Musculos del brazo</h3>

                <div class="image-container">
                    <img src="Anatomy images\Prac10\3.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac10\4.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <p>El sistema venoso forma parte de la circulación en la que se transporta la sangre desde la periferia de vuelta al corazón. Hay que distinguir entre el sistema venoso superficial y profundo.<br>
                    El sistema venoso subcutáneo superficial en las piernas incluye la vena safena mayor y la vena safena menor que llevan la sangre desde la superficie (tejidos cutáneos y subcutáneos), donde se acumula, a las venas profundas.<br>
                    El sistema venoso profundo incluye las venas ilíaca, femoral, poplítea y femoral profunda. Las venas profundas generalmente discurren en paralelo a las arterias correspondientes.<br>
                    Estos dos sistemas venosos están separados el uno del otro por fascia de tejido conjuntivo y músculos y están conectados por un tercer sistema venoso, las venas perforantes (=venas comunicantes).<br>
                    </p>
                
                <p>La pared venosa se compone de tres capas:</p>
                
                <p> •	intima (= capa interior)<br>
                    •	media (= capa media) y<br>
                    •	adventitia (= capa exterior)<br>
                    </p>

                <p>Las paredes de las venas son más finas que las de las arterias. Son más distensibles porque contienen menos fibras elásticas y musculares.<br><br>
                    Las venas tienen válvulas de forma cóncava a intervalos mayores en el lumen que dividen los vasos largos en segmentos. Estas válvulas se abren en cuanto se presiona la sangre hacia arriba hacia el centro del cuerpo contra la gravedad y se cierran en el instante en el que la sangre entra en "parada" y empezaría a fluir hacia atrás.
                    </p>
                
                    <div class="image-container">
                        <img src="Anatomy images\Prac10\5.png" alt="Fowler position" class="center">
                    </div>
                    <br>

                   <h3 id = "Lesiones">Lesiones</h3> 

                   <div class="image-container">
                    <img src="Anatomy images\Prac10\6.jpg" alt="Fowler position" class="center">
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
                    <li>Investigar las enfermedades congénitas y adquiridas respecto a las regiones torácicas, y cuáles son las diferencias estructurales del miembro superior entre el género femenino y masculino.</li>
                    <li>Buscar los órganos más importantes que pertenezcan a la región torácica y cuáles son sus principales afecciones.</li>
                </ol>