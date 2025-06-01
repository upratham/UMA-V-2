<?php
include('../header.php');
$practical_number = "A8";
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
            <h3>Encantado</h3>
            <ul>
                <li><a href="#Fosa craneal media">Fosa craneal media</a></li>
                <li><a href="#Aracnoides">Aracnoides</a></li>
                <li><a href="#Piamadre">Piamadre</a></li>
                <li><a href="#Duramadre espinal">Duramadre espinal</a></li>
                <li><a href="#Factores de Riesgo">Factores de Riesgo</a></li>
                <li><a href="#Los músculos de la boca">Los músculos de la boca</a></li>
                <li><a href="#El músculo buccinador">El músculo buccinador</a></li>
                <li><a href="#Músculo depresor del labio inferior">Músculo depresor del labio inferior</a></li>
                <li><a href="#Músculo mentoniano">Músculo mentoniano</a></li>
                <li><a href="#Músculo cigomático menor">Músculo cigomático menor</a></li>
                </ul>
        </nav>


<!-- Main Content Section -->
<section id="practical-content">
    <!-- Theory Section -->
    <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 8:<br>ESTRUCTURAS QUE FORMAN LA CABEZA ÓSEA Y TODAS 
                    LAS ESTRUCTURAS BLANDAS QUE LO CUBREN</h1><br>
                
                <p>El cráneo humano consta de 22 huesos (o 29, si incluyes los huesos del oído interno y al 
                    hueso hioides) que en su mayoría están conectados por articulaciones osificadas, 
                    llamadas suturas. Este se divide en el neurocráneo y en el viscerocráneo. Su trabajo más 
                    importante es proteger el órgano principal del ser humano: el encéfalo.</p>

                <p>El encéfalo está protegido casi por completo por el neurocráneo, exceptuando al foramen 
                    magno y otros forámenes en la base del cráneo que sirven como puntos de entrada y 
                    salida para los vasos sanguíneos y pares craneales. Además, este les da soporte a todas 
                    las estructuras faciales.</p>
                <p>En este artículo, describiremos la anatomía y todos los reparos y estructuras importantes 
                    del cráneo.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Función</td>
                            <td>Proteger el encéfalo y dar soporte a las estructuras de la cara</td>
                        </tr>
                        <tr>
                            <td>Huesos</td>
                            <td>
                                Craneales (8): occipital, dos temporales, dos parietales, esfenoides, etmoides, frontal.<br>
                                Faciales (14): vómer, dos cornetes nasales, dos huesos nasales, dos huesos maxilares, mandíbula, dos huesos palatinos, dos huesos cigomáticos, dos huesos lagrimales.
                            </td>
                        </tr>
                        <tr>
                            <td>Fosa craneal anterior</td>
                            <td>
                                Contenido: lóbulos frontales de la corteza cerebral, bulbos olfatorios, tractos olfatorios, nervios ópticos, giros orbitarios.<br>
                                Forámenes: foramen etmoidal anterior, conducto óptico, forámenes de la lámina cribosa.
                            </td>
                        </tr>
                        <tr>
                            <td>Fosa craneal media</td>
                            <td>
                                Contenido: nervios troclear, abducens, oculomotor, oftálmico, maxilar y mandibular, hipófisis (glándula pituitaria), arteria carótida interna, lóbulos temporales de la corteza cerebral.<br>
                                Forámenes: fisura orbitaria superior, foramen redondo, foramen oval, conducto carotídeo, foramen lacerum, foramen espinoso.
                            </td>
                        </tr>
                        <tr>
                            <td id='Fosa craneal media'>Fosa craneal posterior</td>
                            <td>
                                Contenido: tronco del encéfalo, nervios facial, vestibulococlear, glosofaríngeo, vago, accesorio e hipogloso, vena yugular interna.<br>
                                Forámenes: foramen magno, conducto auditivo interno, foramen yugular, conducto del hipogloso.
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>El neurocráneo consiste de la bóveda craneal (o calvaria) y de la base del cráneo. La 
                    bóveda craneal se compone de los dos huesos parietales y partes del frontal y occipital. 
                    Las suturas más importantes son:</p>
                <ul>
                    <li>La sutura coronal (entre el hueso frontal y parietal).</li>
                    <li>La sutura sagital (divide ambos huesos parietales).</li>
                    <li>La sutura lambdoidea (cursa horizontalmente. entre el hueso occipital y ambos parietales)</li>
                </ul>
                <p>De un total de 33 suturas en el cráneo, estas son las tres fundamentales.</p>
                <p>La base del cráneo es la porción inferior del neurocráneo. Viéndola desde el interior, puede 
                    subdividirse en las fosas craneales anterior, media y posterior. La base del cráneo se
                    compone de partes del hueso frontal, etmoides, esfenoides, occipital y de los temporales.</p>
                <p>A todos los huesos anteroinferiores de la cavidad craneal se los conoce como el esqueleto 
                    facial. Algunos representantes son el hueso maxilar y mandibular. La órbita y la fosa (cavidad)
                    nasal están formadas por los huesos cigomáticos, nasales, palatinos, lagrimales, el vómer y
                    el cornete nasal inferior.</p>
                <p>Aprende todo acerca de los huesos del cráneo con nuestros artículos, tutoriales, diagramas 
                    rotulados y cuestionarios.</p>
                    
                <h3><strong>Fosa craneal media</strong></h3>

                <p>La fosa craneal media se encuentra un poco más profunda que la fosa craneal anterior.</p>
                <p>La fisura orbitaria superior, delimitada por el ala mayor y menor del hueso esfenoides,
                    contiene a los pares craneales troclear, abducens, oculomotor y oftálmico. La silla turca es 
                    una depresión en el hueso esfenoides, la cual en el centro de la fosa craneal media, forma 
                    la fosa pituitaria donde se encuentra la hipófisis (glándula pituitaria).
                    </p>
                <p>Otros forámenes importantes son:</p>
                <ul>
                    <li>Foramen redondo (nervio maxilar)</li>
                    <li>Foramen oval (nervio mandibular)</li>
                    <li>Conducto carotídeo (arteria carótida interna)</li>
                    <li>Fosa craneal posterior</li>
                    <li>El foramen más grande del cráneo es el foramen magno. Es a través de este que sale el 
                        tronco del encéfalo y se convierte en médula espinal. El foramen magno se sitúa en el centro
                        de la fosa craneal posterior. Se separa de la fosa craneal media por el dorso de la silla del 
                        hueso esfenoides y por el borde superior del hueso petroso.
                        </li>
                    <li>Conducto auditivo interno (nervio facial, nervio vestibulococlear) </li>
                    <li>Foramen yugular (vena yugular interna, nervio glosofaríngeo, nervio vago, nervio accesorio)</li>
                    <li>Conducto del hipogloso (nervio hipogloso)</li>
                </ul>

                <div class="image-container">
                    <img src="Anatomy images\Practical 8\uma1.png" alt="1" class="1">
                </div><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\3.jpg" alt="3" class="3">
                </div><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\4.jpg" alt="4" class="4">
                </div><br><br>
                <p>Existen tres capas de membranas conocidas como meninges que protegen el cerebro y la 
                    médula espinal. La capa interna delicada es la piamadre. La capa del medio es la 
                    aracnoidea, una estructura como una tela de araña llena de un líquido que amortigua el 
                    cerebro. La fuerte capa externa es denominada duramadre.</p>
                <p>Las meninges son tres membranas que protegen al sistema nervioso central, envolviendo 
                    al encéfalo y la médula espinal, separándolas así de las paredes de los huesos que las 
                    rodean (cráneo y columna vertebral). De acuerdo con su localización, estas se denominan: 
                    meninges craneales, aquellas que envuelven al encéfalo, y meninges espinales, aquellas que 
                    envuelven la médula espinal.</p>
                    <p>Sin embargo, las meninges craneales y espinales son contiguas una con la otra y consisten 
                        en tres capas meníngeas. Estas son, desde la más superficial a la más profunda:</p>
                <ul>
                    <li> Duramadre, también conocida como paquimeninge</li>
                    <li id='Aracnoides'> Aracnoides</li>
                    <li id='Piamadre'>Piamadre</li>
                </ul>
                <p>Estas capas limitan tres espacios clínicamente importantes: el espacio epidural, subdural y 
                    subaracnoideo. La función de las meninges es proteger al encéfalo y la médula espinal de 
                    traumas mecánicos, dar soporte a los vasos sanguíneos y formar una cavidad continua a 
                    través de la cual circula el líquido cefalorraquídeo (LCR).Específicamente, el LCR pasa entre 
                    las dos capas meníngeas internas (aracnoides y piamadre) que en conjunto son 
                    llamadas leptomeninges.</p>
                
                <p>En este artículo estudiaremos la anatomía y función de las meninges craneales y espinales.</p>

                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Definición</td>
                            <td>Tres capas membranosas que envuelven al encéfalo y la médula espinal.</td>
                        </tr>
                        <tr>
                            <td>Meninges y espacios meníngeos</td>
                            <td>
                                Meninges: duramadre, aracnoides, piamadre.<br>
                                Espacios meníngeos: espacio epidural, espacio subdural, espacio subaracnoideo.
                            </td>
                        </tr>
                        <tr>
                            <td>Función</td>
                            <td>Protección mecánica del encéfalo y la médula espinal, dar soporte a los vasos sanguíneos cerebrales y espinales, permite la circulación del líquido cefalorraquídeo (LCR).</td>
                        </tr>
                    </tbody>
                </table>
                <h4><strong>Aracnoides</strong></h4>
                <p>La aracnoides craneal es una meninge similar a una telaraña, se encuentra interpuesta entre
                    la duramadre y la piamadre. El espacio entre estas es llamado espacio subdural y de
                    acuerdo con algunos autores, contiene una capa muy fina de líquido. El espacio entre la 
                    aracnoides y la piamadre es llamado espacio subaracnoideo y está ocupado con líquido 
                    cefalorraquídeo (LCR). Además, todas las arterias y venas cerebrales se encuentran en 
                    ese espacio.</p>
                <p>La cara externa de la aracnoides se adhiere a la duramadre, formando una barrera que
                    previene la salida de LCR al espacio subdural. En los lugares donde la duramadre forma 
                    los senos venosos, la aracnoides muestra protuberancias en forma de hongos llamadas
                    granulaciones aracnoideas. La cara interna de la aracnoides muestra proyecciones
                    fibrosas finas llamadas trabéculas aracnoideas, que cruzan el espacio subaracnoideo y se 
                    fijan a la cara externa de la piamadre. Debido a sus similitudes embriológicas y celulares la 
                    piamadre y aracnoides juntas se denominan leptomeninges.</p>
                
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\5.jpg" alt="5" class="5">
                </div><br><br><br><br>

                <h4><strong>Piamadre</strong></h4>
                <p>La piamadre craneal es una membrana altamente vascularizada, que sigue de cerca el
                    contorno del encéfalo. No se encuentra directamente en la cara del encéfalo, sino que está 
                    separada de éste por un espacio fino llamado espacio subpial, formado por los pies terminales
                    de los astrocitos (glia limitans). Muchos vasos sanguíneos superficiales del encéfalo están 
                    relacionados con la piamadre. Sin embargo, dado que es una membrana muy fina, estos 
                    vasos sanguíneos se encuentran parcialmente incrustados en la espesura de la piamadre y
                    parcialmente suspendidos por las trabéculas aracnoideas.</p>
                <p>La función de la piamadre es separar físicamente el tejido neural de los vasos sanguíneos en
                    el espacio subaracnoideo, aumentando así la eficacia de la barrera hematoencefálica.
                    También contribuye a la degradación de neurotransmisores previniendo su acción 
                    prolongada en el tejido nervioso.</p>
    
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\6.jpg" alt="6" class="6">
                </div><br><br><br><br>

                <h4 id='Duramadre espinal'><strong>Duramadre espinal</strong></h4>
                <p>La duramadre de la médula espinal es diferente que la del encéfalo por tener solo una capa; 
                    la capa meníngea. La capa perióstica está ausente porque
                    el canal vertebral, a diferencia del cráneo, tiene su propio periostio verdader</p>
                <p>La duramadre espinal se inserta en su porción superior, a la membrana tectoria y al 
                    ligamento longitudinal posterior. En su porción inferior, se extiende a nivel de la vértebra S2,
                    llegando abajo de la terminación de la médula espinal (L1/L2).</p>
                <p>El espacio entre la duramadre espinal y el periostio de la columna vertebral es llamado
                    espacio epidural. Este se encuentra ocupado por tejido conectivo laxo y adiposo el cual es
                    atravesado por los plexos venosos vertebrales internos anterior y posterior</p>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\7.jpg" alt="7" class="7">
                </div><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\8.jpg" alt="8" class="8">
                </div><br><br>
                <p>El líquido cefalorraquídeo (LCR, representado en azul) se elabora a partir del tejido que
                    reviste los ventrículos (espacios huecos) en el cerebro. Fluye dentro del cerebro y la médula 
                    espinal y alrededor de estos para ayudar a amortiguarlos en caso de una lesión y para 
                    proporcionar nutrientes.</p>
                <p>Las infecciones de las derivaciones del líquido cefalorraquídeo (LCR) presentan morbilidad 
                    y mortalidad importantes. Éstas se producen principalmente durante la cirugía y por
                    infección de la herida quirúrgica. Las bacterias que están más implicadas son 
                    Staphylococcus spp. (> 50% resistentes a meticilina).</p>
                <p>Una de las principales complicaciones de las derivaciones de LCR son las infecciones. 
                    Representan el 45-52% de las meningitis/ventriculitis nosocomiales en adultos3,4.
                    En los shunts permanentes se han descrito incidencias muy variables (1,5-41%) y, 
                    actualmente, son del 5-15%. La incidencia por operación es del 2,7-14%, aunque en las 
                    últimas series es más baja: 4,2-6,2% por paciente2. Diversos factores se relacionan con la 
                    infección de las derivaciones de LCR</p>
                
                <table>
                    <thead>
                        <tr>
                            <th id='Factores de Riesgo'>Factores de Riesgo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Edades extremas de la vida (prematuridad y ancianos)</td>
                        </tr>
                        <tr>
                            <td>Revisiones del shunt</td>
                        </tr>
                        <tr>
                            <td>Infección previa del shunt</td>
                        </tr>
                        <tr>
                            <td>Estado previo y preparación deficiente de la piel y afeitado</td>
                        </tr>
                        <tr>
                            <td>Exposición de grandes superficies cutáneas durante la intervención</td>
                        </tr>
                        <tr>
                            <td>Número de personas en el quirófano y movimiento en el mismo</td>
                        </tr>
                        <tr>
                            <td>Experiencia del neurocirujano</td>
                        </tr>
                        <tr>
                            <td>Utilización de neuroendoscopio o neurocirugía previa</td>
                        </tr>
                        <tr>
                            <td>Catéter distal en contacto con válvula tricúspide (shunts ventrículo-atriales)</td>
                        </tr>
                        <tr>
                            <td>Duración de la intervención</td>
                        </tr>
                        <tr>
                            <td>Infección concomitante en otro lugar</td>
                        </tr>
                        <tr>
                            <td>Manipulación del catéter en la intervención</td>
                        </tr>
                        <tr>
                            <td>Malformaciones del tubo neural</td>
                        </tr>
                        <tr>
                            <td>Hemorragias intraventriculares y subaracnoides</td>
                        </tr>
                        <tr>
                            <td>Traumatismo craneoencefálico con fractura craneal y fístula del LCR</td>
                        </tr>
                    </tbody>
                </table><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\9.jpg" alt="9" class="9" width="600">
                </div><br><br>
                <p>Los músculos de la cara, también llamados músculos de la expresión facial, son un grupo 
                    de alrededor de 20 músculos planos que se ubican bajo la cara y piel cabelluda. La mayoría 
                    de ellos se originan desde los huesos o estructuras fibrosas del cráneo y se insertan en la 
                    piel.</p>
                <p>A diferencia de los otros músculos esqueléticos, en la anatomía del rostro los músculos no 
                    están cubiertos por fascia (a excepción del músculo buccinador). Estos músculos están 
                    ubicados alrededor de aberturas naturales de la cara, como la boca, ojos, nariz y oídos; o 
                    extendidos alrededor del cráneo y el cuello. Así entonces, podemos categorizarlos en los 
                    siguientes grupos:</p>
                <ul>
                    <li>Músculos de la boca (grupo bucolabial) </li>
                    <li>Músculos de la nariz (grupo nasal)</li>
                    <li>Músculos del cráneo (grupo epicraneano)  </li>
                    <li>delcuello Músculos del oído externo(grupo auricular)</li>
                    <li> Músculos de los párpados (grupo orbitario)</li>
                </ul>
                <p>La ubicación e inserciones de los músculos faciales les permiten producir gestos en el 
                    rostro, como reír, sonreír, y fruncir el ceño. Esta es la razón por la cual estos músculos 
                    también son denominados músculos de la expresión facial, o músculos de la mímica. Todos 
                    los músculos de la cara están inervados por el nervio facial (VII par craneal) y en su gran 
                    mayoría irrigados por la arteria facial. La anatomía de los músculos de la cara es compleja, 
                    así que si alguna vez te has estado preguntando cuántos y cuáles son los músculos de la 
                    cara, has llegado al lugar correcto.</p>
                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Definición y función</td>
                            <td>Grupo de músculos que se originan principalmente de los huesos del cráneo y se insertan en la piel de la cara para producir expresiones faciales.</td>
                        </tr>
                        <tr>
                            <td>Músculos</td>
                            <td>
                                Occipitofrontal, orbicular del ojo, corrugador superciliar, prócer, nasal, elevador del labio superior y del ala de la nariz, orbicular de la boca, elevador del labio superior, cigomático menor, cigomático mayor, elevador del ángulo de la boca (canino), risorio, depresor del ángulo de la boca, depresor del labio inferior, mentoniano, platisma.
                            </td>
                        </tr>
                        <tr>
                            <td>Inervación</td>
                            <td>Nervio facial (VII par craneal).</td>
                        </tr>
                        <tr>
                            <td>Irrigación</td>
                            <td>Arteria facial.</td>
                        </tr>
                    </tbody>
                </table><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 8\10.jpg" alt="10" class="10" width="600">
                </div><br><br>
                <p><strong id='Los músculos de la boca'>Los músculos de la boca,</strong> o el grupo bucolabial, es un amplio grupo muscular que forma 
                    un componente funcional que controla la forma y movimientos de la boca y los labios. 
                    Existen 11 músculos en este grupo y sus funciones incluyen:</p>
                <p><strong>Elevación y eversión del labio superior:</strong> elevador del labio superior, elevador del labio 
                    superior y del ala de la nariz, risorio, elevador del ángulo de la boca (canino), cigomático
                    mayor y cigomático menor.</p>
                <p>Descenso y eversión del labio inferior: depresor del labio inferior, depresor del ángulo de la 
                    boca, mentoniano</p>
                <p>Cierre de los labios: orbicular de la
                    boca.<br> Compresión de la mejilla:<br> 
                    buccinador.</p>
                <p>La mayoría de los músculos de la boca están conectados entre sí mediante una estructura 
                    central en la cual se insertan sus fibras. Esta estructura se denomina modiolo, está ubicada 
                    en los ángulos de la boca y está principalmente formada por fibras del buccinador, orbicular 
                    de la boca, depresor del ángulo de la boca y el cigomático mayor.</p>
                <p><strong>El orbicular</strong> de la boca es un músculo circular que rodea la boca y conforma la mayor parte
                    de los labios. Consta de dos partes: una porción central llamada labial y una periférica
                    denominada marginal. El límite entre ambas porciones corresponde, en superficie, al límite
                    entre la parte roja
                    </p>
                <p>del labio y la piel que lo rodea. Ambas porciones se originan a partir del modiolo, que es 
                    una estructura fibromuscular ubicada en los ángulos de la boca donde numerosos músculos 
                    convergen. Desde el modiolo, las fibras del músculo orbicular de la boca se expanden hacia 
                    medial para ocupar el área peribucal.
                    </p>
                <p>La porción marginal se ubica en la periferia y se dirige hacia medial de la periferia labial para 
                    insertarse en la dermis de la región labial de la cara. En la línea media, algunas de las fibras 
                    superiores se entremezclan con las del lado opuesto, dando origen al filtrum de la boca, 
                    específicamente del labio superior.</p>
                <p>La porción labial se extiende entre los modiolos de ambas comisuras de la boca. Algunas 
                    de las fibras se enroscan sobre sí mismas dando origen al borde del bermellón, que es el 
                    límite entre el bermellón (parte más roja del labio) y la piel adyacente.</p>
                <p>El orbicular de la boca está inervado por los ramos bucal y marginal mandibular del nervio
                    facial (VII par craneal). Su principal fuente de irrigación son las arterias labiales superior e 
                    inferior, ramas de la arteria facial, con algunas contribuciones provenientes de las arterias 
                    mentoniana (de la arteria alveolar inferior, rama de la arteria maxilar), infraorbitaria (de la
                    arteria maxilar) y facial transversa (de la arteria temporal superficial).</p>
                <p>La función del músculo orbicular de la boca es dar movimiento a los labios. Una contracción 
                    bilateral del músculo acerca los labios entre sí y cierra la boca. Una contracción aislada de 
                    ciertas partes del músculo puede producir diferentes movimientos en los labios como 
                    proyectarlos hacia adelante, producir arrugas en su superficie, entre otros. A través de estas 
                    acciones, el orbicular de la boca colabora con el habla y ayuda a producir numerosas 
                    expresiones faciales.
                    </p>
                <p id='El músculo buccinador'><strong>El músculo buccinador</strong> conforma la base muscular de la mejilla, ocupando el espacio entre
                    el maxilar y la mandíbula. Se compone de tres partes: una superior, una inferior y otra 
                    posterior.</p>
                <p>La parte superior se origina desde el proceso alveolar del maxilar a la altura de los tres
                    últimos molares.</p>
                <p>La parte inferior se origina del proceso alveolar de la mandíbula a la altura de los tres últimos 
                    molares.</p>
                <p>La parte posterior se origina a partir del rafe pterigomandibular.</p>
                <p>Las tres partes del músculo buccinador convergen hacia el ángulo de la boca y ocupan el 
                    espacio entre el maxilar y la mandíbula. En el ángulo de la boca, las fibras del buccinador 
                    se interdigitan con las de otros músculos faciales como el orbicular de la boca, risorio, 
                    depresor del ángulo de la boca y el cigomático mayor, conformando así el modiolo.</p>
                <p>El músculo buccinador está inervado por los ramos bucales del nervio facial (VII par craneal) 
                    y su irrigación proviene principalmente de la arteria bucal, rama de la arteria maxilar, con 
                    contribuciones de la arteria facial.</p>
                <p>La función del músculo buccinador es comprimir la mejilla, con lo que se consigue evitarlas 
                    mordidas accidentales durante la masticación. Esta compresión ejecutada por el buccinador 
                    también permite evitar que el alimento se acumule en el vestíbulo bucal y además sirve para 
                    impulsar aire al exterior a través de la boca, como al tocar instrumentos de viento o al silbar.
                    </p>
                <p>Músculo elevador del labio superior
                    El músculo elevador del labio superior es un músculo corto y triangular que se origina en el 
                    proceso cigomático del maxilar y del proceso maxilar del hueso cigomático. Desde su origen
                    el músculo se dirige hacia abajo y medial para insertarse en la piel y la submucosa del labio 
                    superior, donde sus fibras se mezclan con las de otros músculos faciales.
                    </p>
                <p>El elevador del labio superior está inervado por los ramos cigomático y bucal del nervio 
                    facial (VII par craneal). Su irrigación proviene de la arteria facial y de la rama infraorbitaria de
                    la arteria maxilar.</p>
                <p>La acción del elevador del labio superior consiste en asistir a otros músculos del grupo en 
                    la elevación y eversión del labio superior, exponiendo los dientes superiores o maxilares y 
                    profundizando los surcos nasolabiales. Esta acción es notable en expresiones faciales como 
                    la risa, la sonrisa y el gesto de desprecio.</p>
                <p id='Músculo depresor del labio inferior'><strong>Músculo depresor del labio inferior</strong><br>
                    El depresor del labio inferior es un corto músculo cuadrangular que se encuentra en la región 
                    del mentón. Se origina de la línea oblicua de la mandíbula y es continuo con la porción labial 
                    del platisma. El músculo se dirige hacia superior y medial para insertarse en la piel y
                    submucosa del labio inferior.</p>
                <p>La inervación del depresor del labio inferior corresponde al ramo marginal mandibular del
                    nervio facial (VII par craneal). Su irrigación proviene de la rama labial inferior de la arteria 
                    facial y de la rama mentoniana de la arteria alveolar inferior, rama de la arteria maxilar.</p>
                <p>Este músculo es el principal depresor del labio inferior. Junto con la porción labial del
                    platisma, su función es traccionar el labio hacia inferior y medial.
                    </p>
                <p><strong>Músculo elevador</strong> del labio superior y del ala de la nariz<br>
                    El músculo elevador del labio superior y del ala de la nariz es un músculo delgado y acintado 
                    que se ubica a ambos lados de la nariz. Se origina de la parte superior del proceso frontal 
                    del maxilar y desciende para insertarse en el pericondrio y la piel del cartílago alar mayor 
                    de la nariz. Algunas de sus fibras se dirigen hacia la parte lateral del labio superior y se 
                    mezclan a este nivel con fibras del elevador del labio superior y del orbicular de la boca.
                    </p>
                <p>El músculo elevador del labio superior y del ala de la nariz está inervado por los ramos 
                    cigomático y bucal del nervio facial (VII par craneal). Su irrigación proviene de la arteria facial
                    y de la rama infraorbitaria de la arteria maxilar.
                    </p>
                <p>La función del músculo elevador del labio superior y del ala de la nariz es elevar el ala de la 
                    nariz, tal como lo dice su nombre, y evertir el labio superior, así como también elevar, 
                    profundizar y aumentar la curvatura del surco nasolabial.</p>
                <p id='Músculo mentoniano'><strong>Músculo mentoniano</strong><br><br>
                    El músculo mentoniano es un corto músculo cónico ubicado en la región mentoniana. Se
                    origina de la cara anterior del cuerpo de la mandíbula y se hace superficial mientras 
                    desciende para insertarse en el mentón a nivel del surco mentolabial.
                    </p>
                <p>La inervación del músculo mentoniano proviene del ramo marginal mandibular del nervio
                    facial (VII par craneal). Está irrigado por la rama labial inferior de la arteria facial y la rama
                    mentoniana de la arteria alveolar inferior.
                    </p>
                <p>La acción del músculo mentoniano consiste en descender y evertir la base del labio inferior. 
                    Debido a la inserción del músculo, durante su contracción, también se generan arrugas en 
                    la piel del mentón. Estos movimientos contribuyen con varias acciones de la vida diaria 
                    como beber utilizando un vaso, y también con expresiones faciales como la tristeza, el 
                    desprecio y la duda.
                    </p>
                <h4>Músculo risorio</h4>
                <p>El risorio es un músculo de anatomía altamente variable perteneciente al grupo bucolabial. 
                    Se origina de numerosos puntos entre los que pueden incluirse la fascia parotídea, la fascia 
                    del masetero, las fibras del platisma y ocasionalmente el arco cigomático. Las fibras del 
                    músculo risorio convergen hacia medial y horizontalmente hacia los ángulos de la boca, 
                    donde se mezclan con otros músculos faciales para crear el modiolo.
                    </p>
                <p>La inervación del risorio proviene del ramo bucal del nervio facial (VII par craneal) y su
                    irrigación de la rama labial superior de la arteria facial.
                    </p>
                <p>El término risorio proviene de su acción, ya que esta consiste en traccionar los ángulos de 
                    la boca en sentido lateral y superior, provocando el gesto de la sonrisa.</p>
                <p>Músculo elevador del ángulo de la boca<br>
                    El músculo elevador del ángulo de la boca, conocido clásicamente como músculo canino, 
                    es un músculo delgado y plano que se origina de la fosa canina del maxilar. Su trayecto es 
                    descendente y casi vertical hacia el ángulo de la boca donde se inserta y mezcla con otros 
                    músculos para contribuir en la formación del modiolo.</p>
                <p>El músculo elevador del ángulo de la boca está inervado por los ramos cigomático y bucal 
                    del nervio facial (VII par craneal), mientras que su irrigación proviene de la rama labial
                    superior de la arteria facial y de la rama infraorbitaria de la arteria maxilar.</p>
                <p>Como su nombre sugiere, la función principal del músculo elevador del ángulo de la boca 
                    es levantar las comisuras labiales, colaborando así en la producción de la sonrisa en 
                    conjunto al músculo risorio y cigomáticos mayor y menor.</p>
                <p>Músculo depresor del ángulo de la boca<br>
                    El músculo depresor del ángulo de la boca es un músculo triangular ubicado lateralmente
                    en la región mentoniana. Se origina de la línea oblicua de la mandíbula y asciende en sentido
                    vertical para insertarse en el modiolo.</p>
                <p>La inervación del músculo depresor del ángulo de la boca proviene de los ramos marginal 
                    mandibular y bucal del nervio facial (VII par craneal). Está irrigado por la rama labial inferior
                    de la arteria facial y por la rama mentoniana de la arteria alveolar inferior.</p>
                <p>La función del músculo depresor del ángulo de la boca es el descenso de la comisura labial, 
                    lo cual contribuye a expresar sentimientos de tristeza o enojo. Además, la acción de este
                    músculo asiste en la apertura de la boca al hablar o comer.</p>
                <p>Músculo cigomático mayor<br>
                    El músculo cigomático mayor es un músculo delgado que se origina de la cara lateral del
                    hueso cigomático y se extiende diagonalmente hasta el ángulo de la boca. Aquí, este 
                    músculo colabora a la formación del modiolo al mezclarse con las fibras de otros músculos 
                    faciales.</p>
                <p>El músculo cigomático mayor está inervado por los ramos cigomático y bucal del nervio 
                    facial (VII par craneal), mientras que su irrigación proviene de la rama labial superior de la 
                    arteria facial. La función del músculo cigomático mayor es la elevación y tracción lateral del 
                    ángulo de la boca, produciendo el gesto de sonrisa al colaborar sinérgicamente con otros
                    músculos faciales.
                    </p>
                <h4 id='Músculo cigomático menor'>Músculo cigomático menor</h4>
                <p>El músculo cigomático menor, de forma similar a su contraparte mayor, tiene su origen en 
                    la cara lateral del hueso cigomático y se extiende diagonalmente hacia los labios. Se inserta
                    en la piel del labio superior, medial al músculo cigomático mayor.<br><br>
                    El músculo cigomático menor recibe su inervación por parte de los ramos cigomático y bucal 
                    del nervio facial (VII par craneal). Se encuentra irrigado por la rama labial superior de la
                    arteria facial.<br><br>
                    La acción del músculo cigomático menor es sinérgica con las de otros elevadores y 
                    eversores del labio superior, contribuyendo así a una serie de gestos como la sonrisa, la
                    desaprobación o el gesto de desagrado.<br><br>
                    Prueba nuestro cuestionario totalmente personalizable para comprobar tus conocimientos 
                    sobre los músculos de la boca. Puedes modificar el cuestionario para ampliarlo o reducirlo 
                    con los temas que desees
                    </p><br>
                
                

                <div class="image-container">
                    <img src="Anatomy images\Practical 8\11.jpg" alt="11" class="11" width="600">
                </div><br><br><br><br><br>

                <div class="image-container">
                    <img src="Anatomy images\Practical 8\12.jpg" alt="12" class="12" width="600">
                </div><br><br><br>

                <div class="image-container">
                    <img src="Anatomy images\Practical 8\13.jpg" alt="13" class="13" width="600">
                </div><br><br>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
                
            
</div>
      <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac8.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac8_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Boca detallada</h3>
    <model-viewer src="prac8.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Cráneo y cuello humanos</h3>
    <model-viewer src="human_skull_and_neck.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical9.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical7.php'">Práctica anterior</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>