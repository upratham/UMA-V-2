<?php
include('../header.php');
$practical_number = "B1";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 03: Key Operations</title>
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
        Teoría
    </button>

    <button class="tab-button active" onclick="openTab('Video')">
        <img src="logo video.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Video
    </button>

    <button class="tab-button active" onclick="window.location.href='https://chem-sim-wnth.vercel.app/experiment1';">
    <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
    Simulación
</button>

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
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#PRINCIPIOS TEÓRICOS">PRINCIPIOS TEÓRICOS</a></li>
                <li><a href="#PARTE EXPERIMENTAL"> PARTE EXPERIMENTAL"</a></li>
                <li><a href="#REFERENCIA">REFERENCIA</a></li>
            </ul>
        </nav>

         <!-- Main Content Section -->
         <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> Práctica 3 de Química: Operaciones clave</h1>
                <h2 id="OBJETIVOS">1. OBJETIVOS</h2>
                <ul>
                    <li>Reconocer e identificar los principales materiales en el laboratorio.</li>
                    <li>Identificar las operaciones básicas que se realizan en el laboratorio.</li>
                    <li>Realizar la separación en mezcla heterogénea y en mezcla homogénea.</li>
                    <li>Determine el porcentaje de error experimental.</li>
                </ul>
                
                <h2 id="II.	PRINCIPIOS TEÓRICOS">2. II.	PRINCIPIOS TEÓRICOS</h2>
                <strong>Principales operaciones básicas del laboratorio</strong>
                <p>En la naturaleza y en preparados elaborados en el laboratorio se encuentran
                    Obtienen mezclas de sustancias. Por lo tanto, las principales operaciones básicas de laboratorio. 
                   están definidos.</p>
                <ul>
                    1.<strong>Pesado:</strong>Es una operación que consiste en determinar el valor exacto de la masa de un 
                    sustancia, para lo cual se utilizan básculas de diferentes modelos y tipos. Su unidad de 
                    La medida es el kilogramo (kg).</li><br>
                    2.<strong>Spray:</strong>Esta operación se utiliza para reducir el tamaño de algunos cuerpos sólidos relativamente grandes. 
                    Las sustancias que se van a someter a reacción deben pulverizarse, haciéndolas así 
                    más fácilmente disponibles para la acción de los reactivos. A nivel de laboratorio, morteros 
                    se utilizan.</li><br>
                    3.<Strong>Precipitación:</Strong>:La precipitación es un proceso de obtención de un sólido a partir de una solución. puede ser 
                    llevado a cabo por una reacción química, por evaporación del disolvente, por enfriamiento repentino de 
                    una solución caliente, etc. El sólido obtenido mediante estos procedimientos se llama precipitado.</li><br>
                    4.<strong>Decantación:</strong>Consiste en separar las impurezas solubles de un sólido o separar sólidos 
                    que han precipitado en una solución y que, por acción de la gravedad, tienden a sedimentarse 
                    en el fondo del contenedor.</li><br>
                    5.<strong>Filtration :</strong>Filtration is the unitary process of separating suspended solids in a liquid, 
                    using a porous medium that retains the solids and allows the passage of the liquid.</li><br>
                    6.<strong>Centrifugation :</strong>The test tube with the sample is placed in the centrifuge, it is turned on 
                    and the tubes are rotated, which gives the mixture a force greater than that of gravity 
                    where the solids are pushed to the bottom, forming two phases (solid-liquid).</li><br>
                    7.<strong>Evaporation to dryness :</strong>It consists of passing a substance from the liquid state to 
                    vapor; it can be done at room temperature or at higher temperatures. It is generally used for the purpose of concentrating a solution.</li><br>
                    8.<strong>Recristalización:</strong>: Un compuesto que es sólido a temperatura ambiente comúnmente se aísla y 
                    purificada por cristalización, que consiste en preparar una solución saturada a mayor 
                    temperatura. Cuando la solución se enfría, la sustancia se separa en forma cristalina, luego 
                    el soluto cristalizado se separa de la solución madre.</li><br>
                    9.<Strong>Secado y calcinación:</Strong>Son operaciones que consisten en eliminar la humedad 
                    Contenido de los precipitados obtenidos al filtrar una mezcla, mediante la acción de un calor. 
                    fuente, como hornos, estufas, muflas, etc.</li><br>
                    Secado: Cuando T (°C) < 250 °C y se realiza en hornos eléctricos.</li><br>
                    Calcinación: Cuando la T (°C) está entre (250-1200 °C) y se realiza en hornos de mufla.</li><br>
                    10.<strong>Destilación:</strong>La transición de una sustancia de un estado líquido a un estado de vapor. 
                    (provocado por el calentamiento de la sustancia) y luego a un segundo estado (provocado por el enfriamiento). Es 
                    basado en la diferencia en el punto de ebullición de las sustancias a separar. El 
                    Los tipos de destilación más conocidos son:</li><br>
                     1. Destilación simple</li><br>
                     2. Destilación fraccionada.</li><br>
                </ul>

                <h2 id="Porcentaje de error experimental"> 3. Porcentaje de error experimental</h2>
                <p><strong>Las normas básicas que se deben seguir en el laboratorio de Química Orgánica son:</strong></p>
                <ul>
                    
                    <p><fuerte>1. Seguridad Básica:</strong> Las normas básicas que se deben seguir en el laboratorio de Química Orgánica son:</p>
                    <p>
                        1]<strong>Error:</strong>Es la diferencia que existe entre el valor obtenido o medido durante la práctica y el
                        valor verdadero o real. Hay dos tipos de errores:<br>
                        2]<strong>Error absoluto (Eabs.):</strong>Es la diferencia entre el valor medido (Vm), y el valor real.
                        (Vr), puede deberse a exceso (error positivo) o defecto (error negativo).<br>
                        3]<strong>Error relativo (Er):</strong>Es el cociente que se obtiene al dividir el error absoluto (Eabs), por el valor
                        verdadero (VR). Si este resultado se multiplica * 100% se expresa como porcentaje y se llama 
                        error porcentual. El % de error es una magnitud adimensional.<br>
                    </p>
                    
                    <h2 id="PARTE EXPERIMENTAL"> 4. PARTE EXPERIMENTAL</h2>
                    <li><strong> a) Materiales, equipos, reactivos: </strong>
                    <li>Materiales</li>
                    <P><ul>
                        - 10 Vasos (150 ml - 100 ml).<br>
                        - 5 tubos de ensayo de 10 ml.<br>
                        - 5 Embudos de tallo corto.<br>
                        - 5 Abrazadera para vasos.<br>
                        - 5 Cápsulas de porcelana.<br>
                        - 5 baguettes.<br>
                        - 5 Rejillas metálicas.<br>
                        - 5 portamuestras.<br>
                        - 5 Pisetas.<br>
                        - 5 soportes universales.<br>
                        - 5 Aros con clip.<br>
                    </P></ul>

                    <li>Equipos</li>
                    <P><ul>
                        - 5 Plancha Eléctrica.<br>
                        - 2 Balanzas electrónicas.<br>
                        - 2 Cocinas eléctricas.<br>
                    </P></ul>
                    <ul></ul>
                    
                    <li>Reactivos</li>
                    <P><ul>
                        - Sal 15 g.<br>
                        - Arena fina 15 g.<br>
                        - Agua destilada 15g.<br>
                    </P></ul>

                    <strong>b) Procedimiento:</strong>
                    <strong> 1. Preparación de una mezcla heterogénea de Arena y Sal:</strong><br>
                    <P><ul>
                    

                    </P></ul>

    
                <h2 id="REFERENCIA">REFERENCIA</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac_9.mp4" type="video/mp4">
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_4.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_2.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>