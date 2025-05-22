<?php
include '../header.php';
$practical_number = "C10"
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 10 y 11: ESTEQUIOMETRÍA</title>
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
            <h3>Contenido</h3>
            <ul>
                <li><a href="#OBJECTIVOS">OBJECTIVOS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 10 y 11: ESTEQUIOMETRÍA</h1>
            
                <h2 id="OBJECTIVOS">1. OBJECTIVOS</h2>
                <ul>
                    <li>Determinar la especie química que actúa como reactivo limitante en una reacción química de precipitación.</li>
                    <li>Analizar varias reacciones que involucran la formación de precipitados. Seleccionar una reacción de precipitación.</li>
                    <li>Realizar los cálculos estequiométricos para determinar teóricamente el reactivo limitante.</li>
                    <li>Comparar los resultados experimentales con los valores teóricos.</li>
                </ul>
                
                <h2 id="INTRODUCCIÓN">2. INTRODUCCIÓN</h2>
                <p>La estequiometría es la medición que se basa en las leyes cuantitativas de la combinación química. En los cálculos estequiométricos se utilizan los coeficientes de las ecuaciones químicas balanceadas para relacionarlos con cantidades de productos y reactivos. Con las ecuaciones químicas balanceadas se puede calcular la cantidad de materia o energía que se produce o se necesita en una ecuación química dada.</p>
                <p> Cuando se representa una reacción química mediante una ecuación se debe de determinar qué reactivos se usan, en qué razón reaccionan y qué cantidades de producto pueden resultar de esa reacción. La estequiometría de la reacción puede ser determinada al ver cómo varía una cierta propiedad con las proporciones en que se mezclan los reactivos.</p>
                <p> Los rendimientos de las reacciones no estequiométricas pueden aumentar o disminuir por adición de uno de los reactivos, por eso es necesario determinar experimentalmente las relaciones de los reactivos.</p>
                <p>En un proceso químico en donde se usa un exceso de dos o más reactivos, el rendimiento teórico de éste depende del reactivo que no está en exceso y que limita la reacción, es decir, del reactivo limitante.</p>
                <p>El reactivo limitante es el que establece la mínima relación de materia que debe de existir para que se logre la reacción química. Para determinar el reactivo limitante de una reacción se divide el número de moles existentes entre el número de moles de la ecuación balanceada; el número más pequeño nos da al reactivo limitante. Los demás cálculos de los reactivos se sacan con base al reactivo limitante.</p>
                <p>Para entender de una manera más clara el concepto de reactivo limitante, en esta práctica se llevarán a cabo diferentes reacciones de precipitación en las cuales uno de los reactivos actuará como el factor limitante de la reacción. Una característica importante es que la reacción químicaque se escoja debe ser cuantitativa. Por lo tanto, la selección estará en función de la solubilidad, aspecto físico del precipitado y la masa molecular del producto obtenido. Otros criterios que se deben de tomar en cuenta son el costo y toxicidad de las sustancias.</p>

                <div class="image-container">
                    <img src="Chemistry_Images\practical 10 & 11\10.1.jpg" alt="Equipos" class="Equipos">
                </div>
                <br>

<table border="1">
    <thead>
        <tr>
            <th colspan="2"><b>Materiales</b></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>5 Mechero Bunsen o Meker</td>
            <td>5 Gradilla para tubos de ensayo.</td>
        </tr>
        <tr>
            <td>50 Tubos de ensayos</td>
            <td>5 Beaker de 100 mL</td>
        </tr>
        <tr>
            <td>5 Pinzas</td>
            <td>5 Bagueta</td>
        </tr>
        <tr>
            <td>5 Cápsula de porcelana</td>
            <td>5 Atomizador</td>
        </tr>
        <tr>
            <td>5 Rejilla con asbesto</td>
            <td></td>
        </tr>
    </tbody>
</table>
<br>

<table border="1">
    <thead>
        <tr>
            <th colspan="2">Disoluciones 0.2 M de:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cromato de potasio (K2CrO4)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Nitrato de plomo II [Pb(NO3)2]</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Hidróxido de sodio (NaOH)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Cloruro de hierro III (FeCl3)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Sulfato de níquel II (NiSO4)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Yoduro de potasio (KI)</td>
            <td>25 mL</td>
        </tr>
    </tbody>
