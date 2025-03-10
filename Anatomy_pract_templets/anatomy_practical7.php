<?php
include '../header.php';
$practical_number = "A7"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7 : ESTRUCTURA DEL SISTEMA NERVIOSO PERIFÉRICO</title>
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
            margin-left: 330px;
            margin-right: 30pxpx;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
            font-size: 18px;
            text-align: left;
            margin-right: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #dddddd;
        }
        th {
            background-color: #f4f4f4;
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
            <div class="text-container">
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
