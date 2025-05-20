<?php
include '../header.php';
$practical_number = "B11";
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
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#División Celular">División Celular</a></li>
                <li><a href="#Competencias">Competencias</a></li>
                <li><a href="#Actividad">Actividad</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA PRÁCTICA N°11 EL CICLO CELULAR: MITOSIS .</h1>

                <h2 id="INTRODUCCIÓN">I. INTRODUCCIÓN</h2>
    <p>
        Las células como cualquier ser vivo deben pasar por un ciclo de vida, este se denomina ciclo celular.
    </p>
    <p>El ciclo celular se divide en dos etapas:</p>

    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 11\1.png" alt="Fowler position" class="center">
    </div>
    <ol>
        <li>
            <b>G1:</b> Esta fase se inicia con el nacimiento de la célula, a partir de una célula progenitora, pasando por un proceso de desarrollo y crecimiento hasta alcanzar su maduración. Algunas células como las neuronas se quedan en este momento, otras como las células del estrato basal de la epidermis ingresan a la siguiente fase (S).
        </li>
        <li>
            <b>S:</b> Esta fase se caracteriza por la duplicación del material genético y aumento del citoplasma.
        </li>
        <li>
            <b>G2:</b> En esta fase se termina de sintetizar proteínas, principalmente aquellas que forman el huso acromático.
        </li>
    </ol>

    <h3 id = "División Celular">División Celular</h3>
    <p>Se divide en 2 etapas:</p>
    <ol>
        <li>
            <b>Cariocinesis:</b> Se hace referencia a la división del núcleo, esta fase dependiendo de la línea celular puede ser mitosis o meiosis.
        </li>
        <li>
            <b>Citocinesis:</b> Es la fase con la cual se concluye la división celular, dividiendo el citoplasma de la célula. Esta citocinesis, dependiendo del tipo de célula, se denomina tabicación (células eucariotas vegetales) o estrangulación (células eucariotas animales).
        </li>
    </ol>

    <h3>Mitosis</h3>
    <p>
        Es un tipo de cariocinesis que se caracteriza por generar células con la misma información genética a la célula original. Se produce en células somáticas y da como resultado dos células hijas idénticas entre sí. Tiene como función el aumento en el número de individuos, cuando nos referimos a células unicelulares. Para el caso de organismos pluricelulares, participa en el desarrollo y crecimiento de los individuos, así como en la regeneración de tejidos.
    </p>
    <p>La mitosis cuenta con 4 fases:</p>

    <h2>Fases de la Mitosis</h2>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="text-align: left;">Fase</th>
                <th style="text-align: left;">Característica</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Profase</b></td>
                <td>
                    Desaparece la membrana nuclear.<br>
                    Los centriolos viajan a los polos para formar el huso acromático.<br>
                    Se condensa la cromatina.<br>
                    Desaparecen los nucléolos.
                </td>
            </tr>
            <tr>
                <td><b>Metafase</b></td>
                <td>
                    Se observan cromosomas alineados en el plano ecuatorial.<br>
                    El huso acromático se encuentra unido a los cromosomas en el centrómero.<br>
                    Los cromosomas se encuentran formados por dos cromátidas.
                </td>
            </tr>
            <tr>
                <td><b>Anafase</b></td>
                <td>
                    El huso acromático se acorta separando las cromátidas hermanas y dirigiéndolas a los polos.
                </td>
            </tr>
            <tr>
                <td><b>Telofase</b></td>
                <td>
                    Reaparece la membrana nuclear.<br>
                    Desaparece el huso acromático.<br>
                    Las cromátidas hermanas se localizan en los polos y se descondensan.<br>
                    Aparecen los nucléolos.
                </td>
            </tr>
        </tbody>
    </table>

    <p>
        Al término de la telofase se obtendrán dos nuevos núcleos, es por ello que debe continuarse con una citocinesis para poder obtener 2 células idénticas entre sí.
    </p>

    <h2 id = "Competencias">Competencias</h2>
    <ul>
        <li>Identifica las fases de la mitosis en células meristemáticas de raíz de “cebolla”.</li>
    </ul>

    <h2>Materiales</h2>
    <h3>Materiales del laboratorio</h3>
    <ul>
        <li>Láminas preparadas de tejido meristemático de “cebolla”</li>
        <li>Microscopio compuesto</li>
    </ul>

    <h2>Procedimiento</h2>
    <p>Observar a 400X las láminas preparadas de mitosis y esquematizar cada una de las fases.</p>

    <h2 id = "Actividad">Actividad</h2>
    <p>
        A continuación, se presentan las fases de la mitosis y la citocinesis de una <b>CÉLULA ANIMAL</b> sin un orden determinado, a partir de estas deberá asignar el nombre de la fase a la que pertenece y completar la información de las estructuras solicitadas por las flechas.
    </p>

    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 11\2.png" alt="Fowler position" class="center">
    </div>

    <br>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 11\3.png" alt="Fowler position" class="center">
    </div>
    <br>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 11\4.png" alt="Fowler position" class="center">
    </div>
    <br>

    <h2 id = "Resultados">Resultados</h2>
    <p>Tipo de muestra empleada para observar mitosis: __________________________</p>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>Ítems</th>
                <th>Observación #1</th>
                <th>Observación #2</th>
                <th>Observación #3</th>
                <th>Observación #4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Dibujo científico de la observación al microscopio</b></td>
                <td style="text-align: center;"><img src="Photos\Biology Diagrams\Prac 11\5.png" alt="Dibujo Observación #1"></td>
                <td style="text-align: center;"><img src="Photos\Biology Diagrams\Prac 11\5.png" alt="Dibujo Observación #2"></td>
                <td style="text-align: center;"><img src="Photos\Biology Diagrams\Prac 11\5.png" alt="Dibujo Observación #3"></td>
                <td style="text-align: center;"><img src="Photos\Biology Diagrams\Prac 11\5.png" alt="Dibujo Observación #4"></td>
            </tr>
            <tr>
                <td><b>Nombre de la fase</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Característica observable</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Aumento de la observación al microscopio</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

    <h2 id = "Referencias Bibliográficas">Referencias Bibliográficas</h2>
    <ul>
        <li>Audesirk T., Audesirk G. & Byers B. (2008). <i>Biología: La vida en la tierra. 8va. Edición</i>. México: Pearson. Prentice-Hall Hispanoamericana S.A.</li>
        <li>Solomon E., Berg L. & Martin D. (2013). <i>Biología. 9na. Edición</i>. México: Cengage Learning Editores S.A.</li>
    </ul>

    <h2>Rúbrica de Calificación: Mitosis</h2>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>Aspectos a Evaluar</th>
                <th>Logrado</th>
                <th>En Proceso</th>
                <th>No Logrado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Actividades</b><br>Reconocimiento de fases de la mitosis</td>
                <td>Reconoce todos los ítems solicitados con flechas de las fases de mitosis.</td>
                <td>Reconoce parcialmente los ítems solicitados con flechas de las fases de mitosis.</td>
                <td>No reconoce los ítems solicitados con flechas de las fases de mitosis.</td>
            </tr>
            <tr>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">3</td>
                <td style="text-align: center;">1</td>
            </tr>
            <tr>
                <td><b>Resultados</b><br>Reconocimiento de fases de la mitosis</td>
                <td>Reconoce las fases de la mitosis a través de dibujos de las células observadas al microscopio y completa con la información correctamente.</td>
                <td>Reconoce las fases de la mitosis hasta con 6 errores a través de dibujos de las células observadas al microscopio y completa con la información correctamente.</td>
                <td>No reconoce las fases de la mitosis y completa con más de 6 errores la información solicitada.</td>
            </tr>
            <tr>
                <td style="text-align: center;">12</td>
                <td style="text-align: center;">5</td>
                <td style="text-align: center;">1</td>
            </tr>
            <tr>
                <td><b>Presentación del Informe</b></td>
                <td>Presenta sus resultados sin borrones, ni manchas.</td>
                <td>Presenta sus resultados con 3 o menos borrones o manchas.</td>
                <td>Presenta sus resultados de 4 o más borrones o manchas.</td>
            </tr>
            <tr>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;">0</td>
            </tr>
        </tbody>
        </table>
</div>
</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac11.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac11_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
  <!-- Add more videos here in the same way -->
  
</div>

 <!-- 3D Model Section -->
 <div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>

                <h3>1. etapa 1 de la mitosis</h3>
                <model-viewer src="mitosis_stage_1.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>2. etapa 2 de la mitosis</h3>
                <model-viewer src="mitosis_stage_2.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>3. etapa 3 de la mitosis</h3>
                <model-viewer src="mitosis_stage_3.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>4. etapa 4 de la mitosis</h3>
                <model-viewer src="mitosis_stage_4.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>5. etapa 5 de la mitosis</h3>
                <model-viewer src="mitosis_stage_5.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>6. etapa 6 de la mitosis</h3>
                <model-viewer src="mitosis_stage_6.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>7. etapa 7 de la mitosis</h3>
                <model-viewer src="mitosis_stage_7.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>8. etapa 8 de la mitosis</h3>
                <model-viewer src="mitosis_stage_8.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>

                <h3>9. etapa 9 de la mitosis</h3>
                <model-viewer src="mitosis_stage_9.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>
                
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_12.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_10.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../biology/Biologia.html'">Página principal</button>
                </div>
</footer>

</body>
</html>
