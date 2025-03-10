<?php
include '../header.php';
$practical_number = "B11"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
   
    <!-- End of Profile Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°11 EL CICLO CELULAR: MITOSIS .</title>
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
                <li><a href="#División Celular">División Celular</a></li>
                <li><a href="#Competencias">Competencias</a></li>
                <li><a href="#Actividad">Actividad</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
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
