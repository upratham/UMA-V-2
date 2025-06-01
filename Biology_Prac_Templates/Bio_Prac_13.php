<?php
include '../header.php';
$practical_number = "B13";
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
                <li><a href="#EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
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
</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac13.mp4" type="video/mp4">
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_12.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/biology/Biologia.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
