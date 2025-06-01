<?php
include '../header.php';
$practical_number = "B12";
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
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#SOPA DE FASES">Sopa de fases</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA PRÁCTICA N°12: MEIOSIS .</h1>

                <h2 id="INTRODUCCIÓN">I. INTRODUCCIÓN</h2>
               <p>Es un tipo de cariocinesis en el que una célula diploide da como resultado cuatro células hijas haploides, diferentes entre sí. Tiene como función generar la variabilidad genética de los organismos y mantener la carga cromosómica de una especie, este tipo de cariocinesis solo se presentan en células germinales.</p>
               <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 12\1.png" alt="Fowler position" class="center">
            </div>
            <br>
            <h3>La meiosis cuenta con dos divisiones consecutivas del núcleo:</h3>

            <h3>MEIOSIS I</h3>
            <p>Llamada también Reduccional, ya que en ella la célula original (diploide) se convierte en dos células haploides, cuyos cromosomas están formados por 2 cromátidas. Esta primera división cuenta con 4 fases: profase I, metafase I, anafase I y telofase I.</p>
        
            <h3>MEIOSIS II</h3>
            <p>Conocida como Ecuacional, es una división más similar a la mitosis, en esta división se generan 4 células haploides (cromosomas con 1 cromátida) a partir de las dos células producidas en la primera división. Esta segunda división cuenta con 4 fases: profase II, metafase II, anafase II y telofase II.</p>
        
            <h3 id = "COMPETENCIAS">COMPETENCIAS</h3>
            <ul>
                <li>Identifica las fases de la meiosis en células de antera de maíz.</li>
            </ul>
        
            <h3>MATERIALES</h3>
            <h3>Materiales del laboratorio</h3>
            <ul>
                <li>Láminas preparadas</li>
                <li>Microscopio compuesto</li>
            </ul>
        
            <h3 id = "PROCEDIMIENTO">PROCEDIMIENTO</h3>
            <p>Observar a 1000X las láminas preparadas de meiosis y esquematizar cada una de las fases propuestas.</p>
        
            <h3">ACTIVIDADES</h3>
            <ol>
                <li>Resolver el siguiente crucigrama.</li>
            </ol>

            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 12\2.png" alt="Fowler position" class="center">
            </div>

            <h2>1. Resolver el siguiente crucigrama</h2>
            <ol style="margin-left: 20px;">
                <li>Término empleado para indicar que la célula presenta la mitad del número de cromosomas. <i>Horizontal</i></li>
                <li>Número de células resultantes de la meiosis I. <i>Vertical</i></li>
                <li>Función de la meiosis. <i>Vertical</i></li>
                <li>Número de células al finalizar la meiosis II. <i>Horizontal</i></li>
                <li>La meiosis se da en células. <i>Horizontal</i></li>
                <li>Se separan cromátidas hermanas. <i>Horizontal</i></li>
                <li>Genera la división del citoplasma generando 2 células. <i>Horizontal</i></li>
                <li>Nombre de la división donde se reduce la carga cromosómica. <i>Vertical</i></li>
                <li>Etapa en la que se alinean los cromosomas homólogos. <i>Vertical</i></li>
                <li>Se descondensan las cromátidas hermanas. <i>Horizontal</i></li>
                <li>Número de fases de la meiosis. <i>Vertical</i></li>
                <li>Número de subfases de la profase. <i>Horizontal</i></li>
            </ol>
        
            <h2>2. Revisar el siguiente cuadro que corresponde a Meiosis I y complete la actividad solicitada:</h2>
            <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: left;">
                <thead>
                    <tr>
                        <th style="width: 20%;">FASE</th>
                        <th style="width: 50%;">CARACTERÍSTICA</th>
                        <th style="width: 30%;">IMAGEN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PROFASE I</td>
                        <td>
                            Cuenta con 5 subfases: leptoteno, cigoteno, paquiteno, diploteno y diacinesis, siendo más importante el paquiteno, en él se da lo que se conoce como recombinación genética, lo que genera que los organismos de una misma especie sean diferentes. <br>
                            Desaparece la membrana nuclear. <br>
                            Los centriolos viajan a los polos para formar el huso acromático. <br>
                            Se condensa la cromatina. <br>
                            Desaparecen los nucléolos.
                        </td>
                        <td style="text-align: center;">
                            <img src="Photos\Biology Diagrams\Prac 12\3.png" alt="Profase I" style="max-width: 100%;"><br>
                            1000X
                        </td>
                    </tr>
                    <tr>
                        <td>METAFASE I</td>
                        <td>
                            Se observan cromosomas <b>homólogos</b> alineados en el plano ecuatorial. <br>
                            El huso acromático se encuentra unido a los cromosomas en el centrómero.
                        </td>
                        <td style="text-align: center;">
                            <img src="Photos\Biology Diagrams\Prac 12\4.png" alt="Metafase I" style="max-width: 100%;"><br>
                            1000X
                        </td>
                    </tr>
                    <tr>
                        <td>ANAFASE I</td>
                        <td>
                            El huso acromático se acorta. <br>
                            Se separan los <b>cromosomas homólogos</b> y se dirigen a los polos.
                        </td>
                        <td style="text-align: center;">
                            <img src="Photos\Biology Diagrams\Prac 12\5.png" alt="Anafase I" style="max-width: 100%;"><br>
                            1000X
                        </td>
                    </tr>
                    <tr>
                        <td>TELOFASE I</td>
                        <td>
                            Reaparece la membrana nuclear. <br>
                            Desaparece el huso acromático. <br>
                            Los cromosomas homólogos se localizan en los polos y se descondensan. <br>
                            Aparecen los nucléolos.
                        </td>
                        <td style="text-align: center;">
                            <img src="Photos\Biology Diagrams\Prac 12\6.png" alt="Telofase I" style="max-width: 100%;"><br>
                            1000X
                        </td>
                    </tr>
                </tbody>
            </table>
            <p style="text-align: right;">(Imágenes: Laboratorio de Biología. Universidad).</p>

            <h2 id = "SOPA DE FASES">Sopa de fases</h2>
    <p>En los microscopios del laboratorio se colocarán las diferentes fases de la meiosis de forma aleatoria, cada lámina presenta una letra. A continuación, observar al microscopio, reconocer la fase y colocar la letra en la fase que corresponda en la lista líneas abajo.</p>
    <ul style="list-style-type: none; padding: 0; margin-left: 20px;">
        <li><b>Profase I:</b> ______________________</li>
        <li><b>Metafase I:</b> ______________________</li>
        <li><b>Anafase I:</b> ______________________</li>
        <li><b>Telofase I:</b> ______________________</li>
    </ul>

    <h2>2. Completar el siguiente cuadro comparativo con características observables sobre mitosis y meiosis.</h2>
    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th>CRITERIO</th>
                <th>MITOSIS</th>
                <th>MEIOSIS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Muestra en la que se observó</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Número de fases</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Número de células hijas</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <h2>3. Completar la información solicitada sobre Meiosis II:</h2>
    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th>ÍTEMS</th>
                <th>OBSERVACIÓN #1</th>
                <th>OBSERVACIÓN #2</th>
                <th>OBSERVACIÓN #3</th>
                <th>OBSERVACIÓN #4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>OBSERVE LA IMAGEN Y COMPLETE:</td>
                <td><img src="Photos\Biology Diagrams\Prac 12\7.png" alt="Observación 1" style="max-width: 100%;"></td>
                <td><img src="Photos\Biology Diagrams\Prac 12\8.png" alt="Observación 2" style="max-width: 100%;"></td>
                <td><img src="Photos\Biology Diagrams\Prac 12\9.png" alt="Observación 3" style="max-width: 100%;"></td>
                <td><img src="Photos\Biology Diagrams\Prac 12\10.png" alt="Observación 4" style="max-width: 100%;"></td>
            </tr>
            <tr>
                <td>NOMBRE DE LA FASE</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>CARACTERÍSTICA OBSERVABLE</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <h2 id = "REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
    <ul style="list-style-type: disc; padding-left: 20px;">
        <li>Audesirk T., Audesirk G. & Byers B. (2008) <i>Biología: La vida en la tierra. 8va. Edición</i> México: Pearson. Prentice-Hall Hispanoamericana S.A.</li>
        <li>Solomon E., Berg L. & Martin D. (2013). <i>Biología. 9na. Edición.</i> México: Cengage Learning Editores S.A.</li>
    </ul>

    <h2>RÚBRICA DE CALIFICACIÓN</h2>
    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th rowspan="2" style="width: 25%;">ASPECTOS A EVALUAR</th>
                <th colspan="3" style="width: 50%;">ACTIVIDADES</th>
                <th rowspan="2" style="width: 25%;">PUNTAJE</th>
            </tr>
            <tr>
                <th>LOGRADO</th>
                <th>EN PROCESO</th>
                <th>NO LOGRADO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Crucigrama</td>
                <td>Reconoce la meiosis completando correctamente lo solicitado en el crucigrama.</td>
                <td>Reconoce parcialmente la meiosis completando con hasta 5 errores lo solicitado en el crucigrama.</td>
                <td>Reconoce parcialmente la meiosis completando con más de 6 errores lo solicitado.</td>
                <td>6 - 3 - 1 - 0</td>
            </tr>
            <tr>
                <td>Sopa de fases</td>
                <td>Reconoce las fases de las meiosis I observadas al microscopio completando correctamente lo solicitado.</td>
                <td>Reconoce parcialmente las fases de las meiosis I observadas al microscopio completando hasta con 1 o 2 errores lo solicitado.</td>
                <td>Reconoce parcialmente las fases de las meiosis I observadas al microscopio completando con 3 errores lo solicitado.</td>
                <td>8 - 4 - 1 - 0</td>
            </tr>
            <tr>
                <td>Tabla comparativa</td>
                <td>Diferencia la mitosis y la meiosis completando correctamente la tabla comparativa.</td>
                <td>Diferencia parcialmente la mitosis y la meiosis completando con 2 errores la tabla comparativa.</td>
                <td>Diferencia parcialmente la mitosis y la meiosis completando con más de 3 errores la tabla comparativa.</td>
                <td>2 - 1 - 0.5 - 0</td>
            </tr>
            <tr>
                <td>Identificación de fases de Meiosis II</td>
                <td>Reconoce las fases de la meiosis II a través de imágenes y completa la información correctamente.</td>
                <td>Reconoce las fases de la meiosis II hasta con 2 errores a través de imágenes y completa la información correctamente.</td>
                <td>Reconoce las fases de la meiosis II hasta con 3 errores a través de imágenes y completa la información incorrectamente.</td>
                <td>4 - 2 - 1 - 0</td>
            </tr>
        </tbody>
    </table>

</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac12.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac12_Part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
  <!-- Add more videos here in the same way -->
  
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_13.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_11.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/biology/Biologia.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
