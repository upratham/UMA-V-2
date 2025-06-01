<?php
include '../header.php';
$practical_number = "B2";
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
                <li><a href="COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#PILARES DEL METEDO CIENTIFICO">Pilares del método científico</a></li>
                <li><a href="#CARATERISTICAS DEL METEDO CIENTIFICO">Características del método científico</a></li>
                <li><a href="#PASOS DEL METEDO CIENTIFICO">Pasos del método científico</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#DISCUSIONES">DISCUSIONES</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

       <!-- Main Content Section -->
       <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> PRÁCTICA N°2: EL MÉTODO CIENTÍFICO </h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Comprender la importancia del método científico en la investigación.</li>
                    <li>Analizar las etapas del método científico.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 2\1.jpg" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>El método científico es el proceso sistematizado que emplea la ciencia para generar un conocimiento científico. Implica una metodología, el diseño de técnicas de ensayo y verificación aceptadas por la comunidad científica como válidas, con el objetivo de obtener nuevos conocimientos</p>
                <p>En el método científico, si bien se inicia con la observación que será el origen de la pregunta, es solo a través de un proceso sistematizado u ordenado que se intentará dar respuesta para proponer una hipótesis que luego se deberá comprobar a través de la experimentación. Muchos de los descubrimientos que hoy conocemos partieron de una hipótesis que fue comprobada a través de este método.</p>

                <h3 id="PILARES DEL METEDO CIENTIFICO">2.1	Pilares del método científico </h3>
                <p><strong>El método científico está sustentado por dos pilares fundamentales:</strong></p>
                <ul>
                    <li>Reproducibilidad: implica la capacidad de repetir un determinado experimento las veces que sea necesario en cualquier lugar y por cualquier persona y los resultados deben ser constantes.</li>
                    <li>Refutabilidad: toda proposición científica tiene que ser susceptible de ser falsada o refutada (falsacionismo). Esto implica que, si se diseñan experimentos, y dan resultados distintos a los predichos, negarían la hipótesis puesta a prueba.</li>
                    
                </ul>

                <h3 id="CARATERISTICAS DEL METEDO CIENTIFICO">2.2	Características del método científico</h3>
                <ul>
                    <li>Sistemático, es decir, es riguroso. El investigador debe seguir el orden de todos los pasos del método, sin alterar ninguno de ellos.</li>
                    <li>Objetivo. Se basa en hechos concretos y comprobables, y no en deseos, creencias u opiniones. Es responsabilidad del científico u investigador mantener su visión subjetiva al margen de la investigación.</li>
                    <li>Progresivo. Los conocimientos que se obtienen son acumulativos. Pueden reafirmar o complementar las investigaciones y descubrimientos ya existentes, o incluso corregirlos.</li>
                    <li>Racional. Utiliza la razón para realizar deducciones y se basa en la lógica y no en opiniones o creencias.</li>
                    <li>Verificable. La hipótesis propuesta debe poder ser aplicada y comprobada empíricamente a través de la experimentación.</li>
                    
                </ul>

                <h3 id="PASOS DEL METEDO CIENTIFICO">2.3	Pasos del método científico</h3>
                <p>Consiste en seis pasos (Audesirk et al. 2008). La ciencia lo emplea para saber de forma objetiva cómo funciona el mundo que nos rodea. No nos garantiza una certeza absoluta, pero nos permite ir conociendo cada vez mejor el mundo.</p>
                <ol>
                   <li><strong>Observacion: </strong>consiste en observar la realidad y mediante la actividad sensorial, el hombre se da cuenta de fenómenos que se le presentan. En este primer paso se observan y registran los fenómenos de la realidad. Es importante tener en cuenta hechos objetivos y dejar de lado opiniones subjetivas o personales.</li>
                   <li><strong>Planteamiento del problema: </strong>Tras la observación realizada surge las interrogantes tratando de entender el problema. Esta pregunta, para lo cual aún no se encuentra una respuesta que permita explicar el fenómeno, debe ser formulado en términos adecuados. </li>
                   <li><strong>Hipótesis</strong>en esta etapa se trata dar una posible respuesta a la pregunta planteada. Esta hipótesis debe ser contrastada y comprobada científicamente por lo que exige una formulación elaborada.</li>
                   <li><strong>Experimentación: </strong>consiste en diseñar métodos o técnicas que permitan dar validez a la hipótesis. La hipótesis es examinada repetidas veces para establecer su regularidad.</li>
                   <li><strong>Evaluación de los resultados:  </strong>consiste en recoger la resultados y analizar los datos obtenidos. En esta etapa se confrontan los datos con la hipótesis.</li>
                   <li><strong>Conclusión o tesis: </strong>Si los datos avalan la hipótesis será confirmada. En caso contrario se concluirá que en las circunstancias contempladas la hipótesis no ha sido confirmada y/o se volverá a la segunda etapa proponiendo una nueva y coherente solución al problema. </li>
                    
                </ol>

                <p>Si la hipótesis no es refutada, ya que es comprobada en todos los casos, se elaboran conclusiones para dictar leyes y teorías científicas. Podemos añadir una etapa donde se permite, a partir de la generalización de los resultados, originar nuevas predicciones haciendo referencia a nuevos problemas que surgirían con los resultados obtenidos.</p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 2\2.jpg" alt="Fowler position" class="center">
                </div>

                <h3 id="MATERIALES Y MÉTODOS">III.	MATERIALES Y MÉTODOS</h3>
                <p><strong>ACTIVIDAD EN CLASE</strong></p>
                <p>Lea el siguiente artículo científico sobre la infección del provocada por el COVID-19, y complete las siguientes preguntas relacionadas al método científico.</p>

                <p>Hasta ahora se sabía que el nuevo coronavirus usa una proteína en forma de aguja que encaja en la ACE2 como una llave en una cerradura. Esta unión abre literalmente la puerta de la célula humana para que el virus introduzca en ella su material genético. La maquinaria celular humana confunde ese material —ARN viral— con ARN propio, y empieza a seguir las instrucciones que contiene para fabricar proteínas virales. En cuestión de horas hay millones de copias de ARN viral a partir de las cuales se ensamblan copias del virus que revientan la célula y se lanzan a infectar otras.
                    Hasta ahora no se había descrito al completo la estructura de esta proteína humana. Y eso es una sorpresa. Los virus llevan miles de años evolucionando junto a nosotros y suelen elegir vías de entrada en la célula que son difíciles de cerrar o eliminar, pues sin ellas esa persona moriría. La proteína ACE2 tiene un papel fundamental en la producción de angiotensina, una molécula que controla la presión sanguínea. Esta proteína se expresa en los pulmones, el corazón, los riñones y los intestinos, y su falta provoca enfermedades cardiovasculares. De esta forma el virus se asegura que su puerta siempre va a estar ahí.
                    El equipo de científicos chinos que firma el trabajo, del Instituto de Estudios Avanzados Westlake, en Hangzhou, y la Universidad Tsinghua de Pekín, han sido los primeros en describir la forma exacta de esta proteína humana. Los resultados alcanzan un nivel de detalle en algunas zonas que equivalen a 0,00000000035 metros. A este trabajo se le suma otro publicado el pasado febrero por un equipo estadounidense que aportaba un retrato equiparable de la proteína S, la llave viral que encaja en la ACE2. Juntos, estos dos trabajos aportan la descripción más detallada a nivel molecular del primer paso de una infección y muestran la forma de desarrollar anticuerpos que se puedan unir bien a la proteína S del virus, bien a la proteína ACE2 de las células humanas y bloquear así la infección.
                    “Este tipo de trabajos tiene mucho potencial para diseñar formas de que el virus no entre en las células”, explica Isabel Sola, experta en coronavirus del Centro Nacional de Biotecnología (CNB-CSIC). “En este caso no estaríamos hablando de vacunas, sino de anticuerpos terapéuticos antivirales. Este tipo de moléculas no sirven tanto para inmunizar a gente sana, para eso están las vacunas, sino para curar a las personas que ya se han infectado. Es un tipo de compuestos que ya se han desarrollado para otro coronavirus, el MERS”, detalla la investigadora.
                    En cualquier caso, se trata de un proceso lento que puede llevar meses o años hasta que pueda usarse en humanos. El siguiente paso, explica Sola, sería observar virus vivos o réplicas atenuadas del mismo actuando directamente sobre células humanas para estudiar sus propiedades funcionales.
                    El trabajo no solo arroja luz en la comprensión del proceso infeccioso. También facilita el desarrollo de nuevas técnicas de detección del virus y posibles compuestos terapéuticos antivirales
                    El trabajo describe varias mutaciones —cambios en la secuencia de unidades que conforman las proteínas del virus— que aumentan la capacidad y la fuerza con la que el virus se une a las células humanas y otras que la disminuyen, un conocimiento básico para comprender la naturaleza del nuevo virus y cómo se compara a otros similares, como el SARS.
                    La proteína ACE2 también ayuda a producir otra molécula esencial para las células del intestino y los investigadores sugieren que esa molécula también podría funcionar como un tapón que impida que el nuevo virus SARS-CoV-2 pueda anclarse a las células humanas y comenzar una infección.                    
                    </p>
                
                <p>INDIQUE A QUÉ PASO DEL MÉTODO CIENTÍFICO CORRESPONDE CADA PÁRRAFO</p>
                <ol>
                    <li>“... Un equipo de científicos chinos acaba de publicar la descripción más detallada de la puerta de entrada del coronavirus a las células humanas... la proteína de membrana ACE2, la cual es fundamental para que el nuevo coronavirus puede causar una infección." ____________________________________________ (3pt)</li>
                    <li>'Investigaciones en virus han mostrado que estos llevan miles de años evolucionando junto a nosotros y suelen elegir vías de entrada en la célula que son difíciles de cerrar o eliminar". Entre las vías de entrada encontramos a las proteínas de membrana como la ACE2. ______________________________________ (3pt)</li>
                    <li>Los científicos presumen que la proteína ACE2 tiene un papel fundamental en la producción de angiotensina, una molécula que controla la presión sanguínea. Esta proteína se expresa en los pulmones, el corazón, los riñones y los intestinos, y su falta provoca enfermedades cardiovasculares. _________________________(3pt)</li>
                    <li>¿Qué pasos del método científico no se mencionan en los párrafos anteriores? ______________________________________________________________ (1pt)</li>
                </ol>

                <h3 id="RESULTADOS">IV.	RESULTADOS</h3>
                <p>Con su equipo realice los pasos del método científico para un ejemplo en específico.</p>

                <h3 id="DISCUSIONES">V.	DISCUSIONES</h3>
                <p>Discuta con su equipo la importancia y las ventajas del método científico</p>
                 
        
                <h3 id="REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h3>
                <ul>
                    <li>Organización Mundial de la Salud. 2006. MANUAL DE BIOSEGURIDAD EN EL LABORATORIO. Tercera edición. ISBN 9243546503, 9789243546506</li>
                    <li>Página web del artículo: https://elpais.com/ciencia/2020-03-04/cientificos-chinosdesvelan-la-puerta-de-entrada-del-coronavirus-a-las-celulas-humanas.html</li>
                </ul>

    </div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>
  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_3.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_1.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/biology/Biologia.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>