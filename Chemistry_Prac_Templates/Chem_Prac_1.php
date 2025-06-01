<?php
include('../header.php');
$practical_number = "C1";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de química 1: Reglas de seguridad en el laboratorio</title>
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
        Teoría
    </button>

    <button class="tab-button active" onclick="openTab('Video')">
        <img src="logo video.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Video
    </button>

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
                <li><a href="#Objetivos">OBJETIVOS</a></li>
                <li><a href="#Base teórica">BASE TEORICA</a></li>
                <li><a href="#Normas">NORMAS</a></li>
                <li><a href="#Símbolos">SIMBOLOS DE PELIGRO QUIMICO</a></li>
                <li><a href="#Referencia">REFERENCIA</a></li>
            </ul>
        </nav>
       
        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
            <h1> Práctica de química 1: Reglas de seguridad en el laboratorio </h1>
                <h2 id="Objetivos">I.Objetivos</h2>
                <ul>
                    <li>Conozca y Aprenda las Normas de Seguridad del Laboratorio de Química Orgánica.</li>
                    <li>Reconocer la importancia de estas normas, que harán más seguro el trabajo en el Laboratorio.</li>
                    <li>Conozca las principales causas de incendios y explosiones.</li>
                    <li>Conocer los principios de los primeros auxilios.</li>
                </ul>
                
                <h2 id="Base teórica">2. Base teórica</h2>
                <p>El Laboratorio de Química Orgánica es una instalación donde se manipulan sustancias que pueden resultar muy nocivas para el cuerpo humano, por lo que los estudiantes deben ser conscientes y respetar los peligros que les acechan en sus actividades dentro del mismo y tomar las mayores precauciones posibles.</p>
                <p> También es importante conocer los daños que estas sustancias, si se eliminan mal, pueden causar a sus pares y al ecosistema.</p>
                <p> Los estudiantes de la carrera de Farmacia y Bioquímica deben conocer e interpretar adecuadamente las normas de seguridad a las que deben ajustar su comportamiento dentro del laboratorio, lo que ayudará a preservar su salud e integridad física, así como a desarrollar las capacidades críticas. 
                    sentido necesario para afrontar aquellas situaciones imprevistas que no están contempladas en estos regulaciones.</p>

                <h2 id="Normas">3. Normas</h2>
                <p><strong>Las reglas básicas que se deben seguir en el laboratorio de Química Orgánica son:</strong></p>
                <ul>
                    
                    <p><strong>1. Seguridad Básica:</strong> Las reglas básicas que se deben seguir en el laboratorio de Química Orgánica son:</p>
                    <p>
                        1] Utilizar delantal en el Laboratorio de manera obligatoria<br>
                        2] Mantener la mesa de trabajo limpia y libre de objetos innecesarios<br>
                        3] Revisar y leer las instrucciones en la etiqueta de cada reactivo, propiedades físicas, químicas y toxicológicas de las sustancias a utilizar.<br>
                        4] Utilice equipo de laboratorio limpio y seco.<br>
                        5] No trabajes solo en el Laboratorio.<br>
                        6] No coma ni juegue dentro del laboratorio.<br>
                        7] No pipetee reactivos líquidos con la boca.<br>
                        8] No pruebes ningún producto a menos que sea estrictamente necesario.<br>
                        9] No oler ninguna sustancia directamente y si es necesario oler, pasar la mano sobre la sustancia para percibir su aroma sin peligro.<br>
                       10] Los reactivos químicos nunca deben tocarse directamente con las manos, especialmente aquellos que pueden causar quemaduras graves Deben manipularse con espátulas.<br>
                       11] No devuelva los reactivos no utilizados al contenedor original.<br>
                       12] No pierda de vista el sistema y los reactivos con los que está trabajando.<br>
                       13] Cualquier compuesto volátil o cualquier compuesto que desprenda vapores tóxicos debe manipularse en campanas o permanecer en un área ventilada.<br>
                       14] Si se derrama ácido sobre la mesa, se debe recoger y lavar con abundante agua.<br>
                       15] Las soluciones ácidas y alcalinas deben neutralizarse antes de descargarse al desagüe.<br>
                       16] Manipule el equipo caliente con guantes o pinzas de amianto para evitar quemaduras.<br>
                       17] Antes de calentar líquidos, deben estar bien mezclados ya que pueden salpicar o explotar.<br>
                       18] En una destilación, los condensadores y los tubos de evacuación no deben estar obstruidos.<br>
                       19] Lávese bien las manos al final de cada sesión de laboratorio.<br>
                    </p>
                    

                    <p><strong>Incendios: </strong>Pueden producirse incendios en el trabajo de laboratorio debido a:</p>
                    <p>
                        1] Tener un reactivo químico cerca de una fuente de calor o chispa<br>
                        2] Calentar o hervir un solvente volátil o inflamable con un encendedor y sin condensador.<br>
                        3] Vapores o gases inflamables que se producen al mezclar sustancias que reaccionan entre sí.<br>
                        4] Malas condiciones de almacenamiento para reactivos inestables o volátiles o que puedan reaccionar violentamente con la temperatura, agua, ácidos, álcalis, agentes oxidantes, reductores o compuestos de elementos pesados.<br>
                        5] Desconocer la temperatura de ignición espontánea de las sustancias.<br>
                    </p>

                    <p><strong>Explosiones:</strong> Muchas explosiones pueden ocurrir en las siguientes situaciones:</p>
                    <p>
                        1] Una reacción exotérmica incontrolable.<br>
                        2] Una explosión de residuos de peróxido al concentrar soluciones de éter hasta sequedad<br>
                        3] Por calentamiento, secado, destilación o impacto de compuestos inestables.<br>
                        4] Al mezclar sustancias que generen vapores inflamables o explosivos.<br>
                        5] Por desconocer las condiciones de almacenamiento y uso de cada sustancia.<br>
                    </p>

                    <p><strong>First Aid:</strong>  In the event of an accidental accident, the following rules must be followed.</p>
                    <p>
                        1] En caso de contacto del ácido con la piel, lavar inmediatamente la zona afectada con abundante agua y aplicar una solución de bicarbonato de sodio.<br>
                        2] Si se produce contacto con los ojos, lavar con abundante agua.<br>
                        3] Cuando se ingiere un ácido fuerte, se puede neutralizar con hidróxido de aluminio (antiácido).<br>
                        4] Cuando se ingiere un álcali, se neutraliza con jugo de naranja, limón o uva o con vinagre.<br>
                        5] Cuando se ha ingerido una sustancia venenosa o tóxica y es necesario inducir el vómito, se debe utilizar un emético (agua salada, agua jabonosa). Luego se debe administrar un emoliente (no se debe inducir el vómito si la sustancia ingerida es corrosiva).<br>
                        6] Debes tener un botiquín de primeros auxilios con todo lo necesario.
                    </p>
                </ul>
                
                <h2 id="Símbolos">4. Símbolos de peligro químico</h2>
                <li>Los <strong>símbolos de peligro químico.</strong>Son unos <strong>pictogramas</strong> que se imprimen en las etiquetas de los productos químicos y que sirven para proporcionar una percepción instantánea del tipo de 
                    peligro involucrado en el uso, manipulación, transporte y almacenamiento de estos productos. </li>
                    
                    <li> Los símbolos de peligro están estandarizados en la Unión Europea de acuerdo con el Anexo II de Directiva 67/548/CEE.</li>
                    <li>Los símbolos son negros y están impresos en cuadrados naranjas. Las dimensiones mínimas del estos últimos son de 10 mm × 10 mm (o al menos el 10% de la superficie total de la etiqueta).</li>
                    <li>¿A su criterio que normas de seguridad se deben tomar en cuenta en el laboratorio?</li>
                    <li>¿Que cuidado se debe tener antes de manipular una sustancia?</li>
                    <li>Señale 3 posibles causas por las que se puede producir un incendio</li>
                    <li>Si un compañero a ingerido una sustancia corrosiva o irritante se le debe provocar el vomito? ¿Por qué?</li>
                    <li>¿Qué es un antídoto, un emético, y un emoliente?</li>
                    <li>indique tres ejemplos diferentes a los vistos en la guía sobre símbolos de peligrosidad.</li>
                    
                </ol>
    
                <h2 id="Referencia">Referencia</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>

    </div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac_9.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <p>Aquí, en este capítulo no hay modelos 3D.</p>
</div>

<!---Questionaire--->

<ol>

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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_2.php'">Próxima práctica</button>
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>

</footer>

</body>
</html>