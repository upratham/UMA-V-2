<?php
include('../header.php');
$practical_number = "A11";
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
                <li><a href="#Nervios y vasos sanguíneos">Nervios y vasos sanguíneos</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
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

            
</div>

     <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac11.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Sistema nervioso humano</h3>
    <model-viewer src="angiology.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Sistema muscular humano</h3>
    <model-viewer src="myology.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical12.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical10.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>