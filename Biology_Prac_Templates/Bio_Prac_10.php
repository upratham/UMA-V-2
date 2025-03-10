<?php
include '../header.php';
$practical_number = "B10"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    
    <!-- End of Profile Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°10: LA RESPIRACIÓN CELULAR: INHIBICIÓN DE LA GLUCÓLISIS </title>
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
                <li><a href="#Procedimiento">Procedimiento</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#Referencias">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
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
                    <thead>
                        <tr>
                            <th>Contenido/ N° de tubo pequeño</th>
                            <th>Suspensión de levadura</th>
                            <th>NaF 0.01 M</th>
                            <th>NaF 0.05 M</th>
                            <th>NaF 0.10 M</th>
                            <th>Agua destilada</th>
                            <th>Solución de Glucosa</th>
                        </tr>
                    </thead>
                    <tbody>
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
        </tbody>
    </table>