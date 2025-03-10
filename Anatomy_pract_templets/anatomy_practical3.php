<?php
include '../header.php';
$practical_number = "A3"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Anatomy Practical 3</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
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
            top: 0; /* Fixes sidebar at the top */
            left: 0; /* Ensures sidebar starts at the left */
            overflow-y: auto; 
            padding: 10px;
            height: 100vh;
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
            /*padding: 20px;*/
            overflow-y: auto; /* Allows the main content to scroll */
            display: inline-block;
            margin-left: 350px;
            margin-right: 50px;
            margin-top:0px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
            text-align: center;
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
            /*z-index: 100; /* Ensures it stays above the rest of the content */
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Optional: Adds a bottom border to the header */

        }
        
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
        .practical-logo{
            position: sticky;
            top: 0;
            left: 0;
            z-index: 100;
            width: 150px;
        }
    </style>
</head>
<body>

    <!-- Sidebar with title and links to sections -->
    <div class="sidebar">
        <!-- Sidebar title -->
        <h2>Contenido</h2>
        
        <!-- Practical Objectives link stays at the top -->
        <div class="overview-link">
            <a href="#practical-content">Objetivos</a>
        </div>
        
        <!-- Other navigation links -->
        <a href="#cardiovascular-system">Sistema cardiovascular</a>
        <a href="#respiratory-system">Sistema respiratorio</a>
    </div>
    <header class="practical-header">
            <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo">
        </header>


    <!-- Main content -->
    <section id="practical-content">
        
        <div class="practical">
            <h2>PRÁCTICA #3:<br>ESTRUCTURAS DE LOS SISTEMAS CARDIOVASCULAR Y RESPIRATORIO</h2>

            <!-- Objectives Section -->
            <h3>Objetivos</h3>
            <ul>
                <li>Conozca las regiones del cuerpo Sistema muscular.</li>
                <li>Relacionar las regiones del cuerpo Sistema muscular y patologías relacionadas.</li>
            </ul>
            <p>El sistema muscular es un conjunto de tejidos del cuerpo con la capacidad de cambiar de forma.</p>
            <p>El sistema nervioso coordina la contracción del sistema muscular y sincroniza sus funciones.</p><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\tissue.jpg" alt="tissue" class="image-container" style= "width: 500px"; >
            </div><br><br>
            
            <!-- Classification of Muscles -->
            <h3>Clasificación de los músculos</h3>
            <p><strong>Los músculos esqueléticos</strong> o músculos estriados se adhieren al esqueleto (huesos) y se
             contraen para generar movimiento en el cuerpo. Los músculos esqueléticos están conectados al sistema nervioso somático. 
             El sistema nervioso somático controla el movimiento voluntario de los músculos. Los músculos esqueléticos son parte del 
             sistema musculoesquelético. Junto con los tendones y otros tejidos conectivos, se conectan entre sí y al mismo tiempo aseguran las articulaciones y el sistema esquelético.</p>
            <p><strong>El músculo cardíaco </strong>constituye el cuerpo principal del corazón. Es responsable de las contracciones rítmicas que bombean sangre por todo el cuerpo.</p>
            <p><strong>Los músculos lisos </strong> están bajo el control del sistema nervioso autónomo o involuntario. Se encuentran 
            en las paredes de los vasos sanguíneos, por ejemplo. Este tipo de musculatura también existe en estructuras como la vejiga, los intestinos o el estómago. Estos músculos consumen menos energía y, por lo general, mueven líquidos dentro de estos tejidos para ayudar a darles forma.</p>
            </p><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscle_types.jpg" alt="muscle_types" class="muscle_types-image" style= "width: 500px"; >
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscle cell.jpg" alt="muscle cell" class="muscle-cell-image" style= "width: 500px"; >
            </div><br><br>  
            <div class="image-container">
                <img src="Anatomy images\Prac_3\muscles.png" alt="muscles" class="muscles-image" style= "width: 500px"; >
            </div><br><br> <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\frontal_body.png" alt="frontal_body" class="frontal_body" style= "width: 500px"; >
            </div><br><br><br><br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\dorsal_body.jpg" alt="dorsal_body" class="dorsal_body" style= "width: 500px"; >
            </div><br><br><br><br><br>
            
            <h4>Cuestionario del sistema muscular</h4>
            <ol>
                <li>Investiga qué enfermedades son más comunes a nivel del sistema muscular.</li>
                <li>Defina los siguientes términos:
                    <ul>
                        <li>Tendinopatía</li>
                        <li>Calambre muscular</li>
                        <li>Distrofia muscular</li>
                        <li>Enfermedades neuromusculares</li>
                        <li>Esclerosis múltiple</li>
                        <li>Fibromialgia</li>
                        <li>Miastenia grave</li>
                        <li>Miositis</li>
                        <li>Sarcoma de tejido blanco</li>
                    </ul>
                </li>
            </ol>

            <!-- Cardiovascular System Section -->
            <h3 id="cardiovascular-system">Sistema cardiovascular</h3>
            <h4>Objetivos</h4>
            <ul>
                <li>Conozca las regiones del cuerpo Sistema cardiovascular</li>
                <li>Relacionar las regiones del cuerpo Sistema cardiovascular y patologías relacionadas.</li>
            </ul><br>
            <p>Todas las células de nuestro cuerpo, ya sean del cerebro o de un músculo de nuestras piernas,
                 necesitan oxígeno y nutrientes para realizar su función. Podemos decir que el sistema cardiovascular es 
                 la estructura a través de la cual se transportan estas sustancias a cada una de las células y se eliminan 
                 de ellas las sustancias de desecho, permitiendo así que nuestro cerebro pueda pensar o que nuestras piernas puedan caminar, por ejemplo.</p><br>
            <p>El sistema cardiovascular incluye el corazón, los vasos sanguíneos (arterias, capilares, vénulas y venas) y la sangre circulante. 
                Transporta oxígeno y nutrientes a las células y elimina sustancias de desecho, que son esenciales para mantener una buena salud.</p>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\veins.jpg" alt="veins" class="veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\artery_veins.jpg" alt="artery_veins" class="artery_veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_veins.jpg" alt="heart_veinsy" class="heart_veins" style= "width: 500px"; >
            </div><br><br><br>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\Heart.png" alt="heart" class="heart" style= "width: 500px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\atrium_ventricle.png" alt="atrium_ventricle" class="atrium_ventricle" style= "width: 500px"; >
            </div><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\electrical_system.jpg" alt="electrical_system" class="electrical_system" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_activation.jpg" alt="heart_activation" class="heart_activation" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\heart_wall.png" alt="heart_wall" class="heart_wall" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <h2 id="Questionnaire">Cuestionario</h2>
                
                <div>
                    <form action="questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
            <!-- Respiratory System Section -->
            <h3 id="respiratory-system">SISTEMA RESPIRATORIO</h3>
            <h4>OBJETIVOS</h4>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema respiratorio.</li>
                <li>Relacionar las regiones del cuerpo Sistema respiratorio y 
                patologías relacionadas.</li>
            </ul><br>
            <p>El aparato respiratorio incluye la nariz, la boca, la garganta, latráquea y los pulmones.
