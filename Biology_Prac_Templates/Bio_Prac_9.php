<?php
include '../header.php';
$practical_number = "B9";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology <!DOCTYPE html>
<html lang="en">
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

        <button class="tab-button active" onclick="openTab('3D Modelo')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        3D Modelo</button>

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
                <li><a href="#COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#SÍNTESIS DE PROTEÍNAS">SÍNTESIS DE PROTEÍNAS</a></li>
                <li><a href="#TRADUCCIÓN">TRADUCCIÓN</a></li>
                <li><a href="#CÓDIGO GENÉTICO">CÓDIGO GENÉTICO</a></li>
                <li><a href="#EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</a></li>
                <li><a href="#MATERIALES">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA PRÁCTICA PRÁCTICA N°9: EL DOGMA CENTRAL DE LA BIOLOGÍA MOLECULAR .</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Aplica una técnica sencilla para poder extraer el ADN de un tejido vegetal y por el aspecto que presenta, confirma su estructura fibrilar.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <div style="text-align: center;">
                    <img src="Photos\Biology Diagrams\Prac 9\1.png" alt="Dogma Central de la Biología Molecular" style="max-width: 100%; height: auto; margin-bottom: 10px;">
                    <p style="text-align: justify; font-family: Arial, sans-serif; margin: 0 auto; width: 90%; font-size: 16px;">
                        Francis Crick propuso en el año 1956 el Dogma Central de la Biología Molecular, el cual explica que el ADN es responsable de su replicación y de la transcripción del ARN. El proceso de transcripción forma ARN complementario al ADN. Luego, la molécula de ARN debe ser traducida a una cadena de aminoácidos los cuales darán como resultado de una proteína.
                    </p>
                    <p style="text-align: justify; font-family: Arial, sans-serif; margin: 0 auto; width: 90%; font-size: 16px;">
                        En esa misma década Heinz Fraenkel – Conrat demostró que, en algunos virus constituidos por ARN, esta molécula formaba su material genético principal.
                    </p>
                    <p style="text-align: justify; font-family: Arial, sans-serif; margin: 0 auto; width: 90%; font-size: 16px;">
                        En 1970 Temin y Baltimore demostraron que, durante la infección de algunos virus con ARN, este se transformaba en ADN debido a un proceso denominado transcripción inversa.
                    </p>
                </div>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 9\2.png" alt="Fowler position" class="center">
                </div>
                <h2 id = "SÍNTESIS DE PROTEÍNAS">SÍNTESIS DE PROTEÍNAS</h2>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        La síntesis de proteínas abarca 2 procesos del Dogma Central de la Biología Molecular que son: Transcripción y la Traducción.
    </p>

    <h2 style="font-family: Arial, sans-serif;">● TRANSCRIPCIÓN</h2>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Con este proceso se da inicio a la síntesis de proteínas, en células eucariotas ocurre dentro del núcleo y consiste en realizar la copia parcial del ADN (fragmento que codifica una proteína), dicho proceso es realizado por la ARN polimerasa, creando una copia de dicho fragmento de ADN en ARN mensajero (ARNm) a través de la complementariedad de bases. 
        La cadena de ADN que se tomará como molde es la que va en el sentido de 3’ a 5’ obteniéndose una cadena de ARNm en el sentido contrario 5’ a 3’.
    </p>
    <h3 style="font-family: Arial, sans-serif;">Maduración del ARNm</h3>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Una vez obtenido el ARNm este debe pasar por un proceso de maduración en el cual se retiran segmentos que no codifican llamados intrones a través de un grupo de enzimas de corte y empalme, dejando únicamente los segmentos que codifican llamados exones. 
        Continuando con el proceso de maduración, el ARNm debe colocar en sus extremos estructuras de protección para que al salir al citoplasma este no sea degradado, es por esto que en el extremo 5’ se coloca una caperuza de metil – GTP y en el extremo 3’, una cola poli A.
    </p>

    <h2 id = "TRADUCCIÓN">TRADUCCIÓN</h2>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Una vez que el ARNm (conteniendo los codones) sale del núcleo este debe pasar por el proceso de traducción el cual consiste en transformar la información del ARNm en proteínas, para ello ocurren las siguientes etapas:
    </p>
    <h3 style="font-family: Arial, sans-serif;">✔ Etapa de iniciación</h3>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        El ARNm se fija a la subunidad menor del ribosoma conocido como sitio P, el cual reconoce el triplete de inicio conocido como AUG, en seguida se incorpora el primer ARNt (anticodón) que trae consigo el aminoácido metionina.
    </p>

    <h3 style="font-family: Arial, sans-serif;">✔ Etapa de elongación</h3>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Se inicia con la integración de la subunidad mayor del ribosoma, y la llegada del segundo ARNt al sitio A, mediante una reacción se transfiere el aminoácido del primer ARNt al segundo ARNt, luego el ARNt del sitio P se traslada al sitio E y del ARNt del sitio A al sitio P, dejando así el sitio libre para la integración del siguiente ARNt.
    </p>

    <h3 style="font-family: Arial, sans-serif;">✔ Etapa de término</h3>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Esta etapa ocurre cuando ingresa uno de los tres ARNm de término (UAG, UAA o UGA), ya que al no existir un ARNt específico el ribosoma se detiene y se desensambla.
    </p>

    <h2 id = "CÓDIGO GENÉTICO">CÓDIGO GENÉTICO</h2>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        Es la relación que existe entre una secuencia de nucleótidos y los aminoácidos, es decir, permite traducir la información genética a proteínas. El código genético está basado en la primera letra de las bases nitrogenadas que conforman a los nucleótidos, para poder determinar el aminoácido que se encuentra codificado en el ARNm se debe asociar tres nucleótidos (codón).
    </p>
    <p style="text-align: justify; font-family: Arial, sans-serif; line-height: 1.5;">
        El código genético contiene 64 combinaciones posibles considerando a las cuatro bases, las cuales corresponde a 20 aminoácidos, estos últimos pueden ser codificados por codones con bases diferentes a excepción del aminoácido metionina (AUG) y el triptófano (UGG).
    </p>

    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 9\3.png" alt="Fowler position" class="center">
    </div>

    <h1 id = "COMPETENCIAS">COMPETENCIAS</h1>
    <p style="font-family: Arial, sans-serif; font-size: 16px;">
        1. Construye una proteína, a partir de una secuencia conocida de nucleótidos.<br>
        2. Reconoce el Código genético.
    </p>

    <h2 id="MATERIALES" style="font-family: Arial, sans-serif;">MATERIALES</h2>
    <ul style="font-family: Arial, sans-serif; font-size: 16px;">
        <li>Secuencias de ADN proporcionadas por el docente.</li>
    </ul>

    <h2 style="font-family: Arial, sans-serif;">PROCEDIMIENTO</h2>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        Utilizando los pasos explicados anteriormente, hallar el ARNm, el ARNt y la proteína que son codificadas por las secuencias de ADN dadas por el profesor.
    </p>

    <h2 id = "EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</h2>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        Resolver 06 ejercicios de manera personal, los ejercicios serán designados por el docente (4 puntos por ejercicios de desarrollo y 2 puntos por ejercicio de opción múltiple).
    </p>

    <h3 style="font-family: Arial, sans-serif;">1. El siguiente segmento de ADN pertenece al inicio de un gen. Utilice este segmento de ADN y determine lo siguiente:</h3>
    <pre style="font-family: Arial, monospace; font-size: 16px; text-align: center;">3’ - TAC-ACG-TAT-CTT-GGC-TAG-CTA - 5’</pre>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. La secuencia de bases del ARNm mensajero.<br>
        b. La secuencia de aminoácidos de la proteína que se sintetizará.
    </p>

    <h3 style="font-family: Arial, sans-serif;">2. La α-amilasa salival humana (AASH) es la proteína de la saliva que se encuentra en mayor concentración y contiene 496 aminoácidos.</h3>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        Con respecto a esta información, determinar lo siguiente:<br>
        a. El número de codones.<br>
        b. El número de anticodones.<br>
        c. El número de nucleótidos del ARNm.
    </p>

    <h3 style="font-family: Arial, sans-serif;">3. La siguiente secuencia de aminoácidos pertenece al inicio del polipéptido...</h3>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        Met – Glu – Glu – Leu – Arg – His – Iso – Asp – Leu<br>
        a. ¿Cuántos codones tiene la cadena de ARNm?<br>
        b. Si se sabe que para la obtención de este polipéptido se utilizó un ARNm...
    </p>

    <h3 style="font-family: Arial, sans-serif;">4. Un grupo de investigación de la UCSUR se encuentra haciendo pruebas...</h3>
    <pre style="font-family: Arial, monospace; font-size: 16px; text-align: center;">
        5'- ATG-GGC-GGG-CTA-TGG-AGG -3'
        3'- TAC-CCG-CCC-GAT-ACC-TCC -5'
    </pre>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. La secuencia de bases del ARNm mensajero.<br>
        b. La secuencia de aminoácidos.
    </p>

    <h3 style="font-family: Arial, sans-serif;">5. A continuación, se observan dos segmentos de ADN...</h3>
    <pre style="font-family: Arial, monospace; font-size: 16px; text-align: center;">
        (1) 3’-TAC GTG AGA CGG CTA TTG GGG -5’
        (2) 3’-TAC GTG CGA CGG CTT TTG GGG -5’
    </pre>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. ¿Cómo ha cambiado la proteína después de dicha mutación?<br>
        b. ¿Qué aminoácidos fueron cambiados con respecto a la secuencia original?
    </p>

    <h3 style="font-family: Arial, sans-serif;">6. La insulina es una hormona que favorece la entrada de glucosa...</h3>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. Número de ARNt<br>
        b. Número de codones<br>
        c. Número de aminoácidos
    </p>

    <h3 style="font-family: Arial, sans-serif;">7. La enzima luciferasa permite generar bioluminiscencia...</h3>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. ¿Cuántos anticodones se han requerido para producir la enzima luciferasa?<br>
        b. ¿Cuántos nucleótidos fueron eliminados durante el “splicing”?
    </p>

    <h3 style="font-family: Arial, sans-serif;">8. Se muestra un segmento de ADN...</h3>
    <pre style="font-family: Arial, monospace; font-size: 16px; text-align: center;">
        3'-TAC-AAG-CGC-GGA-CGC-TAC-5'
        5'-ATG-TTC-GCG-CCT-GGC-ATG-3'
    </pre>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. La secuencia de bases del ARNm mensajero.<br>
        b. La secuencia de aminoácidos.
    </p>

    <h3 style="font-family: Arial, sans-serif;">9. Marque la alternativa que contenga la secuencia de ARNm...</h3>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        Met – Asp – Gly – Arg – Cys – Phe – Leu<br>
        a. AUG – GAC – GGA – CGA – UGU – UUC – CUC<br>
        b. AUG – CAC – AGC – AUG – UGC – UUU – CUC<br>
        c. AUC – GAU – GGC – CGC – AGC – UUU – CUA<br>
        d. AUG – GAC – GAA – CGC – UGC – UUU – CUA
    </p>

    <h3 style="font-family: Arial, sans-serif;">10. Marque la alternativa que contenga las secuencias...</h3>
    <pre style="font-family: Arial, monospace; font-size: 16px; text-align: center;">
        3'-TAC-GTG-ATA-GCG-ACC-ACT-5'
        5'-ATG-CAC-TAT-CGC-TGG-TGA-3'
    </pre>
    <p style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">
        a. UAC-GUG-AUA-GCG-ACC-ACU<br>
        b. AUG-UGG-AGA-CAU-UAC-UGA<br>
        c. AUG-CAC-UAU-CGC-UGG-UGA
    </p>
   

    <h2 id = "REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
    <p>Audesirk T., Audesirk G. & Byers B. (2008) Biología: La vida en la tierra. 8va. Edición México: Pearson. Prentice-Hall Hispanoamericana S.A.   <br>
        Solomon E. , Berg L. & Martin D. (2013). Biología. 9na. Edición. México: Cengage Learning Editores S.A.<br>
        Tejada, V. (2007, julio). Genética y Biología Molecular. Revista Médica de la Universidad de Vera Cruz. Recuperado de http://www.medigraphic.com/pdfs/veracruzana/muv-2007/muv072g.pdf   Colón, D., Vila, A. (2009, diciembre). El ribosoma y la traducción genética. Revista Investigación y Ciencia. Recuperado de https://www.edu.xunta.gal/centros/iesvalminor/aulavirtua12/pluginfile.p hp/11430/mod_resource/content/O/lyC_ribosoma_traduccion.pdf <br>
        </p>

        <h3 style="text-align: center;">LISTA DE COTEJO: SÍNTESIS DE PROTEÍNAS</h3>
        <table border="1" style="border-collapse: collapse; width: 100%; text-align: center; font-family: Arial, sans-serif;">
            <thead>
                <tr>
                    <th style="padding: 5px;">CRITERIOS</th>
                    <th style="padding: 5px;">LOGRADO</th>
                    <th style="padding: 5px;">NO LOGRADO</th>
                    <th style="padding: 5px;">PUNTAJE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #1 relacionado a la síntesis de proteínas, coloca las operaciones cálculos.</td>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #2 relacionado a la síntesis de proteínas, coloca las operaciones cálculos.</td>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #3 relacionado a la síntesis de proteínas, coloca las operaciones cálculos.</td>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #4 relacionado a la síntesis de proteínas, coloca las operaciones cálculos.</td>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #5 relacionado a la síntesis de proteínas.</td>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Determina correctamente lo solicitado en el ejercicio #6 relacionado a la síntesis de proteínas.</td>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">0</td>
                    <td style="padding: 5px;"></td>
                </tr>
                <tr>
                    <td style="padding: 5px; font-weight: bold;">TOTAL</td>
                    <td style="padding: 5px;"></td>
                    <td style="padding: 5px;"></td>
                    <td style="padding: 5px;"></td>
                </tr>
            </tbody>
            </table>

</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac9.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Parc9_Part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
  <!-- Add more videos here in the same way -->
  
</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>
    <h3>1. Síntesis de proteínas</h3>
                <model-viewer src="trna_synthetase-trna_complex__bound_tryptophan.glb"
                alt="3D Model"
                camera-controls
                auto-rotate
                ar
                shadow-intensity="1"
                style="background-color: white; width: 100%; height: 600;">
                </model-viewer>
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_10.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_8.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/biology/Biologia.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
