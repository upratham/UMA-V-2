<?php
include('../header.php');
$practical_number = "A5";
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
                <li><a href="#SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</a></li>
                <li><a href="#SISTEMA REPRODUCTOR">SISTEMA REPRODUCTOR</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>PRÁCTICA N° 5:<br>ESTRUCTURAS DEL SISTEMA ENDOCRINO Y APARATO
                REPRODUCTOR</h1><br>
                <h2 id="SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</h2>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del cuerpo Sistema endocrino.</li>
                    <li>Relacionar las regiones del cuerpo Sistema endocrino y patologías 
                        relacionadas.</li>
                </ul>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\1.jpg" alt="1" class="1">
                </div><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\2.jpg" alt="2" class="2">
                </div><br><br>
                
                <p>Hipotálamo. El hipotálamo se encuentra en la base del cerebro, cerca del quiasma óptico, 
                    donde se cruzan y encuentran los nervios ópticos detrás de cada ojo. El hipotálamo secreta 
                    hormonas que estimulan o suprimen la liberación de hormonas en la glándula pituitaria, 
                    además de controlar el equilibrio de agua, el sueño, la temperatura, el apetito y la presión 
                    sanguínea.<br></p>
                <p>Glándula pineal. La glándula pineal se encuentra debajo del cuerpo calloso, en el medio del 
                    cerebro. Produce la hormona melatonina, que ayuda al cuerpo a saber cuándo es momento 
                    de dormir
                    Pituitaria. La glándula pituitaria se encuentra debajo del cerebro. Generalmente su tamaño no 
                    es superior al de un frijol y controla numerosas funciones de las demás glándulas endócrinas.
                    <br></p>
                <p>Tiroides y paratiroides. La glándula tiroides y paratiroides se encuentran en la parte delantera 
                    del cuello, debajo de la laringe. La tiroides desempeña una importante función en el 
                    metabolismo del cuerpo. Las glándulas paratiroides desempeñan una importante función en 
                    la regulación del equilibrio de calcio del cuerpo.
                    <br></p>
                <p>Timo. El timo se encuentra en la parte superior del pecho y produce linfocitos T (glóbulos 
                    blancos que combaten las infecciones y destruyen las células anormales)
                    </p>
                <p>Glándula suprarrenal. Las glándulas suprarrenales se encuentran en la parte superior de cada 
                    riñón. Al igual que muchas glándulas, las glándulas suprarrenales actúan en colaboración con 
                    el hipotálamo y la glándula pituitaria. Las glándulas suprarrenales producen y liberan 
                    hormonas corticosteroides que mantienen la presión sanguínea y regulan el metabolismo.</p><br><br>  

                <h2>SISTEMA REPRODUCTOR</h2>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del cuerpo Sistema endocrino.</li>
                    <li>Relacionar las regiones del cuerpo Sistema endocrino y patologías 
                        relacionadas.</li>
                </ul>
                <p>Conjunto de tejidos, glándulas y órganos que participan en la procreación (tener hijos). 
                    El aparato reproductor de la mujer incluye los ovarios, las trompas de Falopio, el útero, 
                    el cuello uterino y la vagina. El del hombre, incluye la próstata, los testículos y el pene.
                    </p><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\3.jpg" alt="3" class="3">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\4.jpg" alt="4" class="4">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\5.jpg" alt="5" class="5">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\6.jpg" alt="6" class="6">
                </div><br><br><br>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
                

</div>
        
    
  <!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac5.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac5_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac5_part3.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

</div>

<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>

    <h3>1. Partes del aparato reproductor masculino</h3>
    <model-viewer src="splanchnology.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: black; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Útero</h3>
    <model-viewer src="uterus.glb"
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
    <button class="styled-button" onclick="window.location.href='anatomy_practical6.php'">Próxima práctical</button>
    <button class="styled-button" onclick="window.location.href='anatomy_practical4.php'">Práctica anterior</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>