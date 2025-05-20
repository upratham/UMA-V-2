<?php
include '../header.php';
$practical_number = "B4";
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
                <li><a href="COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#PARTES DEL MICROSCOPIO ÓPTICO">PARTES DEL MICROSCOPIO ÓPTICO</a></li>
                <li><a href="#CARACTERÍSTICAS DEL MICROSCOPIO ÓPTICO">CARACTERÍSTICAS DEL MICROSCOPIO ÓPTICO</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> PRÁCTICA PRÁCTICA N°4: EL MICROSCOPIO</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Conocer el microscopio y su importancia.</li>
                    <li>Identificar los diferentes componentes del microscopio.</li>
                    <li>Realiza el enfoque fino y reconoce la amplificación total y como obtener su valor.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <p>La invención del microscopio en el siglo XVII permitió a los científicos de la época observar objetos muy pequeños, difícilmente observables de forma natural. Inclusive permitió la observación por primera vez de la célula por Robert Hooke en 1655. El microscopio a lo largo de la historia ha sido mejorado hasta el instrumento que tenemos hoy. El microscopio actual es un sistema óptico compuesto, formado por dos lentes; la lente el objetivo que forma una diminuta IMAGEN REAL INVERTIDA y la lente ocular la cual MAGNIFICA LA IMAGEN.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 4\1.png" alt="Fowler position" class="center">
                </div>

                <h2 id="PARTES DEL MICROSCOPIO ÓPTICO">2.1	PARTES DEL MICROSCOPIO ÓPTICO</h2>
                <p>El microscopio óptico presenta dos partes; mecánica y óptica, quienes a su vez están compuestos por más componentes.</p>
                <br>
                <p>ACTIVIDAD 1 <br>
                    Completa la siguiente tabla con la información de la clase:
                    </p>
                <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 4\2.jpg" alt="Fowler position" class="center">
                </div>

                <div class="table-container">
                    <table class="left-table">
                        <thead>
                            <tr>
                                <th>PARTE MECÁNICA</th>
                                <th>NOMBRE DEL COMPONENTE</th>
                                <th>¿QUE FUNCIÓN CUMPLE?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 1.jpg" alt="Parte Mecánica 1" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 2.png" alt="Parte Mecánica 2" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 3.jpg" alt="Parte Mecánica 3" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 4.jpg" alt="Parte Mecánica 4" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 5.jpg" alt="Parte Mecánica 5" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\tab 6.jpg" alt="Parte Mecánica 6" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
            
                    <table class="right-table">
                        <thead>
                            <tr>
                                <th>PARTE ÓPTICA</th>
                                <th>NOMBRE DEL COMPONENTE</th>
                                <th>¿Qué FUNCIÓN CUMPLE?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\sec tab 1.jpg" alt="Parte Óptica 1" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\sec tab 2.jpg" alt="Parte Óptica 2" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><img src="Photos\Biology Diagrams\Prac 4\sec tab 3.jpg" alt="Parte Óptica 3" style="max-width: 100px; max-height: 100px;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 id="CARACTERÍSTICAS DEL MICROSCOPIO ÓPTICO">2.2	CARACTERÍSTICAS DEL MICROSCOPIO ÓPTICO</h3>
                <p>1.	PODER DE AMPLIFICACIÓN
                    Genera una imagen con mayor tamaño, y se obtiene de la siguiente forma:
                    </p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 4\3.png" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>Por ejemplo: La siguiente imagen se observó con el objetivo de 40 aumentos y con el ocular que amplifica 10 veces, por lo que el aumento total de la imagen será 40 x 10 = 400x 0 400 veces su tamaño original</p>
                <br>
                <br>
                <br>
                <p>2.	PODER DE RESOLUCIÓN<br>
                    Como toda imagen aumentada en tamaño, la resolución de la misma se va perdiendo debido al acercamiento de la lente sobre la muestra. El poder de resolución permite devolverle la nitidez a la imagen y poder observar detalles, para ello será necesario utilizar el TORNILLO MICROMETRICO del microscopio.
                    </p>
                <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 4\5.png" alt="Fowler position" class="center">
                </div>
                <p>3.	EL ENFOQUE<br>
                    Para realizar una correcta observación de las muestras, es necesario poner atención a los siguientes pasos:
                    </p>
                <div class="instruction-container">
                        <div class="instruction-row">
                            <div class="instruction-card">
                                <img src="Photos\Biology Diagrams\Prac 4\6.png" alt="Step 1" style="width: 100px; height: 100px; display: block; margin: auto;">
                                <p>Encienda el microscopio y coloque el objetivo de menor aumento (4x), luego coloque la lámina preparada sobre la platina y asegúrela con las pinzas.</p>
                                <p>Asegúrese que la muestra se encuentre en el centro del orificio de la platina.</p>
                            </div>
                            <div class="instruction-card">
                                <img src="Photos\Biology Diagrams\Prac 4\7.png" alt="Step 2" style="width: 100px; height: 100px; display: block; margin: auto;">
                                <p>Regule la fuente de luz y deje abierto el diafragma.</p>
                                <p>Coloque luego el objetivo perpendicular a la platina y acerque el condensador a la platina. A mayor aumento, el condensador debe estar cerca de la platina.</p>
                            </div>
                            <div class="instruction-card">
                                <img src="Photos\Biology Diagrams\Prac 4\8.png" alt="Step 3" style="width: 100px; height: 100px; display: block; margin: auto;">
                                <p>Coloque los ojos sobre los oculares y manténgalos abiertos, ajuste el sistema de binoculares a su distancia ocular, de modo que observe un solo campo de luz.</p>
                            </div>
                        </div>
                        <div class="instruction-row">
                            <div class="instruction-card">
                                <img src="Photos\Biology Diagrams\Prac 4\9.png" alt="Step 4" style="width: 100px; height: 100px; display: block; margin: auto;">
                                <p><strong>ENFOQUE GRUESO:</strong> Siga moviendo la platina hacia arriba utilizando el tornillo macrométrico hasta que visualice la muestra. Este enfoque se realiza sólo al inicio de todo el procedimiento y con el objetivo de 4x.</p>
                                <p><strong>ENFOQUE FINO:</strong> Luego del enfoque grueso, empiece a girar el tornillo micrométrico hasta que pueda observar nítidamente la muestra. Este enfoque debe realizarse cada vez que se amplifique con un nuevo objetivo.</p>
                            </div>
                            <div class="instruction-card">
                                <img src="Photos\Biology Diagrams\Prac 4\10.png" alt="Step 5" style="width: 100px; height: 100px; display: block; margin: auto;">
                                <p>Recuerda que cada vez que se utilice el microscopio, debe de limpiarse en especial las lentes. Para ello toma un papel lente y con delicadeza limpia las lentes.</p>
                                <p>En el caso de usar aceite inmersión se puede agregar unas gotas de alcohol isopropílico al papel lente.</p>
                            </div>
                        </div>
                </div>

                <h3 id="MATERIALES Y MÉTODOS">III. MATERIALES Y MÉTODOS</h3>
                <p><strong>3.1	MATERIALES</strong></p>

                <div style="display: flex; justify-content: space-between;">
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li><strong>Materiales del laboratorio</strong></li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Microscopios ópticos
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Goteros
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Láminas portaobjeto y cubreobjeto
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Navajas 
                            </li>
                        </ul>
                    </div>
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li<strong>Materiales del estudiante</strong>></li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Hoja de un diario (periódico)
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Corcho
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Una flor por mesa (lirio cucarda) o tallo herbáceo
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                tijeras
                            </li>
                        </ul>
                    </div>
                </div>

                <br>
                <p><strong>3.2	PROCEDIMIENTO</strong></p>
                <ul>
                    <li>Tomar una lámina portaobjeto y cubreobjetos por los bordes usando los dedos pulgar e índice.</li>
                    <li>Con un gotero colocar, en el centro del portaobjeto, una pequeña gota de agua y sobre ésta colocar la letra "e" minúscula recortada de un diario, por encima de la letra colocar el cubreobjetos y secar los bordes. Enfocar a 40X</li>
                    <li>Mover la platina con ayuda de las perillas coaxiales X e Y, para recorrer el campo.</li>
                    <li>Realizar los esquemas dentro de un círculo y no olvidar colocar: título, los aumentos y señalar o describir lo que se observa.</li>
                    <li>Repetir el procedimiento con el polen de la flor realizando el enfoque a 100X y el corcho a 400X.</li>
                </ul>

                <h3 id="RESULTADOS">IV.	RESULTADOS</h3> 
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 4\11.png" alt="Fowler position" class="center">
                </div>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 4\12.png" alt="Fowler position" class="center">
                </div>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 4\13.png" alt="Fowler position" class="center">
                </div>

                <h3 id="REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h3> 
                <ul>
                    <li>Ron,	E.	2012.	Pollen.	España.	PlantAction. Http://www.plantactions.com/index.php/</li>
                    <li>WikiHow (s.f) ¿Cómo usar el microscopio? https://es.wikihow.com/usarun-mcroscop10 </li>
                    <li>Gutierrez M. 2019. Portal para la divulgación de la microbiología. ' El Microscopio	la historia	alrededor" https://www.javeriana.edu.co/divulgacionmicrobiologia/el-microscopioy-la-historia-alrededor/ </li>
                </ul>

                <table style="width: 100%; border-collapse: collapse; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
                    <caption style="font-weight: bold; font-size: 16px; margin-bottom: 10px;">RÚBRICA DE CALIFICACIÓN: EL MICROSCOPIO</caption>
                    <thead>
                        <tr>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">ASPECTOS A EVALUAR</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">LOGRADO</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">EN PROCESO</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">NO LOGRADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Actividad</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica los componentes del microscopio completando la actividad de clase sin errores.<br><br>2
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica parcialmente los componentes del microscopio completando la actividad de clase con hasta 9 errores.<br><br>1
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                No identifica los componentes del microscopio y no completa la actividad de clase incorrectamente con más de 10 errores.<br><br>0.5
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Resultados: Observaciones de muestras<br><br>Esquemas</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica la muestra realizando todos los esquemas o dibujos de forma correcta, para ello utiliza colores y lápiz.<br><br>4
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica parcialmente la muestra realizando los esquemas con errores, usa lápiz y no colorea.<br><br>3
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                No identifica las muestras realizando los esquemas o dibujos de forma desordenada, no usa lapicero.<br><br>1
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Aumentos</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica la amplificación total en todos los dibujos realizados de forma correcta.<br><br>2
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica la amplificación total en dos de los dibujos realizados.<br><br>1
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Identifica la amplificación total en menos de dos dibujos realizados.<br><br>0.5
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Descripción de la muestra</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica coherentemente los dibujos y señales de lo que observa sin presentar errores.<br><br>4
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica los dibujos o señales de lo que se observa y presenta menos de 2 errores.<br><br>3
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica los dibujos o no señala de lo que observa, y los dibujos o señales tienen más de 2 errores.<br><br>2
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Discusión de resultados<br><br>Calidad de la información</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica.<br><br>6
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica.<br><br>4
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Explica la respuesta a la pregunta planteada sin relacionar su respuesta con el desarrollo de la práctica.<br><br>2
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Presentación del informe</td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Presenta sus resultados sin borrones, ni manchas.<br><br>2
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Presenta sus resultados con 3 o menos borrones o manchas.<br><br>1
                            </td>
                            <td style="border: 1px solid black; padding: 10px;">
                                Presenta sus resultados de 4 a más borrones o manchas.<br><br>0.5
                            </td>
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
      <source src="Prac4.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
</div>

<!-- 3D Model Section -->
<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>

    <h3>1. Microscopio</h3>
    <model-viewer src="compound_microscope.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 1000;">
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_5.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_3.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../biology/Biologia.html'">Página principal</button>
                </div>
</footer>

</body>
</html>
