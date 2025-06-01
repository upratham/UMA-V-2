<?php
include('../header.php');
$practical_number = "A4";
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
        <!-- Sidebar title -->
        <h2>Contenido</h2>
        <div class="overview-link">
        <ul>
        <li><a href="#practical-content">Objetivos</a></li> 
        <li><a href="#cardiovascular-system">Sistema cardiovascular</a></li>
        <li><a href="#respiratory-system">Sistema respiratorio</a></li>
        </ul>
    </nav>

   <!-- Main Content Section -->
   <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
            <h1>PRÁCTICA N° 4: <br>ESTRUCTURAS DEL APARATO DIGESTIVO Y URINARIO</h1>
            <h3 id="objectives"><strong>1. OBJETIVOS</strong></h3>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema digestivo y topografía 
                    abdominal.</li>
                <li>Relacionar las regiones del cuerpo Sistema digestivo y topografía 
                    abdominal y patologías relacionadas.
                    </li><br>
            </ul>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\1.jpg" alt="1" class="1-image" style="width: 600px;">
            </div><br><br><br>
        
            <div class="image-container">
                <img src="Anatomy images\Practical 4\2.jpg" alt="2" class="2-image" style="width: 600px;">
            </div>

            <section id="example-table">
                
                <table class="table-container">
                    <tr>
                        <th>Hipocondrio Derecho</th>
                        <th>Regi&oacute;n Epig&aacute;strica</th>
                        <th>Hipocondrio Izquierdo</th>
                    </tr>
                    <tr>
                        <td>
                            H&iacute;gado <strong>(l&oacute;bulo derecho)</strong><br>
                            Ves&iacute;cula biliar<br>
                            Ri&ntilde;&oacute;n derecho<br>
                            Gl&aacute;ndula suprarrenal<br>
                            Colon<strong>(&aacute;ngulo derecho)</strong>
                        </td>
                        <td>
                            H&iacute;gado<strong> (l&oacute;bulo izquierdo)</strong><br>
                            Est&oacute;mago curvatura menor<br>
                            <strong>(cuerpo y p&iacute;loro)</strong><br>
                            P&aacute;ncreas <strong>(cabeza y cuerpo)</strong><br>
                            Duodeno <strong>(porciones 1 y 4)</strong><br>
                            Aorta abdominal<br>
                            Vena cava inferior<br>
                            Tronco cel&iacute;aco
                        </td>
                        <td>
                            Bazo<br>
                            Est&oacute;mago <strong>(fundus y cuerpo)</strong><br>
                            H&iacute;gado<strong> (l&oacute;bulo izquierdo)</strong><br>
                            P&aacute;ncreas <strong>(cola)</strong><br>
                            Ri&ntilde;&oacute;n izquierdo<br>
                            Gl&aacute;ndula suprarrenal<br>
                            Colon <strong>(&aacute;ngulo izquierdo)</strong>
                        </td>
                    </tr>
                    <tr>
                        <th>Flanco Derecho</th>
                        <th>Regi&oacute;n Umbilical</th>
                        <th>Flanco Izquierdo</th>
                    </tr>
                    <tr>
                        <td>
                            Colon ascendente<br>
                            Ri&ntilde;&oacute;n derecho <strong>(polo inferior)</strong><br>
                            Parte de Duodeno y Yeyuno
                        </td>
                        <td>
                            Colon transverso<br>
                            P&aacute;ncreas (cabeza)<br>
                            Duodeno <strong>(porciones 2, 3, 4)</strong><br>
                            Yeyuno<br>
                            Mesenterio<br>
                            Aorta abdominal<br>
                            Vena cava inferior<br>
                            Ur&eacute;teres <strong>(parte superior)</strong><br>
                            Pelvis renal
                        </td>
                        <td>
                            Colon descendente<br>
                            Ri&ntilde;&oacute;n izquierdo <strong>(polo inferior)</strong><br>
                            Yeyuno e Ileon<br>
                            Ur&eacute;teres
                        </td>
                    </tr>
                    <tr>
                        <th>Fosa Il&iacute;aca Derecha</th>
                        <th>Regi&oacute;n Hipog&aacute;strica</th>
                        <th>Fosa Il&iacute;aca Izquierda</th>
                    </tr>
                    <tr>
                        <td>
                            Ciego<br>
                            Ap&eacute;ndice<br>
                            Ileon<br>
                            Ovario derecho<br>
                            Cord&oacute;n esperm&aacute;tico derecho
                        </td>
                        <td>
                            Ur&eacute;teres <strong>(parte terminal)</strong><br>
                            Colon sigmoide<br>
                            Vejiga<br>
                            &Uacute;tero y vagina<br>
                            Pr&oacute;stata<br>
                            Recto
                        </td>
                        <td>
                            Colon sigmoideo<br>
                            Ovario izquierdo<br>
                            Cord&oacute;n esperm&aacute;tico izquierdo
                        </td>
                    </tr>
                </table>
            </section>

            <p>El aparato digestivo está formado por el tracto gastrointestinal, también 
                llamadotracto digestivo, y el hígado, el páncreas y la vesícula biliar. El tracto 
                gastrointestinal es una serie de órganos huecos unidos en un tubo largo y retorcido
                que va desde la boca hasta el ano. Los órganos huecos que componen el tracto 
                gastrointestinal son la boca, el esófago, el estómago, el intestino delgado, el 
                intestino grueso y el ano. El hígado, el páncreas y la vesícula biliar son los órganos 
                sólidos del aparato digestivo.</p>
                
            <p>El intestino delgado tiene tres partes. La primera parte se llama duodeno. El yeyuno 
                está en el medio y el íleon está al final. El intestino grueso incluye el apéndice, el
                ciego, el colon y el recto. El apéndice es una bolsita con forma de dedo unida al ciego.
                El ciego es la primera parte del intestino grueso. El colon es el siguiente. El recto es 
                el final del intestino grueso.
                </p>

            <p>Las bacterias en el tracto gastrointestinal, también llamadas flora intestinal o microbiota, ayudan con la digestión. Partes de los 
                sistemas nerviosos ycirculatorios también ayudan. Trabajando juntos, los nervios,
                las hormonas, las bacterias, la sangre y los órganos delaparato digestivo digieren 
                los alimentos y líquidos que una persona come o bebe cada día.</p><br><br>

            <div class="image-container">
                <img src="Anatomy images\Practical 4\3.jpg" alt="3" class="3-image" style="width: 600px;">
            </div><br><br>

            <p>La digestión es importante porque el cuerpo necesita los nutrientes provenientes de
                los alimentos y bebidas para funcionar correctamente y mantenerse sano. Las 
                proteínas, las grasas, los carbohidratos, las vitaminas Enlace externo del NIH, los 
                minerales Enlace externo del NIH y el agua son nutrientes. El aparato digestivo 
                descompone químicamente los nutrientes en partes lo suficientemente pequeñas 
                como para que el cuerpo pueda absorber los nutrientes y usarlos para la energía, 
                crecimiento y reparación de las células.
                </p>

            <p>Las proteínas se descomponen químicamente en aminoácidos
                Las grasas se descomponen químicamente en ácidos grasos y glicerol Los 
                carbohidratos se descomponen químicamente en azúcares simples
                </p>
            <h1 id="Sistema Digestivo">Tabla del Sistema Digestivo</h1>
            <table class="table-container">
                <thead>
                    <tr>
                        <th>&Oacute;rgano</th>
                        <th>Movimiento</th>
                        <th>Jugos digestivos que son a&ntilde;adidos</th>
                        <th>Part&iacute;culas de alimentos que son descompuestos qu&iacute;micamente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Boca</td>
                        <td>Masticar</td>
                        <td>Saliva</td>
                        <td>Almidones, un tipo de carbohidrato</td>
                    </tr>
                    <tr>
                        <td>Es&oacute;fago</td>
                        <td>Peristalsis</td>
                        <td>Ninguno</td>
                        <td>Ninguno</td>
                    </tr>
                    <tr>
                        <td>Est&oacute;mago</td>
                        <td>El m&uacute;sculo superior en el est&oacute;mago se relaja para permitir la entrada de los alimentos y el m&uacute;sculo inferior mezcla los alimentos con el jugo digestivo</td>
                        <td>&Aacute;cido estomacal y enzimas digestivas</td>
                        <td>Prote&iacute;nas</td>
                    </tr>
                    <tr>
                        <td>Intestino delgado</td>
                        <td>Peristalsis</td>
                        <td>Jugo digestivo del intestino delgado</td>
                        <td>Harinas, prote&iacute;nas y carbohidratos</td>
                    </tr>
                    <tr>
                        <td>P&aacute;ncreas</td>
                        <td>Ninguno</td>
                        <td>Jugo pancre&aacute;tico</td>
                        <td>Carbohidratos, grasas y prote&iacute;nas</td>
                    </tr>
                    <tr>
                        <td>H&iacute;gado</td>
                        <td>Ninguno</td>
                        <td>Bilis</td>
                        <td>Grasas</td>
                    </tr>
                    <tr>
                        <td>Intestino grueso</td>
                        <td>Peristalsis</td>
                        <td>Ninguno</td>
                        <td>Las bacterias en el intestino grueso tambi&eacute;n pueden descomponer qu&iacute;micamente los alimentos</td>
                    </tr>
                </tbody>
            </table><br><br>

             <div class="image-container">
                <img src="Anatomy images\Practical 4\4.jpg" alt="4" class="4-image" style="width: 600px;">
            </div><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\5.jpg" alt="5" class="5-image" style="width: 600px;">
            </div>
            <h2 id="Glándulas anexas"><strong>Glándulas anexas</strong></h2>
            <ul>
                <li><strong>ándulas salivares.</strong> Segregan la saliva a la cavidad bucal. La 
                    saliva tiene una función digestiva y de protección de la cavidad 
                    bucal. Asimismo, facilita el proceso de masticación y deglución 
                    de los alimentos.</li>
                <li><strong>Hígado.</strong> la víscera más voluminosa del organismo. Está 
                    ubicado debajo del diafragma en la parte derecha de la zona 
                    abdominal. Sus funciones principales son:
                </li><br>
            </ul>
            <p>Secretora. Producción de bilis y su evacuación hacia el intestino delgadoa través 
                del conducto hepático.</p>
            <p>Metabólica. Participa de forma directa en el metabolismo de los hidratos decarbono, 
                las grasas y las proteínas procedentes de la absorción intestinal de los alimentos 
                digeridos.</p>
            <p>De desintoxicación. Tiene la capacidad para transformar en inocuas las 
                sustancias perjudiciales o tóxicas para el organismo.</p>
            <p><strong>De depósito:</strong> Almacena sustancias de alto poder energético.</p>
            <ul>
                <li><strong>Vesícula biliar:</strong> Glándula en forma de saco, situada en la cara 
                    inferior del hígado. Actúa como depósito: almacena y concentrala bilis producida por el 
                    hígado y la mantiene dispuesta para su evacuación al duodeno en el momento 
                    necesario.</li>
                <li><strong>Páncreas:</strong> Glándula de forma alargada situada transversalmente 
                    en la parte posterior de la cavidad abdominal. Desempeña dos 
                    funciones principales:
                    <ul>
                        <li> De carácter <strong> exocrino:</strong> segrega el <strong>jugo pancreático </strong>
                            que se libera al duodeno e interviene en ladigestión de los alimentos.</li>
                        <li>De carácter<strong> endocrino:</strong> produce <strong>hormonas</strong> que se 
                            vierten directamente a la sangre, la más importante es la 
                            insulina, que regula la cantidad de glucosa dela sangre.
                        </li><br>
                    </ul>
                </li><br>
            </ul>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\6.jpg" alt="6" class="6-image" style="width: 600px;">
            </div>

        <section id="SISTEMA URINARIO OBJETIVOS">
            <h1>SISTEMA URINARIO</h1>
            <h3><strong>1. OBJETIVOS</strong></h3>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema urinario.</li>
                <li>Relacionar las regiones del cuerpo Sistema urinario 
                    y patologías relacionadas.                    
                </li><br>
            </ul>
            <p>Conjunto de órganos que producen y eliminan la orina del cuerpo. El sistema urinario 
                se divide en dos partes: el sistema urinario superior incluye los riñones y los uréteres 
                (vías urinarias altas), y el sistema urinario inferior incluye la vejiga y la uretra (vías 
                urinarias bajas)</p>

            <div class="image-container">
                <img src="Anatomy images\Practical 4\7.jpg" alt="7" class="7-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\8.jpg" alt="8" class="8-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\9.jpg" alt="9" class="9-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\10.jpg" alt="10" class="10-image" style="width: 600px;">
            </div>


</section>
</div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac4.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac4_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac4_part3.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Estómago humano</h3>
    <model-viewer src="realistic_human_stomach.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Páncreas humano</h3>
    <model-viewer src="pancreas.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>3. Riñón humano</h3>
    <model-viewer src="kidney.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>4. Sección transversal del riñón humano</h3>
    <model-viewer src="kidney_cross-section.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical5.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical3.php'">Práctica anterior</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>