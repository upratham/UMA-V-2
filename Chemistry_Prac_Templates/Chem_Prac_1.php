<?php
include '../header.php';
$practical_number = "C1"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de química 1: Reglas de seguridad en el laboratorio</title>
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
            <h3>Contenido</h3>
            <ul>
                <li><a href="#Objetivos">Objetivos</a></li>
                <li><a href="#Base teórica">Base teórica</a></li>
                <li><a href="#Normas">Normas</a></li>
                <li><a href="#Símbolos">Símbolos de peligro químico</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#Referencia">Referencia</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            Práctica de química 1: Reglas de seguridad en el laboratorio</h1>
                <h2 id="Objetivos">1. Objetivos</h2>
                <ul>
                    <li>Conozca y Aprenda las Normas de Seguridad del Laboratorio de Química Orgánica.</li>
                    <li>Reconocer la importancia de estas normas, que harán más seguro el trabajo en el Laboratorio.</li>
                    <li>Conozca las principales causas de incendios y explosiones.</li>
                    <li>Conocer los principios de los primeros auxilios.</li>
                </ul>
                
                <h2 id="Base teórica">2. Base teórica</h2>
                <p>El Laboratorio de Química Orgánica es una instalación donde se manipulan sustancias que pueden resultar muy nocivas para el cuerpo humano, por lo que los estudiantes deben ser conscientes y respetar los peligros que les acechan en sus actividades dentro del mismo y tomar las mayores precauciones posibles.</p>
                <p> También es importante conocer los daños que estas sustancias, si se eliminan mal, pueden causar a sus pares y al ecosistema.</p>
                <p> Los estudiantes de la carrera de Farmacia y Bioquímica deben conocer e interpretar adecuadamente las normas de seguridad a las que deben ajustar su comportamiento dentro del laboratorio, lo que ayudará a preservar su salud e integridad física, así como a desarrollar las capacidades críticas. 
                    sentido necesario para afrontar aquellas situaciones imprevistas que no están contempladas en estos regulaciones.</p>

                <h2 id="Normas">3. Normas</h2>
                <p><strong>Las reglas básicas que se deben seguir en el laboratorio de Química Orgánica son:</strong></p>
                <ul>
                    
                    <p><strong>1. Seguridad Básica:</strong> Las reglas básicas que se deben seguir en el laboratorio de Química Orgánica son:</p>
                    <p>
                        1] Utilizar delantal en el Laboratorio de manera obligatoria<br>
                        2] Mantener la mesa de trabajo limpia y libre de objetos innecesarios<br>
                        3] Revisar y leer las instrucciones en la etiqueta de cada reactivo, propiedades físicas, químicas y toxicológicas de las sustancias a utilizar.<br>
                        4] Utilice equipo de laboratorio limpio y seco.<br>
                        5] No trabajes solo en el Laboratorio.<br>
                        6] No coma ni juegue dentro del laboratorio.<br>
                        7] No pipetee reactivos líquidos con la boca.<br>
                        8] No pruebes ningún producto a menos que sea estrictamente necesario.<br>
                        9] No oler ninguna sustancia directamente y si es necesario oler, pasar la mano sobre la sustancia para percibir su aroma sin peligro.<br>
                       10] Los reactivos químicos nunca deben tocarse directamente con las manos, especialmente aquellos que pueden causar quemaduras graves Deben manipularse con espátulas.<br>
                       11] No devuelva los reactivos no utilizados al contenedor original.<br>
                       12] No pierda de vista el sistema y los reactivos con los que está trabajando.<br>
                       13] Cualquier compuesto volátil o cualquier compuesto que desprenda vapores tóxicos debe manipularse en campanas o permanecer en un área ventilada.<br>
                       14] Si se derrama ácido sobre la mesa, se debe recoger y lavar con abundante agua.<br>
                       15] Las soluciones ácidas y alcalinas deben neutralizarse antes de descargarse al desagüe.<br>
                       16] Manipule el equipo caliente con guantes o pinzas de amianto para evitar quemaduras.<br>
                       17] Antes de calentar líquidos, deben estar bien mezclados ya que pueden salpicar o explotar.<br>
                       18] En una destilación, los condensadores y los tubos de evacuación no deben estar obstruidos.<br>
                       19] Lávese bien las manos al final de cada sesión de laboratorio.<br>
                    </p>
                    

                    <p><strong>Incendios: </strong>Pueden producirse incendios en el trabajo de laboratorio debido a:</p>
                    <p>
                        1] Tener un reactivo químico cerca de una fuente de calor o chispa<br>
                        2] Calentar o hervir un solvente volátil o inflamable con un encendedor y sin condensador.<br>
                        3] Vapores o gases inflamables que se producen al mezclar sustancias que reaccionan entre sí.<br>
                        4] Malas condiciones de almacenamiento para reactivos inestables o volátiles o que puedan reaccionar violentamente con la temperatura, agua, ácidos, álcalis, agentes oxidantes, reductores o compuestos de elementos pesados.<br>
                        5] Desconocer la temperatura de ignición espontánea de las sustancias.<br>
                    </p>

                    <p><strong>Explosiones:</strong> Muchas explosiones pueden ocurrir en las siguientes situaciones:</p>
                    <p>
                        1] Una reacción exotérmica incontrolable.<br>
                        2] Una explosión de residuos de peróxido al concentrar soluciones de éter hasta sequedad<br>
                        3] Por calentamiento, secado, destilación o impacto de compuestos inestables.<br>
                        4] Al mezclar sustancias que generen vapores inflamables o explosivos.<br>
                        5] Por desconocer las condiciones de almacenamiento y uso de cada sustancia.<br>
                    </p>

                    <p><strong>First Aid:</strong>  In the event of an accidental accident, the following rules must be followed.</p>
                    <p>
                        1] En caso de contacto del ácido con la piel, lavar inmediatamente la zona afectada con abundante agua y aplicar una solución de bicarbonato de sodio.<br>
                        2] Si se produce contacto con los ojos, lavar con abundante agua.<br>
                        3] Cuando se ingiere un ácido fuerte, se puede neutralizar con hidróxido de aluminio (antiácido).<br>
                        4] Cuando se ingiere un álcali, se neutraliza con jugo de naranja, limón o uva o con vinagre.<br>
                        5] Cuando se ha ingerido una sustancia venenosa o tóxica y es necesario inducir el vómito, se debe utilizar un emético (agua salada, agua jabonosa). Luego se debe administrar un emoliente (no se debe inducir el vómito si la sustancia ingerida es corrosiva).<br>
                        6] Debes tener un botiquín de primeros auxilios con todo lo necesario.
                    </p>
                </ul>
                
                <h2 id="Símbolos">4. Símbolos de peligro químico</h2>
                <li>Los <strong>símbolos de peligro químico.</strong>Son unos <strong>pictogramas</strong> que se imprimen en las etiquetas de los productos químicos y que sirven para proporcionar una percepción instantánea del tipo de 
                    peligro involucrado en el uso, manipulación, transporte y almacenamiento de estos productos. </li>
                    
                    <li> Los símbolos de peligro están estandarizados en la Unión Europea de acuerdo con el Anexo II de Directiva 67/548/CEE.</li>
                    <li>Los símbolos son negros y están impresos en cuadrados naranjas. Las dimensiones mínimas del estos últimos son de 10 mm × 10 mm (o al menos el 10% de la superficie total de la etiqueta).</li>
    
                <h2 id="Cuestionario">5. Cuestionario</h2>
                <<form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                <ol>
                    <li>¿A su criterio que normas de seguridad se deben tomar en cuenta en el laboratorio?</li>
                    <li>¿Que cuidado se debe tener antes de manipular una sustancia?</li>
                    <li>Señale 3 posibles causas por las que se puede producir un incendio</li>
                    <li>Si un compañero a ingerido una sustancia corrosiva o irritante se le debe provocar el vomito? ¿Por qué?</li>
                    <li>¿Qué es un antídoto, un emético, y un emoliente?</li>
                    <li>indique tres ejemplos diferentes a los vistos en la guía sobre símbolos de peligrosidad.</li>
                    
                </ol>
    
                <h2 id="Referencia">Referencia</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
