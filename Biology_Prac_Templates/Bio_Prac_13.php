<?php
include '../header.php';
$practical_number = "B13"
?><!DOCTYPE html>
<html lang="en">
<head>
     
    
    <!-- End of Profile Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°13: LA LEYES DE MENDEL.</title>
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
                <li><a href="#EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA PRÁCTICA N°13: LA LEYES DE MENDEL.</h1>

                <h2 id="INTRODUCCIÓN">I. INTRODUCCIÓN</h2>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 13\1.png" alt="Fowler position" class="center">
                </div>

                <p>Estas leyes se basan en los descubrimientos que realizó Gregor Mendel entre los años de 1856 y 1863, donde cultivó y analizó la herencia de 7 características en 28 000 plantas de <i>Pisum sativum</i>. Publicó sus conclusiones en un artículo titulado <i>"Experimentos sobre hibridación de plantas"</i> en 1965, permitiendo de esta forma establecer las proporciones en las que se heredan ciertas características de los individuos y que pueden resumirse en tres leyes:</p>

    <h2>PRIMERA LEY O LEY DE LA UNIFORMIDAD DE LA PRIMERA GENERACIÓN</h2>
    <p>Cuando se realiza el cruzamiento entre dos individuos de la misma especie pertenecientes a dos variedades o líneas puras (homocigóticos), todos los heterocigotos de la primera generación filial (F<sub>1</sub>) son iguales.</p>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 13\2.png" alt="Fowler position" class="center">
    </div>
    <br>
    <ul>
        <li>Resultados del genotipo de la F<sub>1</sub>: 4/4 o 100% son heterocigotos (Aa).</li>
        <li>Resultados del fenotipo de la F<sub>1</sub>: 4/4 o 100% son de característica dominante.</li>
    </ul>

    <h2>SEGUNDA LEY DE MENDEL O LEY DE LA SEPARACIÓN O DISYUNCIÓN DE LOS GENES</h2>
    <p>En esta ley, los dos alelos que formaron pareja en la F<sub>1</sub>, se separan nuevamente al formar sus células reproductoras. Esto conduce a que en los individuos de la F<sub>2</sub> aparezcan parejas de alelos distintos de los de la F<sub>1</sub>. En consecuencia, dicha generación ya no es de genotipo uniforme.</p>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 13\3.png" alt="Fowler position" class="center">
    </div>
    <br>
    <ul>
        <li>Resultados del genotipo de la F<sub>2</sub>:
            <ul>
                <li>¼ son homocigotos dominantes (AA).</li>
                <li>½ son heterocigotos (Aa).</li>
                <li>¼ son homocigotos recesivos (aa).</li>
            </ul>
        </li>
        <li>Resultados del fenotipo de la F<sub>2</sub>:
            <ul>
                <li>¾ característica dominante.</li>
                <li>¼ característica recesiva (aa).</li>
            </ul>
        </li>
    </ul>

    <h2>TERCERA LEY DE MENDEL O LEY DE LA TRANSMISIÓN INDEPENDIENTE DE CARACTERES</h2>
    <p>
        Mediante la tercera ley, Mendel concluyó que diferentes rasgos son heredados independientemente unos de otros, no existiendo relación entre ellos. Por tanto, el patrón de herencia de un rasgo no afectará al patrón de herencia de otro. Sólo se cumple en aquellos genes que no están ligados (en diferentes cromosomas) o que están en regiones muy separadas del mismo cromosoma.
    </p>
    <ul>
        <li>
            <b>Resultados del genotipo y fenotipo de la F<sub>1</sub>:</b>
            <ul>
                <li>✔ 100% son heterocigotos (AaBb).</li>
                <li>✔ 100% presentan las características dominantes para cada gen. (A_B_)</li>
            </ul>
        </li>
    </ul>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 13\4.png" alt="Fowler position" class="center">
    </div>

    <h3>Resultados del genotipo y fenotipo de la F<sub>2</sub>:</h3>
    <ul>
        <li>
            <b>Resultados del genotipo de la F<sub>2</sub>:</b>
            <ul>
                <li>1/16 AABB, 2/16 AABb, 1/16 AAbb</li>
                <li>2/16 AaBB, 4/16 AaBb, 2/16 Aabb</li>
                <li>1/16 aaBB, 2/16 aaBb, 1/16 aabb</li>
            </ul>
        </li>
        <li>
            <b>Resultados del fenotipo de la F<sub>2</sub>:</b>
            <ul>
                <li>9/16 Tienen las dos características dominantes de A y B. (A_B_)</li>
                <li>3/16 Tienen la característica dominante de A y la recesiva de B (A_bb)</li>
                <li>3/16 Tienen la característica recesiva de A y la dominante de B (aaB_)</li>
                <li>1/16 Tienen la característica recesiva de A y B (aabb)</li>
            </ul>
        </li>
    </ul>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 13\5.png" alt="Fowler position" class="center">
    </div>

    <h2>1. Identificar las leyes de Mendel a través de ejercicios de aplicación</h2>
    <h3 id = "EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</h3>
    <p>
        Resolver 05 ejercicios de forma personal, los ejercicios serán designados por el docente (4 puntos por pregunta).
    </p>
    <ol>
        <li>
            Los cormoranes, son aves grandes de color negro que habitan humedales como Los Pantanos de Villa; la combinación de dos alelos recesivos hace que los cascarones de sus huevos sean muy frágiles, lo que hace que ninguna cría sobreviva. Si toda la población de Pantanos de Villa presenta cormoranes heterocigotos (Hh). ¿Cuál será la proporción de crías sobrevivientes de una pareja de cormoranes de los pantanos de villa?
        </li>
        <br>
        <li>
            En los “patos colorados” de los humedales costeros, el pelaje cobrizo domina sobre el color claro. La coloración beneficia a los individuos dado que ofrece la capacidad de camuflaje entre las raíces de totora; los individuos color claro son fácilmente cazados en los primeros meses de vida. ¿Si se cruzan dos individuos heterocigotos, qué porcentaje de la población estará más propensa a ser cazada por los depredadores?
        </li>
        <li>
            Un ratón silvestre de los humedales de Puerto viejo, presentan dos tipos de color de ojos, el color bermellón (B), y el de color blanco (b) que es muy raro, se cruza una hembra cuyo color de ojos es bermellón con un macho de ojos blancos. Del cruce la progenie fue ½ ojos bermellón y ½ ojos blancos ¿Cuál es el genotipo de los progenitores y de la F1?
        </li>
        <br>
        <li>
            Si una planta homocigótica de tallo alto se cruza con una homocigótica de tallo enano, sabiendo que el tallo alto es dominante (A) sobre el tallo enano (a), ¿Cómo serán los genotipos y fenotipos de la F1 y de la F2?
        </li>
        <br>
        <li>
            En el caballo peruano de paso el color alazán de la crin domina sobre el color pimienta. Una pareja cuya crin es alazán tuvo un potrillo cuya crin es de color pimienta. ¿Cuál es el genotipo de los progenitores? Sustente su respuesta.
        </li>
        <br>
        <li>
            Una mariposa de alas grises se cruza con una de alas negras, obteniéndose en la progenie 50% de mariposas alas negras y un 50% de mariposas con alas grises. ¿Cuál es el genotipo de los padres? Sustente su respuesta.
        </li>
        <br>
        <li>
            Si la quijada partida es dominante sobre la quijada normal ¿Qué proporción de la F1 presentarán quijada partida? De un matrimonio entre un hombre partido y una mujer de quijada partida si ambos tienen hermanos de quijada normal.
        </li>
        <br>
        <li>
            Un caimán de escamas blancas, cuyos padres son de escamas oscuras, se cruza con otro de escamas oscuras, cuyos padres son; uno de escamas oscura y el otro de escamas blancas. ¿Cómo serán los genotipos de los caimanes que se cruzan y de su descendencia?
        </li>
        <br>
        <li>
            Un perro cuyo color de lengua es morado, su padre tenía la lengua rosada, se cruza con otro de lengua rosada, cuya madre tiene la lengua morada. Sabiendo que el color morado domina sobre el rosado. ¿Cuál es el genotipo de la F1, F2 y de los progenitores?
        </li>
        <br>
        <li>
            En la especie bovina el color de cuernos hueso domina sobre el color marfil, ¿Qué porcentaje de vacas con cuernos color marfil saldrán de un cruzamiento de un toro y una vaca, ambos con cuernos color hueso?
        </li>
    </ol>
    <p><b>Resuelve aquí los 05 ejercicios designados por el docente.</b></p>
    <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

    <h2 id = "REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
    <ul style="list-style-type: disc; padding-left: 20px;">
        <li>Las Leyes de Mendel: Primera, segunda y tercera ley. (2019). Recuperado de <a href="https://leyesdemendel.com" target="_blank">https://leyesdemendel.com</a></li>
        <li>Leyes de Mendel. (junio, 2010). Mendel.es. Recuperado de <a href="http://www.mendel.es/leyes-de-mendel" target="_blank">http://www.mendel.es/leyes-de-mendel</a></li>
    </ul>

    <h2>LISTA DE COTEJO: LEYES DE MENDEL</h2>
    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th style="width: 60%;">CRITERIOS</th>
                <th style="width: 10%;">LOGRADO</th>
                <th style="width: 10%;">NO LOGRADO</th>
                <th style="width: 20%;">PUNTAJE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Determina correctamente lo solicitado en el problema de genética #1, coloca las operaciones y cálculos.</td>
                <td>4</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Determina correctamente lo solicitado en el problema de genética #2, coloca las operaciones y cálculos.</td>
                <td>4</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Determina correctamente lo solicitado en el problema de genética #3, coloca las operaciones y cálculos.</td>
                <td>4</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Determina correctamente lo solicitado en el problema de genética #4, coloca las operaciones y cálculos.</td>
                <td>4</td>
                <td>0</td>
                <td></td>
            </tr>
            <tr>
                <td>Determina correctamente lo solicitado en el problema de genética #5, coloca las operaciones y cálculos.</td>
                <td>4</td>
                <td>0</td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: right; font-weight: bold;">TOTAL</td>
                <td colspan="3"></td>
            </tr>
        </tfoot>
    </table>