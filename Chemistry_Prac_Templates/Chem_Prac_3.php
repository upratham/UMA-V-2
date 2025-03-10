<?php
include '../header.php';
$practical_number = "C3"
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
            <h3>Contents</h3>
            <ul>
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#PRINCIPIOS TEÓRICOS">PRINCIPIOS TEÓRICOS</a></li>
                <li><a href="#PARTE EXPERIMENTAL"> PARTE EXPERIMENTAL"</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
                <li><a href="#REFERENCIA">REFERENCIA</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div clase="contenido">
                <h1> Práctica 3 de Química: Operaciones clave</h1>
                <a href='Simulation/chem_sim_3.php'      class="styled-button">Simulation</a>
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
    
                <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
              
    
                <h2 id="REFERENCIA">REFERENCIA</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
