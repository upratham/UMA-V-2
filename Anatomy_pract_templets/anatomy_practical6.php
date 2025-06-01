<?php
include('../header.php');
$practical_number = "A6";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador UMA</title>
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
     <form id="cuestionarioForm" action="../quessionnair/index.html" method="GET" style="display:inline; margin:0; padding:0;">
    <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
    <button type="submit" class="tab-button active" style="margin:0; padding:20px 20px; display:inline-flex; align-items:center; justify-content:center;">
        <img src="questionaire photo.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Cuestionario
    </button>
</form>
</div>


    <div class="container">
        <!-- Sidebar (Contents) -->
        <nav class="sidebar">
        <h3>Contents</h3>
            <ul>
                <li><a href="#SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</a></li>
                <li><a href="#SISTEMA REPRODUCTOR">SISTEMA REPRODUCTOR</a></li>
            </ul>
        </nav>

       <!-- Main Content Section -->
       <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 6:<br>ESTRUCTURAS DEL SISTEMA NERVIOSO CENTRAL</h1><br>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del snc y sus principales relaciones
                        y aplicaciones.</li>
                    <li>Identificar sus principales relaciones y aplicaciones.</li>
                </ul>
                <p>El principal mecanismo de información en el cuerpo lo constituye un sistema de neuronas 
                    que se comunican unas con otras y para propósitos puramente didácticos, dividimos este 
                    sistema en un Sistema Nervioso Central (SNC) formado por el cerebro y la médula espinal, 
                    y en un Sistema Nervioso Periférico (SNP) que une el sistema nervioso central con los 
                    receptores sensoriales, que reciben información proveniente del medio externo e interno, y 
                    con los músculos y glándulas que son los efectores de las decisiones del SNC. Esta 
                    información es llevada por axones motores y sensoriales del SNP en haces de cables 
                    eléctricos que conocemos como nervios; por ejemplo, la información que recibe cada ojo 
                    es llevada al cerebro en los millones de axones que forman el nervio óptico.</p>

                <p>La información dentro del sistema nervioso es manejada por tres tipos de neuronas. 
                    Las neuronas sensoriales, que mandan información desde los tejidos del cuerpo y los 
                    órganos sensoriales hacia la médula espinal. Cuando el cerebro procesa esa información 
                    involucra una segunda clase de neuronas, las interneuronas, que forman su sistema de 
                    comunicación interna. Como resultado de ese procesamiento, el sistema nervioso central 
                    manda instrucciones hacia los tejidos del cuerpo por medio del tercer tipo de neuronas, las 
                    motoneuronas. Como hay unos pocos millones de neuronas sensoriales, algunos millones 
                    más de neuronas motoras, y miles y miles de millones de interneuronas, es claro que la 
                    mayor parte de la complejidad de nuestro organismo se basa en los sistemas de 
                    interneuronas.
                    </p>

                <div class="image-container">
                    <img src="Anatomy images\Practical 6\1.jpg" alt="1" class="1">
                </div><br><br>
                <p>El <strong>cerebro y la médula espinal</strong> forman el sistema nervioso central (SNC), ambos están 
                    protegidos por el cráneo o el canal espinal y están rodeados por otra capa protectora: 
                    el líquido cefalorraquídeo. Las tareas del SNC son múltiples:
                    </p>
                <ul>
                    <li></li>Integra estímulos que afectan al organismo humano desde afuera o adentro.</li>
                    <li>Coordina todos los procesos motores.</li>
                    <li>Coordina todos los sistemas.</li>
                    <li>Entre otras funciones aún no comprendidas hoy en día.
                    </li>
                </ul>
                <p>El<strong> cerebro</strong> es un órgano que se encuentra en el cráneo y que consta de miles de 
                    millones de células nerviosas, que entre otras cosas genera conciencia y habilidades 
                    cognitivas.</p>
                <p>Externamente, el cerebro consta de dos hemisferios, que están divididos por surcos en 
                    cada uno se encuentran cuatros lóbulos cerebrales, los cuales se encargan de realizar 
                    procesamientos y funciones distintas:</p>
                
                <ul>
                    <li><strong>Lóbulo Frontal:</strong> área del habla motora encontrándose aquí el área de 
                        Broca.En esta área se maneja el control motor voluntario de músculos 
                        esqueléticos, personalidad, procesos intelectuales superiores y 
                        comunicación verbal.</li>
                    <li><strong>Lóbulo Occipital:</strong> área encargada de tareas visuales, interpreta los 
                        movimientos en el enfoque de los ojos, correlación de imágenes 
                        visuales con experiencia visuales previas entre otros estímulos 
                        captados visualmente.</li>
                    <li><strong>Lóbulo Parietal:</strong> interpretación somatoestésica, entendimiento del 
                        habla y formulación de palabras para expresar pensamientos y 
                        emociones, interpretación de texturas y formas.</li>
                    <li><strong>Lóbulo Temporal:</strong> área de interpretación de sensaciones auditivas, 
                        memoria de experiencias auditivas y visuales memoria de experiencias 
                        auditivas y visuales.</li>
                </ul>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\2.jpg" alt="2" class="2">
                </div><br><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\3.jpg" alt="3" class="3">
                </div><br><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\4.jpg" alt="4" class="4">
                </div><br><br>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>

              
                
            </div>
    
   <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac6.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac6_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Sistema nervioso</h3>
    <model-viewer src="angiology.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Columna vertebral</h3>
    <model-viewer src="Prac6.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>3. Cerebro</h3>
    <model-viewer src="Prac6_part2.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>4. Cráneo y columna vertebral</h3>
    <model-viewer src="the_human_spinal_column.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical7.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical5.php'">Práctica anterior</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>