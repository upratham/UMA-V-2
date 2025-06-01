<?php
include('../header.php');
$practical_number = "B1";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 06: Reglas de seguridad en el laboratorio</title>
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

    <button class="tab-button active" onclick="openTab('Simulation')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Simulation
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
                <li><a href="#FUNDAMENTO TEÓRICO">FUNDAMENTO TEÓRICO</a></li>
                <li><a href="#MATERIALES Y REACTIVOS">MATERIALES Y REACTIVOS</a></li>
                <li><a href="#PROCEDIMIENTO EXPERIMENTAL">PROCEDIMIENTO EXPERIMENTAL</a></li>
                <li><a href="#TABLA DE RESULTADOS">TABLA DE RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 06: FUNCIONES QUÍMICAS INORGÁNICAS</h1>
        
                <h2 id="OBJETIVOS">1. OBJETIVOS</h2>
                <ul>
                    <li>•	Identificar propiedades importantes de algunos elementos de la tabla periódica.</li>
                    <li>•	Realizar la preparación de funciones químicas a partir de elementos libres e identificar las características más importantes de los productos.</li>
                </ul>
                
                <h2 id="FUNDAMENTO TEÓRICO">2. FUNDAMENTO TEÓRICO</h2>
                <ul>
                        •	Óxidos Básicos
                        •	Óxidos Ácidos
                        •	Hidróxidos o Bases
                        •	Ácidos Oxigenados u Oxácidos
                        •	Hidrácidos
                        •	Sales
                </ul>

                <p>Nota: los métodos que se explican a continuación, para la obtención de las distintas clases de sustancias no son los únicos, pero si los más representativos.</p>

                <div class="image-container">
                    <img src="Chemistry_Images\practical 6\prac 6.1.jpg" alt="Equipos" class="Equipos">
                </div>

                <h2 id="ÓXIDO">3. ÓXIDO</h2>
                <p><strong>Todo óxido se obtiene a partir de la reacción entre el oxígeno y otro elemento. Tipos de Óxidos</strong></p>
                <ul>
                    <li>Óxidos básicos, el elemento que reacciona con el oxígeno es un metal.</li>
                    <p>METAL + OXIGENO  OXIDO BASICO</p>
                    
                    <li>Óxidos ácidos, el elemento que reacciona con el oxígeno es un no metal.</li>
                    <p>NO METAL + OXIGENO OXIDO ACIDO</p>
                    <p><strong>HIDRÓXIDO o BASE</strong>Un HIDRÓXIDO o BASE se obtiene a partir de la reacción entre el óxido básico y agua. OXIDO BASICO + AGUA  HIDROXIDO o BASE</p>
                    
                    <p><strong>ÁCIDOS OXIGENADOS, OXOÁCIDOS U OXIACIDOS</strong>Un ACIDO OXIGENADO se obtiene a partir de la reacción entre el óxido ácido y agua. </p>
                    <p>OXIDO ACIDO + AGUA ÁCIDO OXIGENADO u OXIACIDO</p>

                    <p><strong>HIDRÁCIDOS</strong>Primero se obtiene el hidruro no metálico, a partir de la reacción entre el hidrógeno con un no metal. Los hidruros que posteriormente pueden formar un hidrácido son los que se obtienen a partir de los siguientes elementos: Flúor, Cloro, Bromo, Iodo y Azufre.</p>
                    <p>HALOGENO + HIDRÓGENO  HIDRURO NO METALICO</p>

                    <li>Cada uno de los hidruros no metálicos obtenidos, se disuelve en agua para transformarse en el Hidrácido correspondiente:</li>
                    

                    <table border="3">
                        <thead>
                            <tr>
                                <th>Producto Gaseoso</th>
                                <th>Disuelto en Agua</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fluoruro de Hidrógeno</td>
                                <td>Ácido Fluorhídrico</td>
                            </tr>
                            <tr>
                                <td>Cloruro de Hidrógeno</td>
                                <td>Ácido Clorhídrico</td>
                            </tr>
                            <tr>
                                <td>Bromuro de Hidrógeno</td>
                                <td>Ácido Bromhídrico</td>
                            </tr>
                            <tr>
                                <td>Yoduro de Hidrógeno</td>
                                <td>Ácido Yodhídrico</td>
                            </tr>
                            <tr>
                                <td>Sulfuro de Hidrógeno</td>
                                <td>Ácido Sulfhídrico</td>
                            </tr>
                        </tbody>
                    </table>
                
                <h2 id="SALES">SALES</h2>
                <li>Una SAL se obtiene a partir de la reacción entre un ácido y un hidróxido, pudiendo ser el ácido oxigenado (oxácido) o no oxigenado (hidrácido) obteniendo una sal oxisal o una sal haloidea respectivamente. </li>
                <p>ACIDO + HIDROXIDO  SAL + AGUA</p>
                <p>METAL + ACIDO	SAL + H2 </p>
    
                <h2 id="MATERIALES Y REACTIVOS">3. MATERIALES Y REACTIVOS</h2>
                <li>a) Materiales:</li>
                <table border="1">
                    <tr>
                        <td>
                            - Tubos de ensayo<br>
                            - Piceta<br>
                            - Luna de reloj<br>
                            - Mechero de Bunsen<br>
                            - Bagueta<br>
                            - Espátula<br>
                            - Pipeta
                        </td>
                        <td>
                            - Vaso de precipitado 50 ml.<br>
                            - Gradilla<br>
                            - Matraz Erlenmeyer<br>
                            - Pinza para tubo de ensayo<br>
                            - Centrífuga
                        </td>
                    </tr>
                </table>

                <p>Propipetas</p>
                <li>b) Reactivos:</li>
                <table border="3">
                    <tr>
                        <td>
                            - Indicador fenolftaleína<br>
                            - Azufre<br>
                            - Hidróxido de bario<br>
                            - Hidróxido de sodio<br>
                            - Zinc
                        </td>
                        <td>
                            - Magnesio<br>
                            - Ácido sulfúrico<br>
                            - Ácido clorhídrico<br>
                            - Indicador de pH.<br>
                            - Sodio metálico.
                        </td>
                    </tr>
                </table>
                
                <h2 id="PROCEDIMIENTO EXPERIMENTAL"> 4. PROCEDIMIENTO EXPERIMENTAL</h2>
                <p><strong>1. Preparación de un óxido básico e hidróxido.</strong></p>
                <li>Con una pinza colocar un trozo de cinta de magnesio en la llama no luminosa de un mechero de Bunsen, guarde tranquilidad por la luminosidad desprendida y con mucho cuidado deje caer el residuo obtenido en un tubo de ensayo limpio. Observe las características del producto y anote.</li>
                <li>Luego añada aproximadamente 2 mililitros de agua destilada y agite el tubo de ensayo suavemente hasta que se disuelva la mayor cantidad de sólido.</li>
                <li>Añada en la solución dos gotas fenolftaleína y anote algún cambio. ¿Qué compuesto obtuvo en cada paso?</li>
        
                <p><strong>2. Preparación de un óxido ácido y un ácido oxácido</strong></p>
                <li>Coloque un trozo de azufre en una cucharilla de combustión, caliéntelo ligeramente hasta observar desprendimiento de gas (anhídrido).</li>
                <li>Inmediatamente introduzca la cucharilla en un matraz erlenmeyer de 250 ml, tratando de conservar la mayor cantidad de gas formado.</li>
                <li>Enseguida añada rápidamente aproximadamente 40 ml de agua destilada, tape y agite el recipiente.</li>
                <li>Pruebe el carácter ácido de la solución obtenida añadiéndole 2 gotas de indicador fenolftaleína. ¿Qué sustancia obtuvo?</li>

                <p><strong>3. Formación de una sal oxisal y una sal haloidea:</strong></p>
                <li>En un tubo de ensayo añadir aprox. 1 ml solución de hidróxido de bario y adicionar gota a gota ácido sulfúrico diluido hasta notar cierta turbidez en la solución. Agitar ligeramente y centrifugar.</li>
                <li>Identifique el precipitado formado (insoluble en el agua). ¿Qué nombre tiene?</li>
                <li>En un vaso de ppdo. añadir 1 ml de ácido clorhídrico diluido y adicionar aproximadamente 1 ml de hidróxido de sodio diluido, agite ligeramente. Se habrá formado una sal soluble en el agua.</li>
                <li>Calentar suavemente con una pinza en el mechero hasta que crepiten los cristales formados de la sal. ¿Qué nombre tienen estos cristales?</li>
                <li>En un tubo de encolocar 0.5 gr de Zinc luego Medir1ml ácido clorhídrico concentrado y adicionarlo al tubo que contiene el Zinc, esperar, observar e identificar la sustancia formada</li>

                <h2 id="TABLA DE RESULTADOS">5. TABLA DE RESULTADOS</h2>
                <li>Haga los cuadros respectivos, escriba y complete las reacciones químicas para cada experimento realizado, según el siguiente ejemplo:</li>

                <table border="1">
                    <tr>
                        <th>Ecación Química</th>
                        <th colspan="3">CO₂ + H₂O → H₂CO₃</th>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>Incoloro</td>
                        <td>Incoloro</td>
                        <td>Incoloro</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>Gaseoso</td>
                        <td>Líquido</td>
                        <td>Líquido</td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td>Óxido carbónico</td>
                        <td>Agua</td>
                        <td>Ácido carbónico</td>
                    </tr>
                    <tr>
                        <td>Función Química</td>
                        <td>Óxido ácido</td>
                        <td>Agua</td>
                        <td>Oxácido</td>
                    </tr>
                    <tr>
                        <td>Observaciones</td>
                        <td colspan="3">
                            El gas CO₂ se burbujea en el agua hasta saturar y luego se añade fenolftaleína. 
                            El ácido formado mantiene su característica incolora.
                        </td>
                    </tr>
                </table>

                    <p>
                    <li>¿Cuál es la diferencia entre compuestos inorgánicos y compuestos orgánicos? </li>
                    <li>Elabore una lista de elementos que existen como gases a temperatura ambiente. </li>
                    <li>¿Qué es una sal compleja? ¿Experimentalmente cómo se obtendría?</li>
                    <li>¿En qué se diferencia un óxido básico de un óxido neutro?</li>
                    <li>¿A qué se llama óxido anfótero?</li>
                    <li>¿Por qué son importantes los hidróxidos?</li>
                    <li>Describa características físicas y químicas de los siguientes compuestos: CaCO3, CaO, Ca(OH)2, Fe, Fe2O3</li>
                </p>
                </ol>
            
    </div>

