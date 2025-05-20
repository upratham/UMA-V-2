<?php
include('../header.php');
$practical_number = "A2";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Anatomy Practical 2</title>
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
        <h3>Contents</h3>
            <ul>
            <li><a href="#objectives">1. Objetivos</a></li>
            <li><a href="#introduction">2. INTRODUCCIÓN</a></li>
            <li><a href="#compact-bone">3. Tejido óseo compacto</a></li>
            <li><a href="#spongy-bone">4. Tejido óseo esponjoso</a></li>
            <li><a href="#joints">5. Articulaciones</a></li>
        </ul>
    </nav>


        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA #2:ESTRUCTURAS HUESAS, ARTICULACIONES Y MUSCULARES</h1><br>

                <!-- Objectives Section -->
                <h2 id="objectives"><strong>1. Objetivos</strong></h2>
                <ul>
                    <li>Conocer las regiones del cuerpo: Sistema hueso-articular.</li>
                    <li>Relacionar las regiones del cuerpo: el sistema esquelético-articular y patologías relacionadas.</li><br>
                </ul>

                <!-- Introduction Section -->
                <h2 id="introduction"><strong>2. INTRODUCCIÓN</strong></h2>
                <p>Los huesos se clasifican en varios tipos según su forma. Un hueso largo (como el fémur o el húmero) consta de las siguientes partes:</p>
                <ol>
                    <li><strong>Diáfisis:</strong>  es el cuerpo cilíndrico principal o porción del hueso.  </li>
                    <li><strong>Epífisis: </strong> son los extremos proximal y distal del hueso.</li>
                    <li><strong>Metaphysis:</strong>es el sitio de unión de la diáfisis con la epífisis; su espesor disminuye con la edad.</li>
                    <li><strong>Cartílago articular:</strong> es una fina capa de cartílago hialino que recubre la parte de la epífisis de un hueso que se articula con otro hueso.</li>
                    <li><strong>Periostio: </strong> es una capa resistente de tejido conectivo denso que
                     rodea una superficie ósea que no tiene cartílago articular. Protege el hueso, participa 
                     en la reparación de fracturas, colabora en la nutrición del hueso y sirve como punto de 
                     inserción de tendones y ligamentos.s in the nutrition of the bone, and serves as an insertion point for
                     tendons and ligaments.</li>
                    <li><strong>Cavidad medular:</strong> es el espacio interno de la diáfisis que contiene la médula ósea amarilla grasa.</li>
                    <li><strong>Endostio:</strong> es la capa que recubre la cavidad medular y contiene células para la formación de hueso.</li>
                </ol>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone.jpg" alt="Bone" class="Bone-image" style="width: 600px;">
                </div>

                <!-- Compact Bone Tissue Section -->
                <h2 id="compact-bone"><strong>3. Tejido óseo compacto</strong></h2>
                <ol>
                    <li>Forma la capa exterior de todos los huesos; proporciona protección y apoyo. Está formado por unidades denominadas osteonas o sistemas de Havers, que constan de:</li>
                    <li>Un canal central que tiene un trayecto longitudinal y contiene un vaso sanguíneo, llamado canal de Havers.</li>
                    <li>Laminillas concéntricas que rodean el canal de Havers, que son anillos de matriz dura calcificada.</li>
                    <li><strong>Lagunas:</strong> espacios situados entre los anillos de laminillas que contienen osteocitos.</li>
                    <li><strong>Canalículos:</strong>que se irradian desde las lagunas, están llenos de líquido extracelular y contienen extensiones de osteocitos para comunicarse con el canal central.</li>
                    <li>Las osteonas son circulares y no encajan perfectamente entre sí, con zonas llenas de laminillas intersticiales y laminillas circunferenciales.</li>
                    <li><strong>Canales de Volkmann:</strong>canales a través de los cuales los vasos sanguíneos y los nervios penetran en el hueso compacto.</li>
                </ol>

                <!-- Spongy Bone Tissue Section -->
                <h2 id="spongy-bone"><strong>4. Tejido óseo esponjoso</strong></h2>
                <p>Está formado por laminillas dispuestas en una red irregular llamadas trabéculas. En algunos huesos, estos espacios están llenos de médula ósea roja.
                     Las trabéculas contienen osteocitos ubicados en lagunas con canalículos que se comunican con otras lagunas.</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\tissue.jpg" alt="Tissue" class="tissue-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skull_bone.jpg" alt="skull-Bone" class="skull-Bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skull_and baby.jpg" alt="skull_and_baby" class="skull-and-baby-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skeleton.jpg" alt="skeleton" class="skeleton-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\biggie image.jpg" alt="biggie" class="biggie-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine.jpg" alt="spine" class="spine-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\somekind_of_bone.jpg" alt="bone" class="some_bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\coccix.jpg" alt="coccix" class="coccix-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\so_many_bones.jpg" alt="bones" class="bones-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone_n_tissue.jpg" alt="bones_tissue" class="bones-tissue-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone_n_body.jpg" alt="bones_body" class="bones-body-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\appendics.jpg" alt="appendics" class="appendics-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\ribcage.jpg" alt="ribcage" class="ribcage-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\hand_bone.png" alt="hand" class="hand-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\ribcage2.png" alt="rib" class="rib-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\mutthi.jpg" alt="hand" class="hand2-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\khalcha_bone.jpg" alt="hip_bone" class="hip-bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\toe.jpg" alt="toe" class="toe-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\leg.jpg" alt="leg" class="leg-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\toe_lateral.jpg" alt="toe_lateral" class="toe_lateral-image" style="width: 600px;">
                </div>  
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine_doosra.jpg" alt="spine2" class="spine2-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine_another_angle.jpg" alt="spine3" class="spine3-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\kiti_spine.jpg" alt="spine4" class="spine4-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\fracture.jpg" alt="fracture" class="fracture-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\vertebra.jpg" alt="vertebra" class="vertebra-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\leg_fracture.jpg" alt="leg_fracture" class="leg-fracture-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\joint.jpg" alt="joint" class="joint-image" style="width: 600px;">
                </div>         

                <!-- More images can follow -->

                <!-- Joints Section -->
                <h2 id="joints"><strong>5. Sellos</strong></h2>
                <p>Las articulaciones son las áreas donde se unen dos o más huesos. La mayoría de las articulaciones son móviles y permiten que los huesos se muevan. Las juntas constan de lo siguiente:</p>
                <ul>
                    <li><strong>Cartílago:</strong>tipo de tejido que cubre la superficie de un hueso en una articulación. 
                    El cartílago ayuda a reducir la fricción del movimiento dentro de una articulación.</li><br>
                    <li><strong>Membrana sinovial: </strong>  un tejido llamado sinovial recubre la articulación y
                    la sella en una cápsula articular. La membrana sinovial secreta líquido sinovial (un líquido
                    transparente y pegajoso) alrededor de la articulación para lubricarla.
                        </li><br>
                    <li><strong>Ligamentos:</strong>Hay ligamentos resistentes (bandas elásticas gruesas de tejido
                     conectivo) que rodean la articulación para brindar soporte y limitar su movimiento.</li><br>
                    <li><strong>Tendones:</strong> Los tendones (otro tipo de tejido conectivo grueso) a cada lado
                     de la articulación se unen a los músculos que controlan el movimiento de esa articulación.</li><br>
                </ul>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skeleton_2.jpg" alt="skeleton_2" class="skeleton_2-image" style="width: 600px;">
                </div>

                <ul>
                    <li><strong>Bolsas:</strong>las cavidades llenas de líquido llamadas bolsas entre huesos, ligamentos y
                     otras estructuras adyacentes ayudan a amortiguar la fricción de las articulaciones.</li><br>
                    <li><strong>Líquido sinovial:</strong>Líquido transparente y pegajoso secretado por la membrana sinovial.</li><br>
                    <li><strong>Fémur:</strong>  hueso del muslo</li><br>
                    <li><strong>Tibia:</strong> hueso de la espinilla</li><br>
                    <li><strong>Rótula: </strong> Hueso de la rodilla.</li><br>
                    <li><strong>Menisco: </strong>  Es una parte curva del cartílago de las rodillas y otras articulaciones.                    </li><br>
                    <p>Hay muchos tipos de articulaciones, incluidas las que no se mueven en los adultos, como las articulaciones 
                        suturales del cráneo. Las articulaciones que no se mueven se llaman articulaciones fijas. Otras 
                        articulaciones se mueven un poco, como las vértebras. Ejemplos de juntas móviles incluyen los siguientes:</p><br>
                    <li><strong>Enartrosis:</strong>las articulaciones esféricas, como las del hombro y la cadera, permiten el 
                    movimiento y la rotación hacia atrás, adelante y hacia los lados.</li><br>
                    <li><strong>Articulaciones en bisagra:</strong>las articulaciones en bisagra, como las de los dedos de las manos, 
                    las rodillas, los codos y los dedos de los pies, solo permiten movimientos de flexión y enderezamiento.</li><br>
                    <li><strong>Articulaciones giratorias:</strong>las articulaciones giratorias, como las del cuello, permiten un movimiento de rotación limitado.</li><br>
                    <li><strong> Articulaciones elipsoidales:</strong>Las articulaciones elipsoidales, como la articulación de la muñeca, permiten todo tipo de movimientos excepto movimientos rotatorios.</li><br>
                    
                    <div class="image-container">
                    <img src="Anatomy images\Prac_2\skull_.jpg" alt="skeleton_2" class="skeleton_2-image" style="width: 600px;">
                </div>
                </ul>
    </div>
    
<!-- Video Section -->
 <!-- Video Section -->
 <div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac2_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Cráneo y cuello humanos.</h3>
    <model-viewer src="human_skull_and_neck.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. esqueleto humano</h3>
    <model-viewer src="human_skeleton__esqueleto_humano.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>3. Caja torácica humana</h3>
    <model-viewer src="chest.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>4. Huesos del hombro</h3>
    <model-viewer src="human_arm__brazo_humano.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>5. mano humana</h3>
    <model-viewer src="spindles_of_the_hand__huesos_de_la_mano.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>6. columna vertebral humana</h3>
    <model-viewer src="the_human_spinal_column.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>7. pelvis humana</h3>
    <model-viewer src="pelvis.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>8. Hueso del dedo del pie humano</h3>
    <model-viewer src="foot_bones__huesos_del_pie.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>9. Hueso de la pierna humana</h3>
    <model-viewer src="leg_bones__huesos_de_la_pierna.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical3.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical1.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>