</table>

    <h2 id="PROCEDIMIENTO">3. PROCEDIMIENTO</h2>
        <li>Nota: Trabajar los experimentos con un punto antes y un punto después del punto de estequimétrico.</li>
        <li>Cada equipo deberá seleccionar alguna reacción de precipitación.</li>
        <p>
             1.	Realizar en forma cualitativa las reacciones propuestas con pequeñas cantidades de reactivos.<br>
             2.	Colocar en distintos vasos de precipitados los volúmenes de la disolución que permanecerá constante.<br>
             3.	Agregar los volúmenes de la disolución del reactivo que variará en forma sucesiva, en los vasos que ya contienen el otro reactivo.<br>
             4.	Agitar la mezcla de cada vaso, durante tres minutos, para permitir que la reacción se lleve a cabo en su totalidad.<br>
             5.	Calentar suavemente la mezcla hasta que desprenda vapores. Dejar enfriar a temperatura ambiente para que el precipitado aumente.<br>
             6.	Numerar los papeles filtro.<br>
             7.	Filtrar los precipitados formados en cada vaso.<br>
             8.	Lavar los precipitados con agua destilada y efectuar el último lavado con etanol para facilitar el secado de los precipitados.<br>
             9.	Colocar cada papel con el precipitado en vidrios de reloj y ponerlos en la estufa a 60 °C durante dos horas.<br>
            10.	Determinar las masas de los precipitados.<br>
        </p>

    <h2 id="RESULTADOS">4. RESULTADOS</h2>
                <p>1] Completar, balancear y dar los nombres de los reactivos de las siguientes ecuaciones químicas:</p>
                <ul>
                    <li>K2CrO4	+	Pb (NO3)2	→</li>
                    <li>NaOH	+	NiSO4	    →</li>
                    <li>NaOH	+	FeCl3       →</li>
                    <li>KI	+	Pb (NO3)2	    →</li>
                    
                <p>2] Anotar en el cuaderno las masas de los precipitados formados y las características físicas de los diferentes precipitados.</p>
                    
                <p>3] Justificar la razón por la cual seleccionó cierta reacción química de precipitación.</p>

                <p>4] Completar el siguiente cuadro:</p>

                <p><strong>REACTIVOS</strong></p>
<li>Etanol</li>
<li>Agua destilada</li>
<br>
<table border="1">
    <thead>
        <tr>
            <th rowspan="2">Exp. No.</th>
            <th colspan="2">Reactivo "A"</th>
            <th colspan="2">Reactivo "B"</th>
            <th colspan="2">Precipitado formado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>(mL)</th>
            <th>(n)</th>
            <th>(mL)</th>
            <th>(n)</th>
            <th>Masa (g)</th>
            <th>Moles (n)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
    </tbody>
</table>
<br>
<p>5] Realizar la gráfica correspondiente a la relación que hay entre los volúmenes de reactivo agregado y los gramos del producto formado que representen la curva teórica y experimental, indicando el punto estequiométrico.</p>

<div class="image-container">
    <img src="Chemistry_Images\practical 10 & 11\10.2.jpg">
</div>

<p>6] Realizar una gráfica similar correspondiente a la relación que existe entre los moles del reactivo agregado y el producto formado.</p>
<p>7Comparar las curvas teóricas con las experimentales.</p>
    </strong></p>
                
            </div>
        </section>
    </div>
<!-- Video Section -->
<div id="Video" class="content">
<h3>Video</h3>
<p>Here you can watch the instructional video related to this practical.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xNYASNEdgg8" frameborder="0" allowfullscreen></iframe>
</div>

<!-- Simulator Section -->
<div id="Simulation" class="content">
<h3>Simulation</h3>
<p>Here you can try your experiment and learn about practicals.</p>

<!-- Button to open the simulation in a new window -->
<button onclick="openSimulation()" class="simulation-btn">Open Simulation</button>
</div>

<!---Questionaire--->

</div>

<script>
// Function to open the simulation in a new window
function openSimulation() {
    window.location.href = 'http://chemitry-experiments-simulation.vercel.app/experiment3';
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_5.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_4.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../chemistry/Química.html'">Inicio</button>
                </div>
</footer>

</body>
</html>
