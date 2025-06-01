<?php
include('../header.php');
$practical_number = "A9";
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
            gap: 10px;
            padding: 15px;
            background-color: white;
            border-bottom: 2px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 1000;
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
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#ANATOMIA DEL CUELLO">ANATOMIA DEL CUELLO</a></li>
                <li><a href="#REGIONES DEL CUELLO">REGIONES DEL CUELLO</a></li>
                <li><a href="#INERVACIÓN">INERVACIÓN</a></li>
                <li><a href="#REGIÓN HIOIDEA">REGIÓN HIOIDEA</a></li>
                <li><a href="#TRAQUEOTOMÍA">TRAQUEOTOMÍA</a></li>
                <li><a href="#Información Postoperatoria">Información Postoperatoria</a></li>
                <li><a href="#cuestionario">cuestionario</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 9: 
REGIONES, ESTRUCTURAS Y EL PAQUETE VASCULONERVIOSAS DEL CUELLO, COLUMNA VERTEBRAL.
</h1>
                <h2 id = "ANATOMIA DEL CUELLO">ANATOMIA DEL CUELLO</h2>
                <p>El cuello es la región del cuerpo comprendida entre la cabeza y el tórax. Es un punto de transición entre la cabeza, el tórax y los miembros superiores. Es la vía de paso de elementos vasculares, viscerales y nerviosos. Su forma es cilíndrica. Posee un tallo osteoarticular: la columna cervical. Su morfología varía con la edad, sexo, obesidad, etc. Su longitud varia de un individuo a otro: 8 cm en el hombre y 7 cm en la mujer como término medio.</P>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\1.png" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\2.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\3.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <p>El cuello se continúa con el mediastino por su parte inferior, con la porción
anteroinferior de la cara por su parte anterosuperior y con regiones comunes a ambos como son la faringe y la región pterigomaxilar. Por esta razón sus límites profundos son poco definidos.
</P>
                <h2 id = "REGIONES DEL CUELLO">REGIONES DEL CUELLO</h2>
                <p>Topográficamente el cuello se divide en dos regiones:<br>
1-	POSTERIOR O NUCA<br>
2-	ANTERIOR: - Región Superficial o hioidea<br>
-	Región Profunda o prevertebral<br>
-	Regiones laterales
</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\4.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <p>MUSCULOS DEL CUELLO Aseguran el movimiento de la cabeza y el raquis cervical. Se clasifican en: • Músculos posteriores dorsales extensores (de la nuca) • Músculos laterales rotadores o flexores laterales • Músculos anteriores ventrales, prevertebrales o flexores (incluyen los músculos que se insertan en el hioides)</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\5.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "INERVACIÓN">INERVACIÓN</h3><br>
                <p>INERVACIÓN: cada músculo recibe una o varias ramas de las raíces posteriores de los nervios cervicales. . El plano profundo recibe el 1º y 2º nervios Cervicales (Nervio suboccipital de Arnold). El resto desde la 2º a 8º raíz cervical. VASCULARIZACION: Arteria Occipital que es rama de la Arteria Carótida Externa.</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\6.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\7.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\8.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\9.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <h3 id = "REGIÓN HIOIDEA"></h3>
                <p>REGIÓN HIOIDEA Región media, impar y simétrica. Ubicada en porción anterior del cuello. El hueso hioides la divide en dos regiones: la suprahioidea y la infrahioidea. REGION SUPRAHIOIDEA Región anterior y superior del cuello. Es un triángulo de base en el hioides y vértice en el mentón. Está oculto detrás de la mandíbula cuando la cabeza está en posición normal. Posee dos planos musculares, con dos músculos cada uno LIMITES DE LA REGIÓN SUPRAHIOIDEA</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\10.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\11.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <p>REGION INFRAHIOIDEA Región media e impar anterior e inferior del cuello. Es un triángulo de base en el hioides entre ambos esternocleidomastoideos y el hioides. Posee dos planos musculares, con dos músculos cada uno. Debajo de los músculos contiene: esófago cervical, faringe, laringe, tráquea cervical, glándula tiroides, glándulas paratiriodes.</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\12.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\13.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\14.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "TRAQUEOTOMÍA">TRAQUEOTOMÍA</h3>
                <p>La traqueotomía crea una nueva vía respiratoria al hacer una incisión en el cuello que llega a la tráquea. Un tubo de traqueotomía es colocado en la tráquea y el paciente respira por medio del tubo hasta que es removido. Esto se usa para crear una desviación y evitar cualquier inflamación o un bloqueo en la boca o garganta que prevendría la respiración, o si un paciente es intubado por un largo período de tiempo, o si un paciente necesita ayuda limpiando el moco de sus vías respiratorias y pulmones.
<br><br>Información Preoperatoria
</p>
                <ul>
                    <li>Todas las cirugías llevan riesgos que intentamos minimizar en la sala de cirugías. Una traqueotomía normalmente permanece en su lugar por AL MENOS 2 semanas.</li>
                    <li>El tubo de la traqueotomía que se coloca durante la cirugía normalmente tiene un "manguito", o un globo inflable que previene que el aire se mueva hacia arriba.</li>
                    <li>Los beneficios de una traqueotomía varían de acuerdo al paciente. En general, una traqueotomía permite que un paciente esté más cómodo en una máquina para respirar. Mejora la higiene de los pulmones y las vías respiratorias, previene las cicatrices en las vías respiratorias y actúa como un desvío de cualquier bloqueo en la boca o garganta que prevendría que el paciente fuera capaz de respirar.</li>
                </ul>

                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\15.png" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "Información Postoperatoria"></h3>

                <ul>
                    <li>Después de una traqueotomía, un paciente permanece en la Unidad de Cuidados Intensivos por al menos 24 horas para recibir monitoreo frecuente. Es importante que el aire que el paciente está respirando permanezca cálido y húmedo.</li>
                    <ul>
                        <li>SI un paciente no está usando una máquina ventiladora para la respiración, normalmente puede usar un tubo de traqueotomía sin manguito, lo que hace que hablar sea más fácil.</li>
                    </ul>
                </ul>

                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\16.png" alt="Fowler position" class="center">
                </div>
                <br>
                
</div>

     <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac9.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. músculos humanos</h3>
    <model-viewer src="prac9.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 900;">
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical10.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical8.php'">Práctica anterior</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>