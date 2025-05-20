<?php
include('../header.php');
$practical_number = "A5";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador UMA</title>
    <link rel="stylesheet" href="../styles.css">
    <style>

    /* General Styles */
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f9f9f9;
        }

        /* Tabs Navigation */
        .tabs {
            display: flex;
            justify-content: center;
            gap: 7px;
            padding: 8px;
            background-color: white;
            border-bottom: 2px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 900;
        }

        .tab-button {
            padding: 12px 18px;
            border: none;
            background-color: #e0e0e0;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .tab-button.active {
            background-color: #C31654;
            color: white;
            font-weight: bold;
        }

        /* Main Layout */
        .container {
            display: flex;
            flex-direction: row;
            min-height: 100vh;
        }

        /* Sidebar (Table of Contents) */
        .sidebar {
            width: 20%;
            background-color: white;
            height: auto;
            padding: 20px;
            border-right: 2px solid #ddd;
        }

        .sidebar h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 6px 0;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #ff9800;
            font-weight: bold;
            padding-left: 8px;
        }

        /* Practical Content */
        #practical-content {
            flex: 1;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Ensure only one content section is visible */
        .content {
            display: none;
        }

        .content.active {
            display: block;
        }

        /* Buttons */
        .styled-button {
            padding: 12px 24px;
            background-color: #E40D5E;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin-left: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80%;
        }

        .styled-button:hover {
            background-color: #0e0d07;
        }

        #Video {
    text-align: center;
    padding: 40px 20px;
    background-color: #f0f8ff;
    border-radius: 12px;
    margin: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .video-title {
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
  }

  .video-description {
    font-size: 18px;
    color: #555;
    margin-bottom: 20px;
  }

  .video-container {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  video {
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
  }

    </style>
</head>
<body>

        <!-- Tab Navigation -->
<div class="tabs">
        <button class="tab-button active" onclick="openTab('Teoría')">
        <img src="book - icon.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Teoría</button>

        <button class="tab-button active" onclick="openTab('Video')">
        <img src="logo video.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Video</button>

        <button class="tab-button active" onclick="openTab('3D Modelo')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        3D Modelo</button>

        <!-- Cuestionario tab: now submits the form directly -->
    <form id="cuestionarioForm" action="/V2/V2/questionnaire.php" method="GET" style="display:inline; margin:0; padding:0;">
    <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
    <button type="submit" class="tab-button active" style="margin:0; padding:20px 20px; display:inline-flex; align-items:center; justify-content:center;">
        <img src="questionaire photo.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Cuestionario
    </button>
</form>
</div>


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

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
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

               
</div>

 <!-- Video Section -->
 <div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac10.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac10_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Hueso del hombro humano</h3>
    <model-viewer src="human_arm__brazo_humano.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Músculos del hombro humano</h3>
    <model-viewer src="prac10.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>3. esqueleto humano</h3>
    <model-viewer src="human_skeleton__esqueleto_humano.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

</div>

<!---Questionaire--->

    <script>
        function openTab(tabId) {
            // Hide all content
            var contents = document.querySelectorAll(".content");
            contents.forEach(content => content.classList.remove("active"));

            // Remove active class from all buttons
            var buttons = document.querySelectorAll(".tab-button");
            buttons.forEach(button => button.classList.remove("active"));

            // Show the selected tab content
            document.getElementById(tabId).classList.add("active");

            // Add active class to clicked button
            event.currentTarget.classList.add("active");

            // Ensure practical content is fully visible
            document.getElementById("practical-content").scrollIntoView({ behavior: "smooth", block: "start" });
        }
    </script>

<footer>
    <style>
        .button-container {
            display: flex;
            justify-content: center; /* Centers buttons horizontally */
            gap: 15px; /* Adds spacing between buttons */
            margin: 20px 0;
            padding: 10px;
        }

        .styled-button {
            padding: 8px 16px; /* Adjusted padding to make buttons smaller */
            background-color: #E40D5E;
            color: white;
            border: none;
            border-radius: 5px; /* Slightly rounded corners */
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .styled-button:hover {
            background-color: #b00a48; /* Slightly darker red on hover */
            transform: scale(1.05); /* Slightly enlarges on hover */
        }
        </style>

<div class="button-container">
    <button class="styled-button" onclick="window.location.href='anatomy_practical11.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical9.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>