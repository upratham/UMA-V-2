<?php
include('../header.php');
$practical_number = "C2";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 02: Reconocimiento y usos de Materiales Laboratorio</title>
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
            gap: 10px;
            padding: 15px;
            background-color: white;
            border-bottom: 2px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 1000;
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
        Teoría
    </button>

    <button class="tab-button active" onclick="openTab('Video')">
        <img src="logo video.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Video
    </button>

    <button class="tab-button active" onclick="openTab('3D Modelo')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        3D Modelo
    </button>

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
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#INTRODUCCIÓN TEÓRICA">INTRODUCCIÓN TEÓRICA</a></li>
                <li><a href="#MATERIALES Y EQUIPOS">MATERIALES Y EQUIPOS</a></li>
                <li><a href="#PARTE EXPERIMENTAL">PARTE EXPERIMENTAL</a></li>
                <li><a href="#CONCLUSIONES">CONCLUSIONES</a></li>
                <li><a href="#REFERENCIA">REFERENCIA</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 02: Reconocimiento y usos de Materiales Laboratorio</h1>
             
                <h2 id="OBJETIVOS">1. OBJETIVOS</h2>
                <ul>
                    <li>Identificar los materiales y equipos más utilizados en el laboratorio y sus funciones.</li>
                    <li>Adquirir habilidades en el uso y mantenimiento de materiales y equipos.</li>
                    <li>Clasifica estos materiales según las diferentes categorías conocidas</li>
                </ul>
                
                <h2 id="INTRODUCCIÓN TEÓRICA">2. INTRODUCCIÓN TEÓRICA</h2>
                <p> Antes de comenzar cualquier trabajo experimental, los estudiantes deben estar familiarizados con los materiales que se están utilizando. 
                    usado. Cada material tiene una función y su uso debe ser acorde a la tarea a realizar. 
                    El uso inadecuado de este material conduce a errores en los experimentos realizados y aumenta la 
                    riesgo en el laboratorio.</p>

                    <li>Los materiales de laboratorio se clasifican de la siguiente manera:</li>
                    <p>
                        A. <strong>Volumétrico:</strong> Dentro de este grupo se encuentran los materiales de vidrio calibrados a una temperatura determinada, 
                        permitiendo la medición de volúmenes exactos de sustancias (matraces, pipetas, buretas, 
                        cilindros graduados).<br>

                        B. <strong>Calentar o mantener:</strong>Son los que se utilizan para hacer mezclas o reacciones y también pueden ser 
                        sometido a calentamiento (vaso de precipitados, matraz Erlenmeyer, cristalizador, vidrio de reloj, matraz, prueba 
                        tubo).<br>

                        C. <strong>Equipo de medición:</strong> es un instrumento utilizado para comparar magnitudes físicas a través de un 
                        proceso de medición. Objetos y eventos previamente establecidos como estándares o patrones. 
                        se utilizan como unidades de medida y la medición da como resultado un número que es el 
                        relación entre el objeto de estudio y la unidad de referencia. Los instrumentos de medición son 
                        los medios por los cuales se realiza esta conversión. Ejemplos: báscula, medidor de pH, termómetro.<br>

                        D. <strong>Equipos especiales:</strong>Equipos auxiliares para trabajos de laboratorio. Ejemplos: centrífuga, 
                        horno, baño termostático, etc.<br>
                    </p>
                    <h2 id="MATERIALES Y EQUIPOS">3. MATERIALES Y EQUIPOS</h2>
                    <p><strong>3.1. - Descripción de materiales de uso general</strong></p>
                    <h3 id="Equipos">Equipos</h3>
                <div class="image-container">
                    <img src="Chemistry_Images\Practical 2\1.jpg" alt="Equipos" class="Equipos">
                </div>
                <ul>
                    
                    1.<strong>Tubos de ensayo:</strong> generalmente están hechos de Pyrex y se utilizan para realizar diversas pruebas químicas. 
                        reacciones utilizando pequeñas cantidades de reactivos. Los tubos de ensayo pueden ser tubos analíticos, que son 
                        más pequeños, y tubos centrífugos, cuya forma cónica se adapta a las de una centrífuga.</li><br>
                    2.<strong>Rejilla -</strong> Pueden ser de madera, plástico o metal y sirven para sujetar los tubos.</li><br>
                    3.<strong>Vasos de precipitado -</strong> Están hechos de vidrio Pyrex y se utilizan para realizar reacciones, especialmente aquellas 
                    que forman precipitados, donde su boca ancha permite una fácil evaporación. Pueden ser cortos o 
                    de altura, siendo este último alargado y de diámetro corto.</li><br>
                    4.<strong>Erlenmeyer -</strong> Están fabricados en vidrio pyrex y tienen forma cónica y una boca estrecha que permite la 
                    adaptación de tapones y conexión de tubos de conexión para generar algo de gas. También es muy
                     utilizados en los procesos de titulación.</li><br>
                     5.<strong>Bolas -</strong>Tienen forma esférica, lo que facilita un calentamiento uniforme mediante especiales 
                     mantos que se adaptan a esta forma. Su boca estrecha permite la adaptación de tapones. ellos pueden 
                     existir con o sin base.<br>
                     6.<strong>Vidrio de reloj -</strong>Se utiliza para cubrir vasos de precipitados y como soporte para sustancias. Vienen en varios 
                     diámetros.<br>
                     7.<strong>Piseta -</strong>Está hecha de plástico y se utiliza para contener agua destilada.<br>
                     8.<strong>Mortero -</strong>Pueden estar hechos de diversos materiales como vidrio, porcelana, hierro y ágata. 
                     principalmente; se utilizan para triturar y pulverizar algunas sustancias.<br>
                     9.<strong>Tubo en U -</strong>Se utiliza para contener algunas sustancias que absorben la humedad u otros gases como 
                     cloruro de calcio, cuando se hace circular un gas húmedo o contaminado a través de este tubo.<br>
                     10.<strong>Soporte -</strong>Suelen estar hechos de metal y se utilizan para sujetar un material o materiales como 
                     buretas, refrigerantes, anillos, etc.<br>
                     11.<strong>Pinzas con tuerca -</strong>Son piezas metálicas que se utilizan para sujetar un material al soporte universal.<br>
                     12.<strong>Varilla -</strong>Generalmente está hecha de vidrio y se utiliza para agitar líquidos y soluciones.<br>
                     13.<strong>Tapones -</strong>Pueden ser de caucho o corcho y se utilizan para cubrir o conectar sistemas.<br>
                     14.<strong>Tubos de conexión -</strong>Pueden ser de vidrio o caucho y se utilizan para conectar armados 
                     Por estos tubos pueden circular agua y en general gases.<br>
                     15.<strong>Cepillos -</strong>Se utilizan para lavar tubos de ensayo y otros materiales de vidrio.<br>
                </ul>
                
                <p><strong>3.2.- Descripción de materiales volumétricos</strong>
                    <li>Todos los materiales volumétricos están calibrados para una determinada temperatura, que suele ser de 20ºC. 
                    Por lo tanto, estos materiales no deben ser sometidos a calentamiento o líquidos calientes, ya que el vidrio 
                    sufre ampliaciones que alteran la lectura del volumen original.</li></p>

                <h3 id="Descripción">Descripción</h3>
                <div class="image-container">
                    <img src="Chemistry_Images\Practical 2\2.jpg" alt="Descripción" class="Descripción">
                </div>
                <ul>
                    <li><strong>Matraz aforado (ampolla):</strong> Se utiliza para preparar soluciones basadas en unidades químicas y físicas. 
                        En la parte superior tiene un indicador que indica el límite de volumen. Soluciones acuosas.
                        Forman un menisco cóncavo. Para la correcta calibración de la solución, la parte inferior del menisco 
                        debe coincidir con la línea de calibración. Figura 3</li>
                    <li><strong>pipeta:</strong> Se utiliza para medir alícuotas. Alícuota significa un volumen medido exactamente, usando un 
                        material volumétrico. Existen varios tipos de pipetas, como las pipetas normales y las volumétricas. 
                        pipetas, que se caracterizan por tener un bulbo en la parte central,.</li>
                    <li><strong>Tubo de ensayo:</strong> es un material utilizado para realizar algunas pruebas especiales en volúmenes aproximados. 
                        Los hay de varias capacidades como 25, 50, 100, 500 y 1000 cm3</li>
                    <li><strong>Bureta:</strong>se utiliza para procesos de titulación o evaluación de soluciones; consiste en descubrir 
                            la concentración de una solución llamada muestra, usando otra solución llamada patrón o 
                            estándar de concentración conocida y verificada.
                             Un proceso de titulación se completa cuando se alcanza el punto de equivalencia, que es detectado por el 
                            cambio de color de una sustancia llamada indicador. La solución que se va a cargar en la bureta puede 
                            ser incoloro o coloreado, fig. 3. Si la solución acuosa es incolora, forma un menisco cóncavo, 
                            y se debe considerar el menisco inferior para la lectura del volumen. Si la solución es coloreada, 
                            hay un nivel horizontal que marca el volumen correspondiente. Al leer el volumen gastado, 
                            debe evitarse el error de paralaje, fig. 4 colores.
                            La forma de leer un volumen gastado es colocando la vista a la misma altura que el menisco u horizontal. 
                            nivel.</li>
                </ul>

                <div class="image-container">
                    <img src="Chemistry_Images\Practical 2\3.jpg.jpg">
                </div>

                <h3 id="Materiales Calefactores"> 3.3.- Materiales Calefactores</h3>
                <div class="image-container">
                    <img src="Chemistry_Images\Practical 2\4.jpg" alt="Materiales Calefactores" class=" Materiales Calefactores">
                </div>

                <ul>
                    <li><strong>Fuente de energía térmica -</strong>Las principales fuentes de energía térmica son: 1a) quemador de alcohol; 1b) Bunsen 
                        quemador, que utiliza gas licuado como combustible y 1c) cocina eléctrica.<br>
                    <li><strong>Cápsula - :</strong> Generalmente fabricada en porcelana, se utiliza para calentar reactivos hasta una temperatura de 
                            500ºC. Se caracteriza por su boca ancha. 3.- Crisoles.- Pueden ser de porcelana, hierro, 
                            níquel, vidrio y platino. Se utiliza para procesos de calcinación en determinaciones analíticas y 
                            Puede ser sometido a una temperatura de hasta 1200ºC. Se caracteriza por su boca pequeña y 
                            tamaño pequeño.</li>
                    <li><strong>Rejilla de amianto -</strong>Se utiliza en procesos de calentamiento como elemento de interposición entre las 
                        fuente de calor y el material a calentar. Cumple dos objetivos principales: proteger el cristal 
                        material de posibles daños debido a cambios bruscos de temperatura y para distribuir el calor 
                        uniformemente sobre toda la base del material calentado.</li>
                    <li><strong>Pinzas para crisoles:</strong>Material metálico utilizado para manipular crisoles y otros materiales sometidos a 
                            altas temperaturas.</li>
                    <li><stromg>Abrazadera de madera:</stromg>Se utiliza para manipular tubos de ensayo.</li>
                    <li><strong>trípode -</strong>Se utiliza para soportar materiales que serán sometidos a calentamiento.</li>
                    <li><strong>Aro:</strong>También se utiliza para sujetar materiales y se fija a un soporte.</li>
                    </p>

                    <h3 id="Pesaje de materiales."> 3.4.- Pesaje de materiales.</h3>
                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\5.jpg" alt="Pesaje de materiales." class="Pesaje de materiales.">
                    </div>
                    <p>
                    <ul>
                        1.<strong>Balanza analítica -</strong> Es un instrumento bastante preciso para medir la cantidad de materia.</li><br>
                        2.<strong>Balanza -</strong>Es un instrumento que mide aproximadamente la cantidad de materia.</li><br>
                        3.<strong>Conjunto de pesas -</strong>Son masas estándar en base a las cuales y por simple comparación, la masa 
                        de cualquier otra sustancia llamada muestra.</li><br>
                        4.<strong>Espátula:</strong>se utiliza para manipular reactivos sólidos.</li><br>
                        5.<strong>Filtro de pesaje:</strong>Pueden estar hechos de vidrio o plástico y se utilizan para pesar sustancias líquidas.</li><br>
                        6.<strong>Desecador -</strong>Se utiliza para mantener un ambiente seco (libre de humedad) gracias al calcio. 
                        Cloruro contenido en su parte inferior, que absorbe la humedad del ambiente. El 
                        En su interior se colocan crisoles que han sido sometidos a calcinación.</li><br>
                    </ul></p>

                    <h3 id="Materiales de separación">  3.5.- Materiales de separación</h3>
                    <p>
                        1.<strong>Embudo actual.-</strong>Se utiliza para procesos de filtración.</li><br>
                        2.<strong>Embudo analítico.-</strong>Tiene estrías en los laterales que permiten una rápida filtración. El vástago o vástago de un embudo puede ser corto o largo.</li><br>
                        3.<strong>Embudo de separación.-</strong>Cuando en un sistema líquido se forman dos o más fases, se pueden 
                        se separa con este tipo de embudo, controlando la salida del líquido mediante una llave de paso.</li><br>
                        4.<strong>Embudo Buckner.-</strong>Se utiliza para filtración al vacío.</li><br>
                        5.<strong>Kithasato.-</strong>Se utiliza para conectar al embudo Buckner en procesos de filtración al vacío.</li><br>
                        6.<strong>Tubo generador de gas.-</strong>Se utiliza para la liberación de gas aprovechando una salida lateral para 
                        al que se conecta un tubo de goma.</li><br>
                        7.<strong>Refrigerante.-</strong>Se utiliza para condensar gases. Tiene entrada y salida de agua que circula 
                        permanentemente. Existen varios tipos de refrigerantes, uno de los más comunes es el refrigerante Liebig común</li><br>
                    </p>

                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\6.jpg">
                    </div>

                    <p>
                        <li><strong>3.6.- Manipulación de los reactivos.-</strong>Los reactivos sólidos se deben manipular siempre con espátula y procurando siempre 
                            Extraiga la cantidad necesaria de la botella y no demasiado. Una vez que el reactivo ha sido 
                            extraído, se debe tapar inmediatamente. Los reactivos líquidos se manipulan con pipetas que también 
                            tener una bombilla o bomba de succión. También se pueden verter en un tubo de ensayo. Si son volátiles 
                            Los reactivos deben almacenarse en lugares frescos y alejados de cualquier fuente de energía térmica. El 
                            los vapores de un líquido no deben llevarse directamente a la nariz; se debe estrechar la mano para que 
                            el vapor se detecta suavemente mediante el sentido del olfato. Los reactivos corrosivos como los ácidos no deben 
                            pipeteado con la boca tampoco; para ello se debe utilizar una pera de succión.</li>
                    </p>

                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\8.jpg">
                    </div>

                    <p>
                        <li>Siempre se debe evitar la contaminación de los reactivos limpiando y lavando adecuadamente los 
                            materiales utilizados en su manipulación. Todos los reactivos deben tener su correspondiente etiqueta de identificación. 
                            para evitar confusiones y accidentes. Cualquier accidente personal que pueda ocurrir con un reactivo, como 
                            quemaduras, debe lavarse inmediatamente con abundante agua. La cantidad de reactivos a utilizar en 
                            el laboratorio debe ser siempre en cantidades mínimas, evitando desperdicios innecesarios e inútiles de 
                            lo mismo. Al diluir ácidos concentrados, especialmente ácido sulfúrico, el ácido debe verterse 
                            sobre el agua y sobre las paredes laterales del recipiente para evitar peligrosas salpicaduras del ácido.</li>
                    </p>

                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\9.jpg">
                    </div>

                    <p>
                        <li><strong>3.7.- Lavado del material.-</strong>Para el lavado del material se utiliza previamente agua y detergente. Si 
                            Si hay sustancias grasas, se utilizan sustancias especiales como hidróxido de sodio diluido, 
                            solución sulfocrómica (una mezcla de una solución saturada de ácido sulfúrico concentrado y 
                            dicromato de potasio), solución sulfonítrica (una mezcla de ácido sulfúrico concentrado y 
                            ácido nítrico concentrado en una proporción de volumen 1:1) y acetona. El enjuague siempre debe realizarse con 
                            agua del fregadero y, mejor aún, un enjuague final con agua destilada si está disponible. para comprobar 
                            Ya sea que la cristalería esté limpia o bien lavada, llénela con agua destilada y déjela escurrir. Si 
                            Se forman gotas que se adhieren a las paredes del recipiente, significa que no está limpio o ha sido 
                            mal lavado.</li>
                    </p>

                    <h3 id="Laboratory techniques">   3.8.- Técnicas de laboratorio</h3>
                    <p>
                        <li><strong>3.8.1.- Procesos de calentamiento.-</strong>Para experimentos sencillos es suficiente utilizar un mechero de alcohol. una prueba 
                            El tubo que contiene un líquido nunca debe calentarse desde abajo; la forma correcta es calentarlo 
                            desde el centro, como se muestra en la Fig. 12. La forma incorrecta de calentar un tubo provoca 
                            salpicaduras. Sin embargo, al calentar un tubo con una solución, la boca del tubo debe estar 
                            dirigido hacia un lugar seguro.
                            Los tubos también se pueden calentar en un baño de agua, Fig. 13. Para ello, se vierte agua en un vaso de precipitados. 
                            y calentado. Los tubos a calentar se colocan en agua caliente.
                            La temperatura del baño se puede regular hasta el punto de ebullición.</li>
                    </p>

                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\10.jpg">
                    </div>

                    <h3 id="PARTE EXPERIMENTAL">  PARTE EXPERIMENTAL</h3>
                    <li>Recognize and describe the following materials</li>
                    <p>
                    <div class="image-container">
                        <img src="Chemistry_Images\Practical 2\Table 1.jpg"alt="Experimental Part" class="Experimental Part.">
                        <img src="Chemistry_Images\Practical 2\table 2.jpg">
                        <img src="Chemistry_Images\Practical 2\table 3.jpg">
                        <img src="Chemistry_Images\Practical 2\table 4.jpg">
                        <img src="Chemistry_Images\Practical 2\table 5.jpg">
                    </div></p>


                <h3 id="CONCLUSIONES">CONCLUSIONES</h3>
                    <ul>
                        <li>Indicar la importancia y ventaja de los materiales de vidrio en el laboratorio.</li>
                        <li>Señalar la importancia de clasificar y organizar los materiales de laboratorio.</li>
                        <li>Observar brevemente la importancia del modo y forma de manipulación de los reactivos.</li>
                        <li>Indique, en su opinión, cuáles son los materiales más utilizados.</li>
                        <li>Haz un breve comentario sobre la práctica.</li>
                    </ul>
    
                <h2 id="REFERENCIA">REFERENCIA</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Anatomical Terminology</a></p>
            
        </div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac_9.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Here, you will explore and understand each diagram by visualizing it in 3D.</p>

    <h3>1. Beaker</h3>
    <model-viewer src="beaker.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>2. Bunsen_Burner</h3>
    <model-viewer src="bunsen_burner.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>3. Burette</h3>
    <model-viewer src="burette.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>4. Chemistry Bottles</h3>
    <model-viewer src="chemistry_bottles.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>5. Compund Microscope</h3>
    <model-viewer src="compound_microscope.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>6. Flask</h3>
    <model-viewer src="flask.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>7. Funnel</h3>
    <model-viewer src="funnel.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>8. Graduated Cylinder</h3>
    <model-viewer src="graduated_cylinder.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>9. Mortar</h3>
    <model-viewer src="mortar.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>10. PCR Plate</h3>
    <model-viewer src="pcr_plate.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>11. Pipette</h3>
    <model-viewer src="pipette.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>12. Test Tube</h3>
    <model-viewer src="test_tube.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
</model-viewer>

<h3>13. Vernier Caliper</h3>
    <model-viewer src="verniercaliper.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 75%; height: 300;">
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_3.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_1.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>