<!-- Video Section -->
<div id="video" class="content">
<h3>Video</h3>
<p>Here you can watch the instructional video related to this practical.</p>
<iframe width="560" height="315" src="https://youtu.be/VRWRmIEHr3A?si=16J5GDojr4B01JD1" frameborder="0" allowfullscreen></iframe>
</div>

<!-- Simulator Section -->
<div id="Simulation" class="content">
<h3>Simulation</h3>
<p>Here you can try your experiment and learn about practicals.</p>

<!-- Button to open the simulation in a new window -->
<button onclick="openSimulation()" class="simulation-btn">Open Simulation</button>
</div>

<script>
// Function to open the simulation in a new window
function openSimulation() {
    window.open('https://chemitry-experiments-simulation.vercel.app/experiment4', '_blank');
}
</script>

<!-- CSS Styling for the button -->
<style>
/* Styling the simulation button */
.simulation-btn {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    padding: 15px 32px; /* Add padding around text */
    text-align: center; /* Center the text */
    font-size: 16px; /* Larger font size */
    border: none; /* Remove default border */
    border-radius: 8px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    transition: background-color 0.3s, transform 0.2s; /* Smooth transitions */
}

/* Change background color on hover */
.simulation-btn:hover {
    background-color: #45a049; /* Slightly darker green */
    transform: scale(1.05); /* Slightly enlarge the button */
}

/* Add a shadow effect when the button is clicked */
.simulation-btn:active {
    background-color: #3e8e41; /* Even darker green */
    transform: scale(0.98); /* Slightly shrink the button when clicked */
}
</style>

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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_7.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_5.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
