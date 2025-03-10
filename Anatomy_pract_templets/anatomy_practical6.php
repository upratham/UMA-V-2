<?php
include '../header.php';
$practical_number = "A1"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6 : ESTRUCTURAS DEL SISTEMA NERVIOSO CENTRAL</title>
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
            position: fixed;
            top: 1; /* Sticks at the top of the viewport */
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
            margin-left: 350px;
            margin-right: 50px;
        }

        h1 {
            font-size: 24px;
            text-align: center
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
            text-align: center;
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
            <h3>Encantado</h3>
            <ul>
                <li><a href="#SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#SISTEMA REPRODUCTOR">SISTEMA REPRODUCTOR</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA N° 6:<br>ESTRUCTURAS DEL SISTEMA NERVIOSO CENTRAL</h1><br>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del snc y sus principales relaciones
                        y aplicaciones.</li>
                    <li>Identificar sus principales relaciones y aplicaciones.</li>
                </ul>
                <p>El principal mecanismo de información en el cuerpo lo constituye un sistema de neuronas 
                    que se comunican unas con otras y para propósitos puramente didácticos, dividimos este 
                    sistema en un Sistema Nervioso Central (SNC) formado por el cerebro y la médula espinal, 
                    y en un Sistema Nervioso Periférico (SNP) que une el sistema nervioso central con los 
                    receptores sensoriales, que reciben información proveniente del medio externo e interno, y 
                    con los músculos y glándulas que son los efectores de las decisiones del SNC. Esta 
                    información es llevada por axones motores y sensoriales del SNP en haces de cables 
                    eléctricos que conocemos como nervios; por ejemplo, la información que recibe cada ojo 
                    es llevada al cerebro en los millones de axones que forman el nervio óptico.</p>

                <p>La información dentro del sistema nervioso es manejada por tres tipos de neuronas. 
                    Las neuronas sensoriales, que mandan información desde los tejidos del cuerpo y los 
                    órganos sensoriales hacia la médula espinal. Cuando el cerebro procesa esa información 
                    involucra una segunda clase de neuronas, las interneuronas, que forman su sistema de 
                    comunicación interna. Como resultado de ese procesamiento, el sistema nervioso central 
                    manda instrucciones hacia los tejidos del cuerpo por medio del tercer tipo de neuronas, las 
                    motoneuronas. Como hay unos pocos millones de neuronas sensoriales, algunos millones 
                    más de neuronas motoras, y miles y miles de millones de interneuronas, es claro que la 
                    mayor parte de la complejidad de nuestro organismo se basa en los sistemas de 
                    interneuronas.
                    </p>

                <div class="image-container">
                    <img src="Anatomy images\Practical 6\1.jpg" alt="1" class="1">
                </div><br><br>
                <p>El <strong>cerebro y la médula espinal</strong> forman el sistema nervioso central (SNC), ambos están 
                    protegidos por el cráneo o el canal espinal y están rodeados por otra capa protectora: 
                    el líquido cefalorraquídeo. Las tareas del SNC son múltiples:
                    </p>
                <ul>
                    <li></li>Integra estímulos que afectan al organismo humano desde afuera o adentro.</li>
                    <li>Coordina todos los procesos motores.</li>
                    <li>Coordina todos los sistemas.</li>
                    <li>Entre otras funciones aún no comprendidas hoy en día.
                    </li>
                </ul>
                <p>El<strong> cerebro</strong> es un órgano que se encuentra en el cráneo y que consta de miles de 
                    millones de células nerviosas, que entre otras cosas genera conciencia y habilidades 
                    cognitivas.</p>
                <p>Externamente, el cerebro consta de dos hemisferios, que están divididos por surcos en 
                    cada uno se encuentran cuatros lóbulos cerebrales, los cuales se encargan de realizar 
                    procesamientos y funciones distintas:</p>
                
                <ul>
                    <li><strong>Lóbulo Frontal:</strong> área del habla motora encontrándose aquí el área de 
                        Broca.En esta área se maneja el control motor voluntario de músculos 
                        esqueléticos, personalidad, procesos intelectuales superiores y 
                        comunicación verbal.</li>
                    <li><strong>Lóbulo Occipital:</strong> área encargada de tareas visuales, interpreta los 
                        movimientos en el enfoque de los ojos, correlación de imágenes 
                        visuales con experiencia visuales previas entre otros estímulos 
                        captados visualmente.</li>
                    <li><strong>Lóbulo Parietal:</strong> interpretación somatoestésica, entendimiento del 
                        habla y formulación de palabras para expresar pensamientos y 
                        emociones, interpretación de texturas y formas.</li>
                    <li><strong>Lóbulo Temporal:</strong> área de interpretación de sensaciones auditivas, 
                        memoria de experiencias auditivas y visuales memoria de experiencias 
                        auditivas y visuales.</li>
                </ul>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\2.jpg" alt="2" class="2">
                </div><br><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\3.jpg" alt="3" class="3">
                </div><br><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 6\4.jpg" alt="4" class="4">
                </div><br><br>
                
                <h4 id="Cuestionario">Cuestionario</h4>
                
                <div>
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div><br><br>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