</p>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\respiratory.jpg" alt="respiratory" class="respiratory" style= "width: 300px"; >
            </div><br><br><br>
            <p>El aire entra en el aparato respiratorio a través de la nariz o de la boca. Si pasa por las fosas nasales (también 
                llamadas "narinas") el aire se calienta y humidifica. Los 
                pasajes nasles y otras partes del aparato respiratorio están protegidos por pelos diminutos llamados "cilios", 
                que se encargan de filtrar el polvo y otraspartículas que entran en la nariz junto con el aire que respiramos
                </p>
            <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\face.jpg" alt="face" class="face" style= "width: 300px"; >
            </div><br><br><br><br><br>
            <p>Las dos entradas de las víasnasales (la cavidad nasal y la boca) se unen en la faringe, 
                o garganta, en la parte posterior dela nariz y la boca. La faringe formaparte del aparato 
                digestivo y del respiratorio porque transportatanto los alimentos como el aire.
            </p><br>
            <p>En su parte inferior, la faringe se divide en dos conductos: uno para los alimentos (el esófago) y otro para el aire. El esófago conduce al estómago. El pasaje exclusivo para 
                el aire se cubre con una pequeña capa de tejido denominada "epiglotis" cuando  tragamos. De este modo, se impide que los alimentos o los líquidos vayan a los pulmones.</p><br>
            <p>La laringe es la parte superior del conducto exclusivo para el aire. Este conducto corto 
                contiene un par de cuerdas vocales, que vibran para generar sonidos.
            </p><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\pharyngeal_anatomy.jpg" alt="pharyngeal_anatomy" class="pharyngeal_anatomy" style= "width: 500px"; >
            </div><br><br><br><br><br>
            <p>La tráquea es la continuación del pasaje de aire por debajo de la laringe. Las paredes 
             de la tráquea están fortalecidas con anillos rígidos de cartílago que la mantienen 
             abierta. Además, está revestidade cilios, que expulsan los líquidos y las partículas 
             extrañas de las vías aéreas para que no lleguen a los pulmones.</p>
                <br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\nasal_cavity.jpg" alt="nasal_cavity" class="nasal_cavity" style= "width: 300px"; >
            </div><br><br><br>
            <p>En el extremo inferior, la tráquea se divide en los 
            conductos izquierdo y derecho llamados "bronquios", 
            que conectan con los pulmones. Dentro de los 
            pulmones, los bronquios se ramifican y forman 
            bronquios más pequeños o conductos incluso más 
            pequeños llamados "bronquiolos. Los bronquiolos 
            terminan en pequeños sacos de aire llamados 
            "alvéolos", donde ocurre el intercambio de oxígeno y 
            dióxido decarbono. Cada persona tiene cientos de 
            millones de alvéolos en los pulmones. Esta red de 
            alvéolos,bronquiolos y bronquios recibe elnombre de 
            "árbol bronquial".</p><br><br>

            <div class="image-container">
                <img src="Anatomy images\Prac_3\larynx.jpg" alt="larynx" class="larynx" style= "width: 200px"; >
            </div><br><br><br>   
            <p>Los pulmones también contienentejidos elásticos que les permiteninflarse y desinflarse 
             sin perder su forma. Están cubiertos por una capa subm</p><br>
            <p>La cavidad torácica, o tórax, es elespacio que aloja al árbol
            bronquial, los pulmones, el corazón y otras estructuras. La parte superior y los costados 
            del tórax están formados por las costillas y los músculos unidos a ellas, y la parte inferior 
            está formada por un músculo de gran tamaño denominado "diafragma". Las paredes 
            del tórax forman una protección alrededor de los pulmones y otros órganos presentes 
            en la cavidad torácica.</p> <br>

            <div class="image-container">
                <img src="Anatomy images\Prac_3\lung.jpg" alt="lung" class="lung" style= "width: 300px"; >
            </div><br><br><br>
            <div class="image-container">      
                <img src="Anatomy images\Prac_3\ribcage.jpg" alt="ribcage" class="ribcage" style= "width: 400px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\cartilage.jpg" alt="cartilage" class="cartilage" style= "width: 500px"; >
            </div><br><br><br>
            <h2 id="Questionnaire">Cuestionario</h2>
                
                <div>
                    <form action="questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\detailed_respiration.jpg" alt="detailed_respiration" class="detailed_respiration" style= "width: 400px"; >
            </div><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Prac_3\diaphragm.jpg" alt="diaphragm" class="diaphragm" style= "width: 400px"; >
            </div><br><br><br>
        </div>
    </section>

</body>
</html>
