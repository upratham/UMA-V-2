<?php
include('../header.php');
$practical_number = "A3";
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
        <!-- Sidebar (Contents) -->
        <nav class="sidebar">
        <!-- Sidebar title -->
        <h2>Contenido</h2>
        <div class="overview-link">
        <ul>
        <li><a href="#practical-content">Objetivos</a></li> 
        <li><a href="#cardiovascular-system">Sistema cardiovascular</a></li>
        <li><a href="#respiratory-system">Sistema respiratorio</a></li>
    </ul>
    </div>
    </nav>

    <!-- Main Content Section -->
    <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
            <h2>PRÁCTICA #3:<br>ESTRUCTURAS DE LOS SISTEMAS CARDIOVASCULAR Y RESPIRATORIO</h2>

            <!-- Objectives Section -->
            <h3>Objetivos</h3>
            <ul>
                <li>Conozca las regiones del cuerpo Sistema muscular.</li>
                <li>Relacionar las regiones del cuerpo Sistema muscular y patologías relacionadas.</li>
            </ul>
            <p>El sistema muscular es un conjunto de tejidos del cuerpo con la capacidad de cambiar de forma.</p>
            <p>El sistema nervioso coordina la contracción del sistema muscular y sincroniza sus funciones.</p><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\tissue.jpg" alt="tissue" class="image-container" style= "width: 500px"; >
            </div><br><br>
            
            <!-- Classification of Muscles -->
            <h3>Clasificación de los músculos</h3>
            <p><strong>Los músculos esqueléticos</strong> o músculos estriados se adhieren al esqueleto (huesos) y se
             contraen para generar movimiento en el cuerpo. Los músculos esqueléticos están conectados al sistema nervioso somático. 
             El sistema nervioso somático controla el movimiento voluntario de los músculos. Los músculos esqueléticos son parte del 
             sistema musculoesquelético. Junto con los tendones y otros tejidos conectivos, se conectan entre sí y al mismo tiempo aseguran las articulaciones y el sistema esquelético.</p>
            <p><strong>El músculo cardíaco </strong>constituye el cuerpo principal del corazón. Es responsable de las contracciones rítmicas que bombean sangre por todo el cuerpo.</p>
            <p><strong>Los músculos lisos </strong> están bajo el control del sistema nervioso autónomo o involuntario. Se encuentran 
            en las paredes de los vasos sanguíneos, por ejemplo. Este tipo de musculatura también existe en estructuras como la vejiga, los intestinos o el estómago. Estos músculos consumen menos energía y, por lo general, mueven líquidos dentro de estos tejidos para ayudar a darles forma.</p>
            </p><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscle_types.jpg" alt="muscle_types" class="muscle_types-image" style= "width: 500px"; >
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscle cell.jpg" alt="muscle cell" class="muscle-cell-image" style= "width: 500px"; >
            </div><br><br>  
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscles.png" alt="muscles" class="muscles-image" style= "width: 500px"; >
            </div><br><br> <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\frontal_body.png" alt="frontal_body" class="frontal_body" style= "width: 500px"; >
            </div><br><br><br><br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\dorsal_body.jpg" alt="dorsal_body" class="dorsal_body" style= "width: 500px"; >
            </div><br><br><br><br><br>
            
            <h4>Cuestionario del sistema muscular</h4>
            <ol>
                <li>Investiga qué enfermedades son más comunes a nivel del sistema muscular.</li>
                <li>Defina los siguientes términos:
                    <ul>
                        <li>Tendinopatía</li>
                        <li>Calambre muscular</li>
                        <li>Distrofia muscular</li>
                        <li>Enfermedades neuromusculares</li>
                        <li>Esclerosis múltiple</li>
                        <li>Fibromialgia</li>
                        <li>Miastenia grave</li>
                        <li>Miositis</li>
                        <li>Sarcoma de tejido blanco</li>
                    </ul>
                </li>
            </ol>

            <!-- Cardiovascular System Section -->
            <h3 id="cardiovascular-system">Sistema cardiovascular</h3>
            <h4>Objetivos</h4>
            <ul>
                <li>Conozca las regiones del cuerpo Sistema cardiovascular</li>
                <li>Relacionar las regiones del cuerpo Sistema cardiovascular y patologías relacionadas.</li>
            </ul><br>
            <p>Todas las células de nuestro cuerpo, ya sean del cerebro o de un músculo de nuestras piernas,
                 necesitan oxígeno y nutrientes para realizar su función. Podemos decir que el sistema cardiovascular es 
                 la estructura a través de la cual se transportan estas sustancias a cada una de las células y se eliminan 
                 de ellas las sustancias de desecho, permitiendo así que nuestro cerebro pueda pensar o que nuestras piernas puedan caminar, por ejemplo.</p><br>
            <p>El sistema cardiovascular incluye el corazón, los vasos sanguíneos (arterias, capilares, vénulas y venas) y la sangre circulante. 
                Transporta oxígeno y nutrientes a las células y elimina sustancias de desecho, que son esenciales para mantener una buena salud.</p>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\veins.jpg" alt="veins" class="veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\artery_veins.jpg" alt="artery_veins" class="artery_veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_veins.jpg" alt="heart_veinsy" class="heart_veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\Heart.png" alt="heart" class="heart" style= "width: 500px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\atrium_ventricle.png" alt="atrium_ventricle" class="atrium_ventricle" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\electrical_system.jpg" alt="electrical_system" class="electrical_system" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_activation.jpg" alt="heart_activation" class="heart_activation" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_wall.png" alt="heart_wall" class="heart_wall" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <!-- Respiratory System Section -->
            <h3 id="respiratory-system">SISTEMA RESPIRATORIO</h3>
            <h4>OBJETIVOS</h4>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema respiratorio.</li>
                <li>Relacionar las regiones del cuerpo Sistema respiratorio y 
                patologías relacionadas.</li>
            </ul><br>
            <p>El aparato respiratorio incluye la nariz, la boca, la garganta, latráquea y los pulmones.
