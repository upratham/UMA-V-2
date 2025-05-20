<?php
include('../header.php');
$practical_number = "A7";
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

        <button class="tab-button active" onclick="openTab('3D Modelo')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        3D Modelo</button>

         <!-- Cuestionario tab: now submits the form directly -->
    <form id="cuestionarioForm" action="/V2/V2/questionnaire.php" method="GET" style="display:inline; margin:0; padding:0;">
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
            <li><a href="#objectives">1. Objetivos</a></li>
            <li><a href="#introduction">2. INTRODUCCIÓN</a></li>
            <li><a href="#compact-bone">3. Tejido óseo compacto</a></li>
            <li><a href="#spongy-bone">4. Tejido óseo esponjoso</a></li>
            <li><a href="#joints">5. Articulaciones</a></li>
            </ul>
        </nav>


        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 7:<br>ESTRUCTURA DEL SISTEMA NERVIOSO PERIFÉRICO</h1><br><br>
                <p>En este artículo abordaremos el sistema nervioso periférico, sus
                    divisiones y los nervios periféricos. El sistema nervioso
                    periférico (SNP) está conformado por todos los nervios que emergen
                    del encéfalo y la <u>médula espinal</u>, es decir, a partir del sistema
                    nervioso central. Si imaginas el SNC como la carretera principal, el
                    SNP estaría compuesto por todas las calles secundarias que salen
                    y entran a la principal; y que además permiten que los <u>impulsos
                    nerviosos</u> viajen desde y hacia las regiones más alejadas, o
                    periféricas, del cuerpo humano.</p>

                <p>El sistema nervioso periférico está casi completamente constituido
                    por nervios. Existen dos tipos de nervios: <u>nervios craneales</u>
                    y <u>nervios espinales. </u>Funcionalmente, el SNP puede ser dividido en
                    <u>sistema nervioso autónomo</u> y sistema nervioso somático.Ambos 
                    pueden ser subdivididos; el primero en <u>simpático</u>
                    y <u>parasimpático,</u> y el segundo en motor y sensitivo.
                    </p>
                <p>Puede sonar complicado, pero no lo es. Demos una mirada más de cerca a los <u>términos
                    anatómicos</u> mencionados anteriormente, para entender mejor la división periférica del <u>sistema
                    nervioso.</u> Este artículo te explicará la <u>anatomía</u> del sistema nervioso periférico.
                    </p>

                <div class="image-container">
                        <img src="Anatomy images\Practical 7\1.jpg" alt="1" class="1"><br><br>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Definición</th>
                            <th>Componentes anatómicos</th>
                            <th>Componentes funcionales</th>
                            <th>Función</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Una división del sistema nervioso compuesta por todo el tejido neural ubicado fuera de la cavidad craneal y conducto vertebral.</td>
                            <td>Nervios periféricos (nervios espinales, nervios craneales, nervios autónomos)<br>Ganglios</td>
                            <td>Sistema nervioso autónomo (SNA) - parte involuntaria que controla las células cardíacas, musculares lisas y glándulas.<br>Sistema nervioso somático (SNS) - parte voluntaria que controla la musculatura esquelética y procesamiento de la sensibilidad somática.</td>
                            <td>Conduce información motora y sensitiva entre el sistema nervioso central y los tejidos corporales periféricos.</td>
                        </tr>
                    </tbody>
                </table>
                <div class="image-container">
                    <img src="Anatomy images\Practical 7\2.jpg" alt="2" class="2"><br><br>
                </div>

                <p>El elemento funcional del sistema nervioso periférico son los nervios periféricos. Cada nervio 
                está conformado por un haz que contiene numerosas fibras nerviosas (axones) y sus envolturas 
                de <a href="https://www.kenhub.com/es/library/anatomia-es/tejido-conectivo-conjuntivo">tejido conectivo.</a> La estructura comparable en el sistema nervioso central es un tracto. Por 
                otro lado, cadafibra nerviosa es una extensión de una <a href="https://www.kenhub.com/es/library/anatomia-es/neurona">neurona </a> cuyo soma o cuerpo celular está
                ubicado dentro de lasustancia gris del sistema nervioso central o dentro de los<a href="https://www.kenhub.com/es/library/anatomia-es/ganglos-nerviosos"> ganglios </a>del
                sistema nervioso periférico.</p>

                <p>Los nervios periféricos que transportan información hacia el SNC se denominan aferentes 
                    o sensitivos,mientras que los que llevan información desde el SNC son llamados eferentes
                    o motores</p>
                <p>Las neuronas aferentes conducen una gran variedad de impulsos desde los receptores u 
                    órganos sensitivos. Por ejemplo, conducen sensaciones como el tacto, dolor, temperatura, 
                    y posición en el espacio (propiocepción). Además, pueden transmitir algunos tipos de
                    sensibilidad más especializados;como es el caso del olfato, visión, audición y balance. Por otra
                    parte, las neuronas eferentes conduceninformación general hacia órganos efectores; como el
                    músculo esquelético, órganos y <a href="https://www.kenhub.com/es/library/anatomia-es/glandulas"> glándulas</a>. Sonresponsables del inicio de la contracción 
                    muscular voluntaria e involuntaria, así como de otras funciones como la secreción glandular.</p>
                
                <p>Los nervios pueden ser clasificados como craneales o espinales, de acuerdo al lugar del
                    SNC desdedonde emergen. Los nervios craneales emergen desde el encéfalo mientras
                    que los nervios espinales abandonan el SNC desde la médula espinal. Existen 12 pares 
                    de nervios craneales y 31 pares de nervios espinales; totalizando 43 pares de nervios que 
                    conforman la base del sistema nervioso periférico.
                    </p>
                <div class="image-container">
                    <img src="Anatomy images\Practical 7\3.jpg" alt="3" class="3">
                </div><br><br><br><br>
                <p>Para aprender más sobre la estructura de los nervios periféricos y entender la diferencia
                    entre aferentey eferente, echa un vistazo a las siguientes unidades de estudio:</p>
                <h4><strong>Nervios craneales</strong></h4>
                <p>El primer grupo de nervios son los doce nervios o pares craneales: Olfatorio (I), óptico
                    (II), oculomotor (III), troclear (IV), trigémino (V1, V2, V3), abducens (VI), facial (VII),
                    vestibulococlear
                    (VIII) glosofaríngeo (IX), vago (X) e hipogloso (XII).
                    </p>
                <div class="image-container">
                    <img src="Anatomy images\Practical 7\4.jpg" alt="4" class="4">
                </div><br><br><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>Par Craneal</th>
                            <th>Origen Aparente</th>
                            <th>Origen Real</th>
                            <th>Tipo de Fibras</th>
                            <th>Distribución Periférica</th>
                            <th>Función</th>
                            <th>Foramen de Salida</th>
                            <th>Fosa Craneal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Olfatorio (I)</td>
                            <td>Bulbo olfatorio</td>
                            <td>Axones de la mucosa olfatoria</td>
                            <td>Aferente, Visceral, Especial</td>
                            <td>Mucosa olfatoria del 1/3 superior de las fosas nasales</td>
                            <td>Olfacción</td>
                            <td>Lámina cribosa del etmoides</td>
                            <td>Anterior</td>
                        </tr>
                        <tr>
                            <td>Optico (II)</td>
                            <td>Lateral al quiasma óptico</td>
                            <td>Axones de las células ganglionares de la retina</td>
                            <td>Aferente, Somático, Especial</td>
                            <td>Retina de los globos oculares (células bipolares de la retina)</td>
                            <td>Visión</td>
                            <td>Canal óptico</td>
                            <td>Media</td>
                        </tr>
                        <tr>
                            <td>Oculomotor (III)</td>
                            <td>Lateral a la fosa interpeduncular</td>
                            <td>Núcleo oculomotor<br>Núcleo accesorio del oculomotor</td>
                            <td>Eferente, Somático, Aferente, Somático, General</td>
                            <td>Músculo extraocular, elevador de los párpados, superior recto, superior medio oblicuo inferior</td>
                            <td>Movilidad ocular, Regulación del paso de la luz</td>
                            <td>Fisura orbital superior</td>
                            <td>Media</td>
                        </tr>
                        <tr>
                            <td>Troclear (IV)</td>
                            <td>Colículos mesencefálicos inferiores</td>
                            <td>Núcleo motor del troclear</td>
                            <td>Eferente, Somático</td>
                            <td>Músculo oblicuo mayor del ojo</td>
                            <td>Movimiento del ojo hacia abajo y afuera</td>
                            <td>Fisura orbital superior</td>
                            <td>Media</td>
                        </tr>
                        <tr>
                            <td>Trigémino (V)</td>
                            <td>Parte anterior superolateral del puente</td>
                            <td>Núcleo motor del V, núcleo sensitivo del V</td>
                            <td>Somático-General, Eferente, Especial</td>
                            <td>Piel y mucosa de cara y cavidad nasal, músculos de la masticación</td>
                            <td>Sensibilidad de la piel de cara, cavidad oral y nasal, movimientos de la masticación</td>
                            <td>Fisura orbital superior, foramen redondo, foramen oval</td>
                            <td>Media</td>
                        </tr>
                        <tr>
                            <td>Abductor (VI)</td>
                            <td>Surco médulo pontino medial</td>
                            <td>Núcleo motor del abductor</td>
                            <td>Eferente, Somático</td>
                            <td>Músculo recto lateral del ojo</td>
                            <td>Abducción del ojo</td>
                            <td>Fisura orbital superior</td>
                            <td>Media</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>Par Craneal</th>
                            <th>Origen Aparente</th>
                            <th>Origen Real</th>
                            <th>Tipo de Fibras</th>
                            <th>Distribución Periférica</th>
                            <th>Función</th>
                            <th>Foramen de Salida</th>
                            <th>Fosa Craneal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Facial (VII)</td>
                            <td>Surco medio pontino intermedio</td>
                            <td>Núcleo tracto solitario, núcleo salival superior, núcleo motor salival</td>
                            <td>
                                Aferente Somático-General<br>
                                Aferente Vegetativo-General<br>
                                Aferente Vegetativo-Especial<br>
                                Eferente Vegetativo-General<br>
                                Eferente Vegetativo-Especial
                            </td>
                            <td>
                                Papilas gustativas de 2/3 anteriores de la lengua, lágrimas, lagrimales, nasales, sublinguales y submaxilares, músculos de la expresión facial
                            </td>
                            <td>Gusto de 2/3 anteriores de la lengua, expresión facial</td>
                            <td>Meato auditivo interno, foramen estilomastoideo</td>
                            <td>Posterior</td>
                        </tr>
                        <tr>
                            <td>Vestíbulo Coclear (VIII)</td>
                            <td>Surco medio pontino lateral</td>
                            <td>Núcleo coclear ventral, núcleo</td>
                            <td>Aferente Somático</td>
                            <td>Órgano de Corti, crestas ampulares de canales</td>
                            <td>Equilibrio, audición</td>
                            <td>Meato auditivo interno, foramen</td>
                            <td>Posterior</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>Par Craneal</th>
                            <th>Origen Aparente</th>
                            <th>Origen Real</th>
                            <th>Tipo de Fibras</th>
                            <th>Distribución Periférica</th>
                            <th>Función</th>
                            <th>Foramen de Salida</th>
                            <th>Fosa Craneal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Glosofaríngeo (IX)</td>
                            <td>Surco retroolivar (parte alta)</td>
                            <td>
                                Núcleo del tracto solitario,<br>
                                Núcleo salival inferior,<br>
                                Núcleo ambiguo
                            </td>
                            <td>
                                Aferente Somático-General<br>
                                Aferente Vegetativo-General<br>
                                Aferente Vegetativo-Especial<br>
                                Eferente Vegetativo-General<br>
                                Eferente Vegetativo-Especial
                            </td>
                            <td>
                                Papilas gustativas en el 1/3 posterior de la lengua,<br>
                                glándula parótida,<br>
                                músculos del velo del paladar y orofaríngeo,<br>
                                vísceras orofaríngeas
                            </td>
                            <td>
                                Gusto en el 1/3 posterior de la lengua,<br>
                                secreción salival,<br>
                                deglución,<br>
                                secreción y motilidad visceral
                            </td>
                            <td>Foramen yugular</td>
                            <td>Posterior</td>
                        </tr>
                        <tr>
                            <td>Vago (X)</td>
                            <td>Surco retroolivar (parte intermedia)</td>
                            <td>
                                Núcleo del tracto solitario,<br>
                                Núcleo ambiguo,<br>
                                Núcleo dorsal del vago
                            </td>
                            <td>
                                Aferente Sensitivo-General<br>
                                Aferente Vegetativo-General<br>
                                Aferente Vegetativo-Especial<br>
                                Eferente Vegetativo-General<br>
                                Eferente Vegetativo-Especial
                            </td>
                            <td>
                                Papilas gustativas de la base de la lengua,<br>
                                epiglotis y paladar blando
                            </td>
                            <td>
                                Gusto de la base de la lengua,<br>
                                secreción y motilidad visceral,<br>
                                fonación,<br>
                                deglución
                            </td>
                            <td>Foramen yugular</td>
                            <td>Posterior</td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <tr>
                            <th>Par Craneal</th>
                            <th>Origen Aparente</th>
                            <th>Origen Real</th>
                            <th>Tipo de Fibras</th>
                            <th>Distribución Periférica</th>
                            <th>Función</th>
                            <th>Foramen de Salida</th>
                            <th>Fosa Craneal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Accesorio (XI)</td>
                            <td>Surco retroolivar (parte baja)</td>
                            <td>Núcleo ambiguo, astas ventrales de la médula espinal</td>
                            <td>
                                Eferente-Somático-General<br>
                                Eferente-Vegetativo-General
                            </td>
                            <td>Músculos trapecio, esternocleidomastoideo, recto lateral</td>
                            <td>Rotación y lateralización de la cabeza hacia el hombro</td>
                            <td>Foramen yugular y agujero magno</td>
                            <td>Posterior</td>
                        </tr>
                        <tr>
                            <td>Hipogloso (XII)</td>
                            <td>Surco preolivar</td>
                            <td>Núcleo motor del hipogloso</td>
                            <td>
                                Eferente-Somático<br>
                                Aferente-Somático-General
                            </td>
                            <td>Músculo intrínseco y extrínseco de la lengua</td>
                            <td>Motilidad lingual</td>
                            <td>Canal hipogloso o canal condilar anterior</td>
                            <td>Posterior</td>
                        </tr>
                    </tbody>
                </table>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>

              
            
</div>
    <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac7.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac7_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. cerebro humano</h3>
    <model-viewer src="prac7.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Sistema nervioso</h3>
    <model-viewer src="angiology.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>


</div>

<!---Questionaire--->

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
    <button class="styled-button" onclick="window.location.href='anatomy_practical8.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical6.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>