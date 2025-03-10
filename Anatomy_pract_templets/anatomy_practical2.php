<?php
include '../dbconnect.php';
include '../header.php';
$practical_number = "A2"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Anatomy Practical 2</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        #practical-content{
            margin-top: 0px;

        }
        h1 {
            text-align: center;
        }

        ol {
            list-style-type: decimal;
            font-weight: bold;
        }

        ol li {
            font-weight: normal;
        }

        ol li::marker {
            font-weight: bold;
        }

        /* Style for images */
        .image-container {
            text-align: center;
            max-width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Sticky header for UMA logo */
        .practical-logo {
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 150px;
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

        /* Section styling */
        section {
            margin: 20px;
        }

        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: px;
            height: 100%;
            background-color: #f4f4f4;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        .content {
            margin-left: 250px; /* Space for the sidebar */
        }
    </style>
</head>

<body>
    <!-- Sidebar for Main Points -->
    <div class="sidebar">
        <h2>Content</h2>
        <ul>
            <li><a href="#objectives">1. Objetivos</a></li>
            <li><a href="#introduction">2. INTRODUCCIÓN</a></li>
            <li><a href="#compact-bone">3. Tejido óseo compacto</a></li>
            <li><a href="#spongy-bone">4. Tejido óseo esponjoso</a></li>
            <li><a href="#joints">5. Articulaciones</a></li>
            <li><a href="#questionnaire">6. Cuestionario:</a></li>
        </ul>
    </div>

    
    <header class="practical-header">
        <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>


        <section id="practical-content">
            <div class="practical">
                <h1>PRÁCTICA #2:ESTRUCTURAS HUESAS, ARTICULACIONES Y MUSCULARES</h1><br>

                <!-- Objectives Section -->
                <h2 id="objectives"><strong>1. Objetivos</strong></h2>
                <ul>
                    <li>Conocer las regiones del cuerpo: Sistema hueso-articular.</li>
                    <li>Relacionar las regiones del cuerpo: el sistema esquelético-articular y patologías relacionadas.</li><br>
                </ul>

                <!-- Introduction Section -->
                <h2 id="introduction"><strong>2. INTRODUCCIÓN</strong></h2>
                <p>Los huesos se clasifican en varios tipos según su forma. Un hueso largo (como el fémur o el húmero) consta de las siguientes partes:</p>
                <ol>
                    <li><strong>Diáfisis:</strong>  es el cuerpo cilíndrico principal o porción del hueso.  </li>
                    <li><strong>Epífisis: </strong> son los extremos proximal y distal del hueso.</li>
                    <li><strong>Metaphysis:</strong>es el sitio de unión de la diáfisis con la epífisis; su espesor disminuye con la edad.</li>
                    <li><strong>Cartílago articular:</strong> es una fina capa de cartílago hialino que recubre la parte de la epífisis de un hueso que se articula con otro hueso.</li>
                    <li><strong>Periostio: </strong> es una capa resistente de tejido conectivo denso que
                     rodea una superficie ósea que no tiene cartílago articular. Protege el hueso, participa 
                     en la reparación de fracturas, colabora en la nutrición del hueso y sirve como punto de 
                     inserción de tendones y ligamentos.s in the nutrition of the bone, and serves as an insertion point for
                     tendons and ligaments.</li>
                    <li><strong>Cavidad medular:</strong> es el espacio interno de la diáfisis que contiene la médula ósea amarilla grasa.</li>
                    <li><strong>Endostio:</strong> es la capa que recubre la cavidad medular y contiene células para la formación de hueso.</li>
                </ol>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone.jpg" alt="Bone" class="Bone-image" style="width: 600px;">
                </div>

                <!-- Compact Bone Tissue Section -->
                <h2 id="compact-bone"><strong>3. Tejido óseo compacto</strong></h2>
                <ol>
                    <li>Forma la capa exterior de todos los huesos; proporciona protección y apoyo. Está formado por unidades denominadas osteonas o sistemas de Havers, que constan de:</li>
                    <li>Un canal central que tiene un trayecto longitudinal y contiene un vaso sanguíneo, llamado canal de Havers.</li>
                    <li>Laminillas concéntricas que rodean el canal de Havers, que son anillos de matriz dura calcificada.</li>
                    <li><strong>Lagunas:</strong> espacios situados entre los anillos de laminillas que contienen osteocitos.</li>
                    <li><strong>Canalículos:</strong>que se irradian desde las lagunas, están llenos de líquido extracelular y contienen extensiones de osteocitos para comunicarse con el canal central.</li>
                    <li>Las osteonas son circulares y no encajan perfectamente entre sí, con zonas llenas de laminillas intersticiales y laminillas circunferenciales.</li>
                    <li><strong>Canales de Volkmann:</strong>canales a través de los cuales los vasos sanguíneos y los nervios penetran en el hueso compacto.</li>
                </ol>

                <!-- Spongy Bone Tissue Section -->
                <h2 id="spongy-bone"><strong>4. Tejido óseo esponjoso</strong></h2>
                <p>Está formado por laminillas dispuestas en una red irregular llamadas trabéculas. En algunos huesos, estos espacios están llenos de médula ósea roja.
                     Las trabéculas contienen osteocitos ubicados en lagunas con canalículos que se comunican con otras lagunas.</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\tissue.jpg" alt="Tissue" class="tissue-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skull_bone.jpg" alt="skull-Bone" class="skull-Bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skull_and baby.jpg" alt="skull_and_baby" class="skull-and-baby-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skeleton.jpg" alt="skeleton" class="skeleton-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\biggie image.jpg" alt="biggie" class="biggie-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine.jpg" alt="spine" class="spine-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\somekind_of_bone.jpg" alt="bone" class="some_bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\coccix.jpg" alt="coccix" class="coccix-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\so_many_bones.jpg" alt="bones" class="bones-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone_n_tissue.jpg" alt="bones_tissue" class="bones-tissue-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\bone_n_body.jpg" alt="bones_body" class="bones-body-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\appendics.jpg" alt="appendics" class="appendics-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\ribcage.jpg" alt="ribcage" class="ribcage-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\hand_bone.png" alt="hand" class="hand-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\ribcage2.png" alt="rib" class="rib-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\mutthi.jpg" alt="hand" class="hand2-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\khalcha_bone.jpg" alt="hip_bone" class="hip-bone-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\toe.jpg" alt="toe" class="toe-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\leg.jpg" alt="leg" class="leg-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\toe_lateral.jpg" alt="toe_lateral" class="toe_lateral-image" style="width: 600px;">
                </div>  
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine_doosra.jpg" alt="spine2" class="spine2-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\spine_another_angle.jpg" alt="spine3" class="spine3-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\kiti_spine.jpg" alt="spine4" class="spine4-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\fracture.jpg" alt="fracture" class="fracture-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\vertebra.jpg" alt="vertebra" class="vertebra-image" style="width: 600px;">
                </div> 
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\leg_fracture.jpg" alt="leg_fracture" class="leg-fracture-image" style="width: 600px;">
                </div>
                <div class="image-container">
                    <img src="Anatomy images\Prac_2\joint.jpg" alt="joint" class="joint-image" style="width: 600px;">
                </div>         

                <!-- More images can follow -->

                <!-- Joints Section -->
                <h2 id="joints"><strong>5. Sellos</strong></h2>
                <p>Las articulaciones son las áreas donde se unen dos o más huesos. La mayoría de las articulaciones son móviles y permiten que los huesos se muevan. Las juntas constan de lo siguiente:</p>
                <ul>
                    <li><strong>Cartílago:</strong>tipo de tejido que cubre la superficie de un hueso en una articulación. 
                    El cartílago ayuda a reducir la fricción del movimiento dentro de una articulación.</li><br>
                    <li><strong>Membrana sinovial: </strong>  un tejido llamado sinovial recubre la articulación y
                    la sella en una cápsula articular. La membrana sinovial secreta líquido sinovial (un líquido
                    transparente y pegajoso) alrededor de la articulación para lubricarla.
                        </li><br>
                    <li><strong>Ligamentos:</strong>Hay ligamentos resistentes (bandas elásticas gruesas de tejido
                     conectivo) que rodean la articulación para brindar soporte y limitar su movimiento.</li><br>
                    <li><strong>Tendones:</strong> Los tendones (otro tipo de tejido conectivo grueso) a cada lado
                     de la articulación se unen a los músculos que controlan el movimiento de esa articulación.</li><br>
                </ul>

                <div class="image-container">
                    <img src="Anatomy images\Prac_2\skeleton_2.jpg" alt="skeleton_2" class="skeleton_2-image" style="width: 600px;">
                </div>

                <ul>
                    <li><strong>Bolsas:</strong>las cavidades llenas de líquido llamadas bolsas entre huesos, ligamentos y
                     otras estructuras adyacentes ayudan a amortiguar la fricción de las articulaciones.</li><br>
                    <li><strong>Líquido sinovial:</strong>Líquido transparente y pegajoso secretado por la membrana sinovial.</li><br>
                    <li><strong>Fémur:</strong>  hueso del muslo</li><br>
                    <li><strong>Tibia:</strong> hueso de la espinilla</li><br>
                    <li><strong>Rótula: </strong> Hueso de la rodilla.</li><br>
                    <li><strong>Menisco: </strong>  Es una parte curva del cartílago de las rodillas y otras articulaciones.                    </li><br>
                    <p>Hay muchos tipos de articulaciones, incluidas las que no se mueven en los adultos, como las articulaciones 
                        suturales del cráneo. Las articulaciones que no se mueven se llaman articulaciones fijas. Otras 
                        articulaciones se mueven un poco, como las vértebras. Ejemplos de juntas móviles incluyen los siguientes:</p><br>
                    <li><strong>Enartrosis:</strong>las articulaciones esféricas, como las del hombro y la cadera, permiten el 
                    movimiento y la rotación hacia atrás, adelante y hacia los lados.</li><br>
                    <li><strong>Articulaciones en bisagra:</strong>las articulaciones en bisagra, como las de los dedos de las manos, 
                    las rodillas, los codos y los dedos de los pies, solo permiten movimientos de flexión y enderezamiento.</li><br>
                    <li><strong>Articulaciones giratorias:</strong>las articulaciones giratorias, como las del cuello, permiten un movimiento de rotación limitado.</li><br>
                    <li><strong> Articulaciones elipsoidales:</strong>Las articulaciones elipsoidales, como la articulación de la muñeca, permiten todo tipo de movimientos excepto movimientos rotatorios.</li><br>
                     <div class="image-container">
                        <img src="../Anatomy images\Prac_2\skull_.jpg" alt="skull" class="skull-image" style="width: 600px;">
                    </div>
                </ul>

                <!-- Questionnaire Section -->
                <h2 id="questionnaire">Cuestionario</h2>
                
                <div>
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
        </section>
    </div>
</body>

</html>