</p>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\respiratory.jpg" alt="respiratory" class="respiratory" style= "width: 300px"; >
            </div><br><br><br>
            <p>El aire entra en el aparato respiratorio a través de la nariz o de la boca. Si pasa por las fosas nasales (también 
                llamadas "narinas") el aire se calienta y humidifica. Los 
                pasajes nasles y otras partes del aparato respiratorio están protegidos por pelos diminutos llamados "cilios", 
                que se encargan de filtrar el polvo y otraspartículas que entran en la nariz junto con el aire que respiramos
                </p>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\face.jpg" alt="face" class="face" style= "width: 300px"; >
            </div><br><br><br><br><br>
            <p>Las dos entradas de las víasnasales (la cavidad nasal y la boca) se unen en la faringe, 
                o garganta, en la parte posterior dela nariz y la boca. La faringe formaparte del aparato 
                digestivo y del respiratorio porque transportatanto los alimentos como el aire.
            </p><br>
            <p>En su parte inferior, la faringe se divide en dos conductos: uno para los alimentos (el esófago) y otro para el aire. El esófago conduce al estómago. El pasaje exclusivo para 
                el aire se cubre con una pequeña capa de tejido denominada "epiglotis" cuando  tragamos. De este modo, se impide que los alimentos o los líquidos vayan a los pulmones.</p><br>
            <p>La laringe es la parte superior del conducto exclusivo para el aire. Este conducto corto 
                contiene un par de cuerdas vocales, que vibran para generar sonidos.
            </p><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\pharyngeal_anatomy.jpg" alt="pharyngeal_anatomy" class="pharyngeal_anatomy" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <p>La tráquea es la continuación del pasaje de aire por debajo de la laringe. Las paredes 
             de la tráquea están fortalecidas con anillos rígidos de cartílago que la mantienen 
             abierta. Además, está revestidade cilios, que expulsan los líquidos y las partículas 
             extrañas de las vías aéreas para que no lleguen a los pulmones.</p>
                <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\nasal_cavity.jpg" alt="nasal_cavity" class="nasal_cavity" style= "width: 300px"; >
            </div><br><br><br>
            <p>En el extremo inferior, la tráquea se divide en los 
            conductos izquierdo y derecho llamados "bronquios", 
            que conectan con los pulmones. Dentro de los 
            pulmones, los bronquios se ramifican y forman 
            bronquios más pequeños o conductos incluso más 
            pequeños llamados "bronquiolos. Los bronquiolos 
            terminan en pequeños sacos de aire llamados 
            "alvéolos", donde ocurre el intercambio de oxígeno y 
            dióxido decarbono. Cada persona tiene cientos de 
            millones de alvéolos en los pulmones. Esta red de 
            alvéolos,bronquiolos y bronquios recibe elnombre de 
            "árbol bronquial".</p><br><br>

            <div class="image-container">
                <img src="Anatomy images\Prac_3\larynx.jpg" alt="larynx" class="larynx" style= "width: 200px"; >
            </div><br><br><br>   
            <p>Los pulmones también contienentejidos elásticos que les permiteninflarse y desinflarse 
             sin perder su forma. Están cubiertos por una capa subm</p><br>
            <p>La cavidad torácica, o tórax, es elespacio que aloja al árbol
            bronquial, los pulmones, el corazón y otras estructuras. La parte superior y los costados 
            del tórax están formados por las costillas y los músculos unidos a ellas, y la parte inferior 
            está formada por un músculo de gran tamaño denominado "diafragma". Las paredes 
            del tórax forman una protección alrededor de los pulmones y otros órganos presentes 
            en la cavidad torácica.</p> <br>

            <div class="image-container">
                <img src="Anatomy images\Prac_3\lung.jpg" alt="lung" class="lung" style= "width: 300px"; >
            </div><br><br><br>
            <div class="image-container">      
                <img src="Anatomy images\Prac_3\ribcage.jpg" alt="ribcage" class="ribcage" style= "width: 400px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\cartilage.jpg" alt="cartilage" class="cartilage" style= "width: 500px"; >
            </div><br><br><br>

            <div class="image-container">
                <img src="Anatomy images\Prac_3\detailed_respiration.jpg" alt="detailed_respiration" class="detailed_respiration" style= "width: 400px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\diaphragm.jpg" alt="diaphragm" class="diaphragm" style= "width: 400px"; >
            </div><br><br><br>
        </div>
    

 <!-- Video Section -->
 <div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac3.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac3_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

</div>


<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <p>Here, In this chapter no 3d Models.</p>
    <h3>1. Angiología</h3>
    <model-viewer src="angiology.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. corazón humano</h3>
    <model-viewer src="heart.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>3. Pulmones humanos</h3>
    <model-viewer src="realistic_human_lungs.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>4. Miologíah</h3>
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical4.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical2.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>