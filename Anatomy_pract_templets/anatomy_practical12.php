<?php
include('../header.php');
$practical_number = "A12";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador UMA</title>
    <link rel="stylesheet" href="../styles.css">
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
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#Cavidad torácica">Cavidad torácica</a></li>
                <li><a href="#Existen 3 tipos de costillas">Existen 3 tipos de costillas</a></li>
                <li><a href="#El esternón">El esternón</a></li>
                <li><a href="#Las vértebras torácicas">Las vértebras torácicas</a></li>
                <li><a href="#Qué es la glándula mamaria">Qué es la glándula mamaria</a></li>
                <li><a href="#Cubierta de piel">Cubierta de piel</a></li>
                <li><a href="#Vasos y arterias">Vasos y arterias</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 12:
                    LÍMITES Y LAS ESTRUCTURAS DEL TÓRAX. CAMPOS PULMONARES Y EL MEDIASTINO. PROYECCIONES DE LAS VÍSCERAS INTRATORÁCICAS SOBRE LA PARED TORÁCICA, GLÁNDULAS MAMARIAS.                                                           
                </h1>
                    <p>
                        Cuando respiramos, el aparato respiratorio recibe oxígeno y elimina dióxido de
                        carbono. Las células de nuestro cuerpo necesitan oxígeno nuevo para vivir. A
                        medida que las células hacen su trabajo, generan y desechan dióxido de
                        carbono. Este intercambio de oxígeno y dióxido de carbono recibe el nombre de
                        <strong>respiración</strong>.
                    </p>
                    <p>
                        El aparato respiratorio incluye la nariz, la boca, la garganta, la laringe, la tráquea,
                        los pulmones y el diafragma.
                    </p>
                    <p>
                        El <strong>diafragma</strong> es un músculo ubicado entre el pecho y el abdomen que permite
                        que el cuerpo mueva el aire hacia el interior y el exterior del aparato respiratorio.
                        Cuando inhalamos (entrada de aire), el diafragma se mueve hacia abajo, en
                        dirección al abdomen, y los músculos de las costillas empujan a las costillas
                        hacia arriba y hacia afuera. Esto hace que la cavidad torácica se agrande y tome
                        aire a través de la nariz y la boca para enviarlo a los <strong>pulmones</strong>.
                    </p>
                    <p>
                        Cuando exhalamos (salida de aire), el diafragma se mueve hacia arriba y los
                        músculos de la pared torácica se relajan. Esto hace que la cavidad torácica se
                        achique y empuje el aire hacia el exterior del aparato respiratorio a través de la
                        nariz y la boca.
                    </p>
                    <p>
                        El aire entra en el aparato respiratorio a través de la nariz o de la boca y después
                        continúa su recorrido hacia los pulmones. En las fosas nasales, el aire se entibia
                        y humedece. En la nariz, unos pelos diminutos llamados <strong>cilios</strong> se encargan de
                        filtrar el polvo y otras partículas.
                    </p>
                    <p>
                        La cavidad nasal y la boca se unen en la parte posterior de la garganta, llamada
                        <strong>faringe</strong>. La faringe forma parte de dos sistemas (el aparato respiratorio y el
                        aparato digestivo) porque a través de ella pasan tanto el aire como los
                        alimentos.
                    </p>
                    <p>
                        En la parte inferior de la faringe, hay dos conductos: uno para el aire y otro para
                        los alimentos. Uno de esos conductos, que es exclusivamente para el aire, recibe
                        el nombre de <strong>laringe</strong>. Allí también se encuentran las cuerdas vocales, que
                        vibran para emitir sonidos cuando hablamos. (El otro conducto recibe el nombre
                        de esófago y es a través de él que los alimentos llegan hasta el estómago). La laringe está protegida por una pequeña lámina de tejido que recibe el nombre
                        de epiglotis. Cuando tragamos, la epiglotis cubre la laringe para impedir que los alimentos y los líquidos lleguen a los pulmones                        
                    </p>

                    <div class="image-container">
                        <img src="Anatomy images\12 prac\12.1.jpg" alt="Fowler position" class="center">
                    </div>
                    <br>

                    <p>La tráquea forma parte del conducto que continúa hasta llegar a la laringe. Las paredes de la tráquea tienen anillos rígidos de cartílago que la mantienen abierta. Además, está revestida de cilios, que expulsan los líquidos y las partículas extrañas de las vías aéreas para que no lleguen a los pulmones.<br><br>
                        Más adelante, la tráquea se divide en dos conductos (izquierdo y derecho) que reciben el nombre de bronquios. Los bronquios conectan la tráquea a los pulmones.
                        </p>
                            <p>
                                Los bronquios se ramifican y forman bronquios más pequeños o conductos
                                incluso más pequeños llamados <strong>bronquiolos</strong>. En el extremo de cada bronquiolo
                                hay pequeños sacos de aire que se denominan <strong>alvéolos</strong>. Este es el lugar en el
                                que ocurre el intercambio de oxígeno y dióxido de carbono. Cada persona tiene
                                cientos de millones de alvéolos en los pulmones. Esta red de alvéolos,
                                bronquiolos y bronquios recibe el nombre de <strong>árbol bronquial</strong>.
                            </p>
                            <p>
                                Los pulmones contienen tejido elástico que les permite inflarse y desinflarse
                                fácilmente. Están cubiertos por una capa delgada llamada <strong>pleura</strong>. El tórax es un
                                espacio hermético que aloja al árbol bronquial, los pulmones, el corazón y otras
                                estructuras. La parte superior y las partes laterales del tórax están formadas por
                                las costillas y los músculos. Estas paredes rodean a los órganos que se
                                encuentran dentro de la cavidad torácica y les sirven de protección. La parte
                                inferior de la cavidad torácica está formada por el diafragma.
                            </p>
                            <p>
                                Cada pocos segundos, con cada inhalación, el aire llena una gran parte de
                                los millones de alvéolos. El oxígeno pasa de los alvéolos a la sangre a través de
                                los capilares (pequeños vasos sanguíneos) que revisten las paredes alveolares.
                                Este proceso recibe el nombre de <strong>difusión</strong>. Una vez que el oxígeno pasa al
                                torrente sanguíneo, la hemoglobina lo captura en los glóbulos rojos. Esta sangre
                                con un alto contenido de oxígeno llega al corazón, que se encarga de bombearla
                                hacia el cuerpo. El oxígeno sale de la hemoglobina a través de pequeños
                                capilares presentes en todo el cuerpo y pasa a las células.
                            </p>
                            <p>
                                A medida que las células cumplen su función, generan dióxido de carbono. El
                                dióxido de carbono sale de las células e ingresa en los capilares para llegar
                                finalmente al torrente sanguíneo. La sangre con un alto contenido de dióxido de
                                carbono llega hasta el corazón, que se encarga de bombearla hacia los
                                pulmones. El dióxido de carbono pasa de los capilares que rodean a los alvéolos,
                                al interior de los alvéolos. El dióxido de carbono asciende por los bronquiolos y
                                los bronquios, atraviesa la tráquea y es exhalado.
                            </p>
                            <p>
                                El <strong>mediastino</strong> es un área que se encuentra en la línea media de la cavidad torácica,
                                rodeada por las pleuras izquierda y derecha. Se divide en mediastino
                                superior e inferior, donde el timo es más grande.
                            </p>
                            <p>
                                El mediastino inferior se encuentra subdividido en anterior, medio y posterior.
                                Cada compartimento del mediastino contiene varios órganos vitales, estructuras
                                vasculares y nerviosas que están íntimamente relacionadas entre sí.
                            </p>
                            <p>
                                El contenido tan valioso del mediastino indica su importancia desde el punto de
                                vista de la anatomía.
                            </p>

                    
                            <div class="image-container">
                                <img src="Anatomy images\12 prac\after1.png" alt="Fowler position" class="center">
                            </div>
                            <br>
                            
                        <h3 id = "Cavidad torácica">Cavidad torácica</h3>
                            Esta cavidad cilíndrica del tórax está rodeada por las paredes torácicas y el diafragma. Superiormente se comunica con el cuello, a través del orificio torácico superior. La cavidad torácica alberga tres compartimentos: cavidades pleurales izquierda y derecha y el mediastino. Las cavidades pleurales están ubicadas en las porciones laterales del tórax, contienen los pulmones y sus estructuras asociadas. El mediastino se ubica centralmente, entre estas.<br><br>
                            Mediastino<br>
                            El mediastino es un compartimento visceral de la cavidad torácica. Separa completamente las dos cavidades pleurales al ubicarse longitudinalmente entre ellas en una posición sagital media. Se extiende superoinferiormente desde la abertura torácica superior hasta el diafragma, anteroposteriormente desde el esternón hasta los cuerpos de las vértebras torácicas, y lateralmente desde la pleura mediastínica de las cavidades pleurales adyacentes. Los contenidos mediastínicos principales son el corazón, esófago, tráquea, nervios espinales torácicos y vasos sanguíneos.
                            </p>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\after1_1.png" alt="Fowler position" class="center">
                            </div>
                            <br>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.2.jpg" alt="Fowler position" class="center">
                            </div>
                            <br>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.3.jpg" alt="Fowler position" class="center">
                            </div>
                            <br>

                           <p>Bolsas diminutas llenas de aire en los extremos de los bronquiolos (ramas pequeñitas de los tubos de aire dentro de los pulmones). En los alvéolos se produce el intercambio de oxígeno y dióxido de carbono entre el pulmón y la sangre durante la respiración, es decir, la inspiración y la espiración de aire. El oxígeno que entra con cada inspiración atraviesa los alvéolos, pasa a la sangre y llega a los tejidos de todo el cuerpo. El dióxido de carbono que viene de los tejidos, viaja en la sangre, atraviesa los alvéolos y se expulsa del cuerpo durante la espiración.<br><br>
                            El término alvéolo se refiere a una cavidad o cuenco hueco en latín. Consecuentemente, existen diferentes tipos de alveolos en el cuerpo humano. Sin embargo, el uso más conocido del término alvéolo es para describir a los pequeños sacos de aire de los pulmones de los mamíferos, los que se conocen específicamente como alvéolos pulmonares.<br><br>
                            Los alvéolos pulmonares son una especie de sacos de aire localizados en los extremos finales del árbol bronquial. Existen más de setecientos millones de alvéolos en cada pulmón, donde facilitan el intercambio gaseoso de oxígeno y dióxido de carbono entre el aire inhalado y el torrente sanguíneo.
                            </p> 

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\after 3.png" alt="Fowler position" class="center">
                            </div>
                            <br>
                            
                        <p>El cuerpo humano está dividido en tres partes importantes: la cabeza, el tronco
                            y las extremidades. Concretamente, el tronco está dividido a su vez en tres partes conocidas como tórax, abdomen y pelvis. El tórax o caja torácica es la parte superior del tronco que empieza desde la base del cuello hasta el diafragma, el músculo que separa el tórax del abdomen. Además, tiene la forma de un cono con la base más grande que la parte superior y puede ensancharse para ayudar en la función de los pulmones. <br><br>
                            En el tórax se encuentran varios órganos vitales como el corazón, los pulmones, parte de la tráquea y del esófago, así como arterias y venas, por ejemplo, la arteria aorta y la vena cava. Por lo tanto, los huesos de la caja torácica protegen a los órganos vitales de posibles traumatismos, siendo esta una de sus funciones más importantes
                            </p>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.4.jpg" alt="Fowler position" class="center">
                            </div>
                            <br>
                        
                            <h2 id ="Existen 3 tipos de costillas" >Existen 3 tipos de costillas</h2>
                            <p>
                                <strong>Las costillas verdaderas:</strong> son las 7 primeras costillas que hay a cada lado, se
                                anclan tanto a las vértebras como al esternón y, por ello, son las costillas más
                                fuertes y firmes.
                            </p>
                            <p>
                                <strong>Las costillas falsas:</strong> las 3 costillas que siguen a las verdaderas en cada costado,
                                son las conocidas como falsas, llamadas así porque están unidas directamente
                                con las vértebras y al esternón se unen de forma indirecta, a través de una
                                extensión del cartílago. Por lo tanto, este tipo de costillas son mucho más móviles
                                que las verdaderas.
                            </p>
                            <p>
                                <strong>Las costillas flotantes:</strong> estas siguen a las falsas, encontramos 2 a cada lado y se
                                las llama flotantes por el hecho de estar solo unidas a las vértebras, ya que al
                                esternón no se unen de ninguna forma.
                            </p>
                            <h3 id = "El esternón">El esternón</h3>
                            <p>
                                Es un hueso plano que suele medir unos 15 centímetros de longitud y que se
                                encuentra situado en la parte frontal del tórax, conectando las costillas y
                                protegiendo a los órganos vitales por delante. Este hueso está subdividido en 3
                                partes:
                            </p>
                            <ul>
                                <li><strong>El manubrio:</strong> parte superior del esternón por la cual se une la primera costilla
                                verdadera de cada lateral y, a su vez, se articulan los huesos de la clavícula,
                                siendo este el punto de unión del tórax con las extremidades superiores.</li>
                                <li><strong>El cuerpo del esternón:</strong> es la parte más grande del esternón y se encuentra justo
                                en el medio unido al resto de costillas verdaderas directamente y a las falsas
                                indirectamente.</li>
                                <li><strong>La apófisis xifoides:</strong> parte inferior del esternón que normalmente tiene forma de
                                punta pequeña aunque, a veces, su forma puede variar. Durante muchos años
                                de nuestra vida es un cartílago, pero se va osificando hasta ser completamente
                                un hueso en la edad adulta. Además, es la única parte del esternón que no está
                                unida a ninguna costilla.</li>
                            </ul>
                            <h3 id = "Las vértebras torácicas">Las vértebras torácicas</h3>
                            <p>
                                Son las vértebras con menor movilidad y más grandes que hay, se encuentran a
                                continuación de las cervicales, que conectan con la cabeza, y antes de las
                                lumbares, que se unen con la pelvis y las extremidades inferiores. Por lo tanto,
                                estas 12 vértebras torácicas o dorsales están en la parte media de la columna
                                vertebral y se unen a las costillas gracias a su articulación. Se denominan con
                                una T delante que indica que pertenecen a la región torácica, por lo que
                                encontramos las vértebras desde la T1 hasta la T12.
                            </p>                        


                            <p>
                                Ahora que ya conoces cuáles son los huesos del tórax, quizás también te
                                interese leer cuáles son los huesos de la pierna o cuáles son las extremidades
                                del cuerpo humano.
                            </p>
                            <p>
                                La mama de una mujer adulta se encuentra entre la 2ª y la 6ª costilla en el eje
                                vertical y entre el esternón y la línea media axilar en el eje horizontal. Por término
                                medio mide de 10 a 12 cm y su diámetro antero-posterior es de 5 a 7 cm. Se
                                encuentra formada por tres estructuras principales: la piel, el tejido subcutáneo y
                                la <strong>glándula mamaria</strong>.
                            </p>
                            <p>
                                El interior de la mama se compone de una serie de glándulas mamarias de mayor
                                y menor tamaño, conectadas entre sí por unos conductos finos (galactóforos)
                                que tienen apariencia de ramilletes.
                            </p>
                            <p>
                                La glándula mamaria tiene como principal función la producción y secreción de
                                leche para la lactancia. La leche es producida en unas pequeñas glándulas
                                denominadas bulbos que se agrupan para formar lobulillos y estos, a su vez,
                                constituirán los lóbulos, verdaderas unidades funcionales. Estas estructuras
                                glandulares están conectadas por unos tubos denominados ductos que irán
                                confluyendo en otros de mayor tamaño hasta desembocar en el pezón.
                            </p>
                            
                             <h3 id = "Qué es la glándula mamaria">Qué es la glándula mamaria</h3>
                            

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.5.jpg" alt="Fowler position" class="center">
                            </div>
                            <br>

                        <p>Como es natural, la mama pasa por diferentes fases dependiendo del estado hormonal de la mujer: durante el embarazo y la lactancia, la mayor parte del tejido mamario es glandular, el resto del tiempo predomina el estroma. Tras la menopausia hay una disminución generalizada de ambos componentes con una atrofia del tejido glandular y persistencia de los ductos, lo que justifica la incidencia de cáncer de mama en estas edades.</p> 

                        <div class="image-container">
                            <img src="Anatomy images\12 prac\12.6.jpg" alt="Fowler position" class="center">
                        </div>
                        <br>

                        <p>Las glándulas mamarias son exclusivas de los mamíferos, con su función específica de sintetizar, secretar y proporcionar leche al recién nacido. Dada esta función, es solo durante el ciclo de embarazo/lactancia que la glándula alcanza un estado de desarrollo maduro gracias a las influencias hormonales a nivel celular que provocan modificaciones drásticas en la micro y macroanatomía de la glándula, transformándola en un órgano secretor de leche. El desarrollo puberal y postpuberal de la mama en las mujeres ayuda a preparar la glándula para que asuma un estado funcional durante el embarazo y la lactancia.</p>
                        <p>Sorprendentemente, este órgano tiene la capacidad de regresar a un estado de
                            reposo tras el cese de la lactancia y, a continuación, volver a someterse al mismo ciclo de expansión y regresión de nuevo en embarazos posteriores durante toda la vida reproductiva. Esta plasticidad sugiere una estrecha regulación hormonal, de suma importancia para el funcionamiento normal de la glándula. En este artículo de revisión se presenta el estado actual del conocimiento de la macro y microanatomía normal de la glándula mamaria humana y los distintos cambios que sufre durante las etapas clave del desarrollo que la caracterizan, desde la vida embrionaria hasta la postmenopausia. Además, se analizan los avances recientes en el conocimiento del funcionamiento normal de la mama durante la lactancia, con especial referencia a la leche materna, su composición y cómo puede utilizarse como herramienta para aumentar los conocimientos sobre el desarrollo y la función normales y anómalos de la mama. Por último, se analizan los rasgos anatómicos y moleculares asociados con la expansión anómala de la mama para sentar las bases para futuras comparaciones que puedan arrojar luz sobre el origen del cáncer de mama.
                            </p>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.7.jpg" alt="Fowler position" class="center">
                            </div>
                            <br>

                        <p>Las glándulas mamarias son los órganos que, en todos los mamíferos, producen
                            leche para la alimentación de sus crías o hijos durante los primeros meses o semanas de vida. Estas glándulas exocrinas son glándulas sudoríparas<br><br>
                            Los elementos primarios de una glándula mamaria son los alvéolos (estructuras tubulares huecas de unos cuantos milímetros de longitud que representa el 90% de la estructura del seno) recubiertos por células epiteliales y rodeados por células mioepiteliales. Estos alvéolos se reúnen formando grupos llamados lóbulos y cada uno de estos lóbulos posee un ducto lactífero que drena en los orificios del pezón. En las células mioepiteliales, que pueden contraerse de forma similar a las musculares, la leche es impelida desde los alvéolos, a través de los ductos lactíferos hacia el pezón, donde se almacena en engrosamientos (senos) de los ductos. A medida que el bebé comienza a succionar se inicia el "reflejo hormonal de relajación" y la leche se segrega -no se aspira desde la glándula- a la boca del bebé.
                            </p>

                        <div class="image-container">
                                <img src="Anatomy images\12 prac\12.8.jpg" alt="Fowler position" class="center">
                        </div>
                        <br>

                        <p>Los conductos por los que se genera la leche materna se dividen en los conductos intralobulares, los conductos interlobulares y los conductos colectores comunes o galactóforos. Estos últimos son irregulares y sinuosos con un número no inferior a doce ni superior a veinte. Terminan introduciéndose en la base del pezón y lo recorren hasta su parte exterior. Todos estos elementos de la GM están unidos entre sí por un tejido denso de color blanquecino que sirve de base para nervios y vasos.<br><br>
                            Cubierta de células adiposas<br>
                            Estas cubiertas están situadas junto a la GM formando dos láminas diferenciadas, la anterior mucho más gruesa y la posterior bastante más delgada que la anterior. La existencia de estas dos capas que la rodean provocan que la
                            </p>
                        <p>superficie exterior de la glándula no sea lisa sino que tengan una estructura
                            irregular que llegan a formar fosillas y crestas, depresiones o salientes. Las crestas son parte de las láminas conjuntivas y se insertan en la piel y es un elemento fundamental de la fijación de la GM y por tanto del propio pecho. Estas células forman una especie de celdas alrededor de la glándula y en ellas se acumula el tejido adiposo.
                            </p>
                        <h3 id = "Cubierta de piel">Cubierta de piel</h3>
                        <p>La piel recubre la GM y aunque tiene una apariencia muy uniforme, es muy diferente según la parte del pecho en la que se encuentre. Pueden distinguirse en la siguiente clasificación:<br><br>
                            Piel de la parte periférica, muy delgada y con gran flexibilidad, en ella se pueden encontrar folículos pilosos poco desarrollados y algunas glándulas sebáceas.<br><br>
                            Piel de la zona de la areola del pezón que es más delgada que la anterior, más oscura siendo en algunos casos muy oscura y con muy poca grasa. Esta zona es la elegida por muchos cirujanos plásticos para llevar a cabo la incisión desde la cual introducir la prótesis en la operación de aumento de pecho, ya que esta diferencia de pigmentación y color consigue disimular muy bien la futura cicatriz que llega a ser casi invisible. En esta zona se encuentra el músculo areolar y las glándulas de la areola.<br><br>
                            Piel de la zona del pezón o zona mamilar, que es la que cubre el pezón, de tono más oscuro y con numerosas papilas.
                            </p>
                        <h3 id = "Vasos y arterias">Vasos y arterias</h3>
                        <p>Los vasos o arterias que se encuentran en el pecho para nutrirlo proceden de tres zonas principales: de la arteria mamaria interna -que es la más importante-, de la arteria torácica inferior y de las arterias intercostales. Está nutrido también por numerosas venas comunicadas con el abdomen y con la zona del cuello, además de diversos nervios y linfáticos que llevan a cabo distintas funciones.<br><br>
                            Todo el tejido excretor de leche que se dirige hacia un único ducto se denomina "glándula mamaria simple"; se define como "glándula mamaria compuesta" a todas las glándulas mamarias simples que abastecen un pezón. Las mujeres tienen normalmente dos glándulas mamarias compuestas, una en cada mama y cada una consta de entre 10 a 12 glándulas simples. La presencia de más de dos pezones se llama politelia y más de dos glándulas mamarias compuestas polimastia.<br><br>
                            Las glándulas mamarias son auténticas fábricas de proteínas, por lo que varias empresas han diseñado animales transgénicos, principalmente cabras y vacas, para producir proteínas de uso farmacéutico. Las glicoproteínas compuestas, como los anticuerpos monoclonales o la antitrombina, no se pueden producir por ingeniería genética de bacterias y la producción en animales vivos es mucho más barata que el uso de cultivo celular mamífero.<br><br>
                            </p>
                        <p>La leche materna humana es el alimento natural producido por la madre para
                            alimentar al recién nacido. Se recomienda como alimento exclusivo para el lactante hasta los 6 meses de edad, y con alimentación complementaria hasta los 2 años de edad, ya que contiene todos los nutrientes necesarios para su correcto crecimiento y desarrollo.<br><br>
                            Además, contiene inmunoglobulinas y otras sustancias que protegen al bebé frente a infecciones y contribuye a estrechar el vínculo madre-hijo, favoreciendo un adecuado desarrollo psicomotor.<br><br>
                            Además, se recomienda extender la lactancia hasta los dos años o más según recomendaciones de la OMS. Las infecciones y alergias son más raras en los niños criados a pecho que en los alimentados con biberón. Si bien es cierto que el niño viene al mundo protegido con anticuerpos, esta protección desaparece al nacer y las inmunoglobulinas o anticuerpos presentes en la leche materna ocupan su lugar y le protegen hasta que su propio cuerpo los genera. El bebé recibe la primera leche durante los primeros días de vida, esta leche, también llamada calostro es muy nutritiva, espesa y amarillenta, proporciona anticuerpos importantes que fortalecen su sistema inmunológico y revisten la pared intestinal.<br><br>
                            </p>

                            <div class="image-container">
                                <img src="Anatomy images\12 prac\12.9.jpg" alt="Fowler position" class="center">
                        </div>

                       
</div>

           <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac12.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac12_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Anatomía Femenina Uno.</h3>
    <model-viewer src="prac12.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Anatomía Femenina Dos.</h3>
    <model-viewer src="prac12_part2.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical11.php'">Práctica anterior</button>
    <button class="styled-button" onclick="window.location.href='../anatomia/Anatomia.html'">Página principal</button>
</div>
</footer>

</body>
</html>