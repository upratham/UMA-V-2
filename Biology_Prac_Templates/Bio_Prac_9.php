<?php
include '../header.php';
$practical_number = "B9"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA PRÁCTICA N°9: EL DOGMA CENTRAL DE LA BIOLOGÍA MOLECULAR.</title>
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
        <img src="../logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>

    <div class="container">
        <!-- Left side (Shortcuts/Headings) -->
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
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
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
    <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

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