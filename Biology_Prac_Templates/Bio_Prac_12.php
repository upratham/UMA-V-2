<?php
include '../header.php';
$practical_number = "B12"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°12: MEIOSIS .</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex; /* Changes display to flex to help with the layout */
            flex-direction: column; /* Stack elements vertically */
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 20px;
        }

        tr:hover {background-color: #D6EEEE;}

        .practical-header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin: 0;
            width: 100%;
            height: 100%;
            min-height: 100vh;
        }

        /* Sidebar (Shortcuts/Contents) */
        .sidebar {
            width: 20%;
            background-color: #f4f4f4;
            position: sticky;
            top: 0; /* Sticks at the top of the viewport */
            align-self: flex-start; /* Ensures sidebar stays at the top when scrolling */
            overflow-y: auto; 
            padding: 10px;
            height: 100vh;
            float:left;
        }
        .sidebar a {
            text-decoration: none; 
            color: #333;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #ddd;
            padding-left: 10px;
        }

        .sidebar h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #007BFF;
        }

        /* Main Content Section */
        #practical-content {
            flex-grow: 1;
            flex: 1; /* Takes the remaining space */
            padding: 20px;
            overflow-y: auto; /* Allows the main content to scroll */
            display: inline-block;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        /* Images styling */
        .image-container {
            text-align: left;
        }

        .anatomical-image {
            max-width: 100%;
            height: auto;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        .practical-header {
            position: sticky;
            top: 0;
            background-color: white; /* Ensures the logo background stays clean when sticky */
            z-index: 100; /* Ensures it stays above the rest of the content */
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Optional: Adds a bottom border to the header */}
        
            .styled-button {
            padding: 12px 24px; /* Larger padding for a bigger button */
            background-color: #E40D5E;
            color: white;
            border: black;
            border-radius: 8px; /* Larger border radius for a smoother look */
            cursor: pointer;
            font-size: 18px; /* Larger font size */
            transition: background-color 0.3s ease;
            margin-left: 20px; /* Adds space between the text and the button */
            justify-content: center; /* Centers both the text and the button */
            align-items: center;
            display: flex;
            width: 80%;
        }

        .styled-button:hover {
        background-color: #0e0d07; /* Darker color on hover */
        }

        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
}

    </style>
</head>
<body>
    <header class="practical-header">
        <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>

    <div class="container">
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#Sopa de fases">Sopa de fases</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
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

            <h2 id = "Sopa de fases">Sopa de fases</h2>
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
    <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

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