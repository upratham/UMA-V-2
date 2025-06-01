<?php
// Ensure nothing is sent before headers


include('../header.php');
$practical_number = "A1";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script> 

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1: Planos y posiciones anatómicas</title>
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
            color: #C31654;
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

  .button-container {
    text-align: center;
    margin-top: 20px;
}

.styled-button {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 12px 24px;
    margin: 10px;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.styled-button:hover {
    background-color: #2980b9;
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
            <li><a href="#objectives">OBJECTIVOS</a></li>
                <li><a href="#position">POSICIONS</a></li>
                <li><a href="#planes">Aviones</a></li>
                <li><a href="#terms">Términos anatómicos</a></li>
                <li><a href="#Movements">Movimientos</a></li>
                <li><a href="#Regions">Regiones</a></li>
                <li><a href="#Anatomical Positions">Posiciones anatómicas</a></li>
                <li><a href="#Fowler Position">Posición de Fowler</a></li>
                <li><a href="#Semifowler">Posición de semifowler</a></li>
                <li><a href="#Dorsal">Dorsal con patas elevadas</a></li>
                <li><a href="#Supine Decubitus">Decúbito dorsal o supino</a></li>
                <li><a href="#Reference">Referencia</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
            <h1> Práctica 1: Planos y posiciones anatómicas </h1>
                <h2 id="Objetivos">I.Objetivos</h2>
                <ul>
                <li>Conocer las posiciones y planos anatómicos del cuerpo humano.</li>
                <li>Relacionar el uso de posiciones anatómicas con las diferentes patologías o exámenes físicos correspondientes.</li>
                </ul>
                
                <h2 id="Position">2. position</h2>
                <p><strong>Posición de referencia en anatomía:</strong> El individuo se encuentra de pie, con las extremidades extendidas a los lados del tronco, 
                las palmas de las manos hacia adelante y los pulgares apuntando hacia arriba.
                 Los pies están paralelos entre sí y los dedos de los pies están orientados hacia adelante.</strong></p>

                <h2 id="Planes">3. planes</h2>
                <p><strong>Planos imaginarios que intersecan el cuerpo generando cortes de varios órganos y estructuras. Los principales planos anatómicos incluyen:</strong></p>
                <ul>
                    
                    <li><strong>Plano medio sagital/medio o medio vertical:</strong> recorre el centro del cuerpo (línea media o mediana) y corta verticalmente el cuerpo en mitades simétricas, una derecha y otra izquierda.</li>
                    <li><strong>Plano sagital:</strong> Cualquier plano vertical arbitrario paralelo al plano sagital medio, que corta el cuerpo en mitades derecha e izquierda asimétricas.</li>
                    <li><strong>Plano frontal (coronal):</strong> Cualquier plano vertical dispuesto perpendicularmente al plano sagital, dividiendo el cuerpo en una mitad anterior (ventral) y una mitad posterior (dorsal).</li>
                    <li><strong>Plano transversal o transversal (axial):</strong>Plano horizontal perpendicular a los anteriores, que divide el cuerpo en una mitad superior (craneal) y una inferior (caudal).</li>
                </ul>
                
                <h2 id="terms">4. terms</h2>
                <p><strong>Términos anatómicos utilizados para describir la posición y la relación entre estructuras. Los principales términos de dirección y comparación incluyen:</strong></p>
                <ul>
                    <li><strong>Anterior:</strong>  Delante de o delante de.</li>
                    <li><strong>Posterior:</strong>Detrás o posterior.</li>
                    <li><strong>Ventral:</strong>Hacia la parte frontal del cuerpo.</li>
                    <li><strong>Dorsal:</strong>  Hacia la parte posterior del cuerpo.</li>
                    <li><strong>Proximal:</strong>Cercano al sitio de origen de una parte del cuerpo.</li>
                    <li><strong>Distal:</strong> Lejos del sitio de origen de una parte del cuerpo.</li>
                    <li><strong>Medial:</strong> Hacia la línea media.</li>
                    <li><strong>Lateral:</strong>Lejos de la línea media.</li>
                    <li><strong>Superior:</strong> Hacia la parte superior de la cabeza.</li>
                    <li><strong>Inferior:</strong> Hacia los pies.</li>
                    <li><strong>Craneal:</strong>  Hacia la cabeza.</li>
                    <li><strong>Caudal:</strong>Hacia la cola.</li>
                    <li><strong>Superficial:</strong> Más cerca de la superficie.</li>
                    <li><strong>Profundo: </strong> Lejos de la superficie.</li>
                    <li><strong>Palmar:</strong>Parte delantera o palma de la mano.</li>
                    <li><strong>Dorsal (mano):</strong> Superficie posterior o dorso de la mano.</li>
                    <li><strong>Plantar:</strong> Parte inferior del pie (planta).</li>
                    <li><strong>Dorsal (pie):</strong> Parte superior del pie (dorso o empeine).</li>
                </ul>

                <h2 id="Movements">5. Movimientos</h2>
                <p><strong>Cambios en la posición de un segmento corporal alrededor de un eje determinado y en uno de los planos anatómicos. Los principales movimientos incluyen:</strong></p>
                <ul>
                    <li>Flexión</li>
                    <li>Extensión</li>
                    <li>Secuestro</li>
                    <li>Aducción</li>
                    <li>Rotación lateral</li>
                    <li>Rotación medial</li>
                    <li>Circunducción</li>
                    <li>Pronación</li>
                    <li>Supinación</li>
                    <li>Inversión</li>
                    <li>Eversión</li>
                </ul>

                <h2 id="Regions">6. Regions</h2>
                <p><strong>Áreas del cuerpo definidas por estructuras anatómicas que son claramente visibles o palpables en la superficie. Las regiones principales incluyen:</strong></p>
                <ul>
                    <li>Cabeza</li>
                    <li>Cuello</li>
                    <li>Tórax</li>
                    <li>Abdomen</li>
                    <li>Pelvis</li>
                    <li>Extremidad superior</li>
                    <li>Extremidad inferior</li>
                </ul>

                <h2 id="Anatomical Positions">7. Anatomical Positions</h2>
                <p>Anatómicamente hay cuatro planos principales:</p>
                <ul>
                    <li><strong>Plano medio sagital/medio o medio vertical:</strong>recorre el centro del 
                    cuerpo y lo corta verticalmente en mitades simétricas, una derecha y otra izquierda.</li>
                    <li><strong>Plano sagital:</strong> Cualquier plano vertical arbitrario paralelo al plano sagital medio.</li>
                    <li><strong>Plano frontal (coronal):</strong> Cualquier plano vertical dispuesto perpendicularmente al plano
                     sagital, dividiendo el cuerpo en una mitad anterior y otra posterior.</li>
                    <li><strong>Plano transversal o transversal (axial):</strong> Plano horizontal perpendicular a los anteriores,
                     que divide el cuerpo en una mitad superior (craneal) y una inferior (caudal).</li>
                </ul>

                <h2 id="Posiciones anatómicas">8.  Posiciones anatómicas</h2>
                <p>Posición erecta o anatómica</p>
                <p><strong>Concepto:</strong>Alineación de los segmentos corporales en dirección vertical con los miembros superiores a los costados del cuerpo, las manos en pronación, la cabeza recta y los
                 pies apuntando hacia adelante. Los pies pueden tener diferentes separaciones, según el caso.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Definición de planos corporales.</li>
                    <li>Reducción del estrés excesivo en las articulaciones que soportan peso.</li>
                </ul>

                <h3 id="Fowler Position">9. Posición de Fowler</h3>
                <div class="image-container">
                    <img src="Anatomy images\Prac_1\fowler.jpg" alt="Fowler position" class="Fowler image">
                </div>
                <p><strong>Concepto: </strong> Paciente sentado en la cama con la cabecera de la cama elevada a 45° y ligera flexión de los miembros inferiores.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Examen físico de la región anterior del cuerpo.</li>
                    <li>Alimentación.</li>
                    <li>Reduce la tensión muscular abdominal y lumbar.</li>
                    <li>Aplicación de algunos tratamientos o intervenciones quirúrgicas en la cabeza o la cara.</li>
                    <li>Descansar.</li>
                    <li>Promover la respiración.</li>
                </ul>

                <h3 id="Supine Decubitus">10. Decúbito dorsal o supino</h3>
                <div class="images"> 
                    <img src="Anatomy images\Prac_1\dorcel_or_supine.png" alt="dorcel_or_supine" class="Dorsal">
                </div>
                <p><strong>Descripción: </strong> Paciente acostado boca arriba, miembros superiores a los lados del cuerpo y miembros inferiores ligeramente flexionados.  </p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Examen físico de la región anterior del cuerpo.</li>
                    <li>Relajación muscular.</li>
                    <li>Aplicación de tratamientos específicos en la región anterior del cuerpo.</li>
                    <li>En laparotomía.</li>
                </ul>

                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
    
</div>

    
    <!-- Video Section -->
    <div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="prac1.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac1_part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

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
    <button class="styled-button" onclick="window.location.href='anatomy_practical2.php'">Próxima práctical</button>
    <a href="https://v2-38ue.onrender.com/anatomia/Anatomia.html" class="styled-button">Página principal</a>
</div>
</footer>

</body>
</html>
