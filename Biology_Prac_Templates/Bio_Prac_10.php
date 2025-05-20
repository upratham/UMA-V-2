<?php
include '../header.php';
$practical_number = "B10";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology <!DOCTYPE html>
<html lang="en">
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
                <li><a href="#Procedimiento">Procedimiento</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#Referencias">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA PRÁCTICA N°10: LA RESPIRACIÓN CELULAR: INHIBICIÓN DE LA GLUCÓLISIS </h1>

                <h2 id="INTRODUCCIÓN">I. INTRODUCCIÓN</h2>
                <h1>Proceso de respiración celular</h1>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 10\1.png" alt="Fowler position" class="center">
                </div>
                <p>
                    Se caracteriza por ser un proceso metabólico de tipo catabólico, el cual consiste en degradar biomoléculas orgánicas (glúcidos, lípidos y proteínas) a moléculas más simples teniendo como resultado moléculas energéticas (ATP o GTP). 
                    Este proceso metabólico puede ser de dos tipos: (fig. N°1)
                </p>
                <ul>
                    <li><b>Aeróbico</b>: que se da en presencia de oxígeno y requiere de la organela denominada mitocondria (eucariota) o una estructura llamada mesosoma (procariota), generando una gran producción de moléculas energéticas (eucariota = 36-38 ATP, procariota = 38 ATP).</li>
                    <li><b>Anaeróbico</b>: que se da en ausencia de oxígeno y se realiza en el citosol, genera una baja producción de moléculas energéticas (2 ATP).</li>
                </ul>
                <p>
                    Si analizamos estos dos tipos de respiración celular en base a la degradación de los glúcidos, ambos se inician con la Glucólisis. La glucólisis es la primera etapa del proceso de respiración celular, se da en citosol y no requiere de oxígeno. 
                    Para iniciar la glucólisis se requiere como sustrato un glúcido principalmente de seis carbonos (hexosas), este proceso cuenta con una cascada de reacciones donde se transforma una hexosa en piruvato liberando una ganancia neta de 2 ATP. (Fig N° 2).
                </p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 10\2.png" alt="Fowler position" class="center">
                </div>
                <br>
                <h1>Inhibición de Respiración Celular</h1>
                <p>
                    Si se deseara inhibir el proceso de respiración celular, bastaría con bloquear una de las enzimas catalizadoras presentes en la glucólisis, como por ejemplo la enzima Enolasa que transforma el 2 fosfoglicerato a fosfoenolpiruvato. 
                    La enzima Enolasa requiere para su activación la presencia de iones de magnesio. Si se desea inhibir dicha enzima, sería necesario un compuesto que secuestre el magnesio, como es el caso del fluoruro de sodio que reacciona con el magnesio formando fluoruro de magnesio. 
                    De esta forma, se bloquearía la formación del piruvato y por ende el proceso de respiración celular, esto se evidencia con la disminución en la producción de dióxido de carbono.
                </p>
                <h2 id = "Competencias">Competencias</h2>
                <ol>
                    <li>Identifica los procesos de respiración celular.</li>
                    <li>Reconoce el efecto de un antimetabolito en el proceso de respiración celular.</li>
                    <li>Demuestra el efecto del uso de la glucosa como facilitador de la respiración anaeróbica.</li>
                    <li>Demuestra la presencia de CO₂ como molécula producto de la respiración celular anaeróbica.</li>
                </ol>
                
                <h2>Materiales</h2>
                <h3>Materiales del laboratorio</h3>
                <ul>
                    <li>5 tubos de ensayo grande</li>
                    <li>5 tubos de ensayo pequeños</li>
                    <li>10 ml de agua destilada</li>
                    <li>15 ml de solución de glucosa al 5%</li>
                    <li>3 ml de NaF 0.01 molar</li>
                    <li>3 ml de NaF 0.05 molar</li>
                    <li>3 ml de NaF 0.10 molar</li>
                    <li>Hervidor eléctrico</li>
                    <li>1 gradillas</li>
                    <li>1 placas Petri grande</li>
                    <li>2 pipetas</li>
                    <li>1 varilla de vidrio</li>
                </ul>
                <h3>Materiales por mesa de trabajo</h3>
                <ul>
                    <li>Un paquete de levadura (entregarlo dos días antes de la práctica)</li>
                    <li>Regla milimetrada</li>
                    <li>Plumón marcador para vidrio</li>
                </ul>

                <h3 id = "Procedimiento">Procedimiento</h3>
                <ol>
                    <li>Rotular los tubos de ensayo grandes y pequeños, numerar del 1 al 5.</li>
                    <li>
                        Llenar los tubos pequeños como se indica a continuación: (deben coincidir el número de tubo pequeño con el número de tubo grande)
                    </li>
                </ol>
                <table border="1" cellspacing="0" cellpadding="5">
                    <head>
                        <tr>
                            <th>Contenido/ N° de tubo pequeño</th>
                            <th>Suspensión de levadura</th>
                            <th>NaF 0.01 M</th>
                            <th>NaF 0.05 M</th>
                            <th>NaF 0.10 M</th>
                            <th>Agua destilada</th>
                            <th>Solución de Glucosa</th>
                        </tr>
                    </head>
                </body>
                        <tr>
                            <td>1</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>Al tope</td>
                            <td>Al tope</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>Al tope</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>3 mL</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>Al tope</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>Al tope</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>-------</td>
                            <td>3 mL</td>
                            <td>-------</td>
                            <td>Al tope</td>
                        </tr>
                    </tbody>
                </table><br>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 10\3.png" alt="Fowler position" class="center">
                </div><br>
            
                <h2 id = "RESULTADOS">Resultados</h2>
                <p>Anotar los resultados en mm de la lectura inicial y la lectura final en la siguiente tabla.</p>
                <table border="1" cellspacing="0" cellpadding="5">
                    <thead>
                        <tr>
                            <th>Tubo/ lectura</th>
                            <th>Lectura inicial (mm)</th>
                            <th>Lectura final (mm)</th>
                            <th>Diferencia: final-inicial (mm)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tubo 1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tubo 2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tubo 3</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tubo 4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tubo 5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 10\4.png" alt="Fowler position" class="center">
                </div>
                <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                <br>
                <h2 id = "Referencias">Referencias Bibliográficas</h2>
    <ul>
        <li>
            Audesirk T., Audesirk G. & Byers B. (2008). <i>Biología: La vida en la tierra. 8va. Edición</i>. México: Pearson. Prentice-Hall Hispanoamericana S.A.
        </li>
        <li>
            Solomon E., Berg L. & Martin D. (2013). <i>Biología. 9na. Edición</i>. México: Cengage Learning Editores S.A.
        </li>
    </ul>

    <h2 style="text-align: center;">Rúbrica de Calificación: Respiración Celular</h2>
    <table border="1" cellspacing="0" cellpadding="5" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="text-align: left;">Aspectos a Evaluar</th>
                <th style="text-align: center;">Logrado</th>
                <th style="text-align: center;">En Proceso</th>
                <th style="text-align: center;">No Logrado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: left; font-weight: bold;" rowspan="2">Resultados</td>
                <td style="text-align: center;">Identifica los resultados completando correctamente la tabla de medidas de los 5 tubos observados</td>
                <td style="text-align: center;">Identifica parcialmente los resultados completando la tabla de medidas de 2 o 3 tubos observados</td>
                <td style="text-align: center;">No identifica los resultados y no completa con las medidas correctas de 2 tubos observados</td>
            </tr>
            <tr>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">4</td>
                <td style="text-align: center;">3</td>
            </tr>
            <tr>
                <td style="text-align: left; font-weight: bold;">Gráfica de Resultados</td>
                <td style="text-align: center;">Determina la inhibición parcial o total de la práctica graficando en una escala para sus valores (x, y)</td>
                <td style="text-align: center;">Determina parcialmente la inhibición parcial o total de la práctica graficando en una escala para sus valores (x, y)</td>
                <td style="text-align: center;">No determina los tipos de inhibición observados en la práctica, no gráfica, ni utiliza una escala para sus valores (x, y)</td>
            </tr>
            <tr>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">4</td>
                <td style="text-align: center;">3</td>
            </tr>
            <tr>
                <td style="text-align: left; font-weight: bold;">Discusión de Resultados<br>Calidad de la Información</td>
                <td style="text-align: center;">Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica</td>
                <td style="text-align: center;">Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica</td>
                <td style="text-align: center;">Explica la respuesta a la pregunta planteada sin relacionarla con el desarrollo de la práctica</td>
            </tr>
            <tr>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">4</td>
                <td style="text-align: center;">1</td>
            </tr>
            <tr>
                <td style="text-align: left; font-weight: bold;">Presentación del Informe</td>
                <td style="text-align: center;">Presenta sus resultados sin borrones, ni manchas</td>
                <td style="text-align: center;">Presenta sus resultados con 3 o menos borrones o manchas</td>
                <td style="text-align: center;">Presenta sus resultados de 4 o más borrones o manchas</td>
            </tr>
            <tr>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;">0</td>
            </tr>
        </body>
    </table>
    </div>
    </div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac10.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac10_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
  <!-- Add more videos here in the same way -->
  
</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>
    <h3>Descomposición de glucosa y producción de energía ATP a través de la respiración aeróbica.</h3><br>
    <h2>1. Lado izquierdo: Una molécula de glucosa (C₆H₁₂O₆): la estructura compleja con átomos rojos (oxígeno), azules (carbono) y blancos (hidrógeno).</h2>

<h2>2. Medio: Se muestran moléculas pequeñas como el O₂ (oxígeno) entrando.</h2>

<h2>3. Lado derecho: Un conjunto más simple de moléculas que representan el CO₂ (dióxido de carbono) y el H₂O (agua), los productos finales de la degradación de la glucosa.</h2>
                <model-viewer src="cellular_respiration (1).glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: black; width: 100%; height: 600;">
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_11.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_9.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../biology/Biologia.html'">Página principal</button>
                </div>
</footer>

</body>
</html>
