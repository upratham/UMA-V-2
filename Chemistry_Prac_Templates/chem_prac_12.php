<?php
include '../header.php';
$practical_number = "C12"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 12: SOLUCIONES FÍSICAS Y QUÍMICAS</title>
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
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#FUNDAMENTO TEÓRICO">FUNDAMENTO TEÓRICO</a></li>
                <li><a href="#PROCEDIMIENTO EXPERIMENTAL:"> PROCEDIMIENTO EXPERIMENTAL</a></li>
                <li><a href="#RESULTADOS Y CONCLUSIONES">RESULTADOS Y CONCLUSIONES</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> PRÁCTICA N° 12: SOLUCIONES FÍSICAS Y QUÍMICAS</h1>
                
                <h2 id="OBJETIVOS">I. OBJETIVOS</h2>
                <ul>
                    <li>Efectuar cálculos para la preparación de  soluciones de una concentración determinada.</li>
                    <li>Manejar las distintas formas de expresar la concentración de una disolución.</li>
                    <li>Diferenciar soluciones físicas y químicas.</li>
                </ul>
                
                <h2 id="FUNDAMENTO TEÓRICO">II. FUNDAMENTO TEÓRICO</h2>
                <p>Una disolución o solución es una mezcla homogénea de dos o más sustancias cuyas proporciones se mantienen constantes en cualquier volumen que se tome de la misma. La sustancia que se encuentra en menor proporción se denomina soluto y la que se encuentra en mayor proporción disolvente.</p>
                <ul>
                    <strong>1. Clasificación de acuerdo al estado físico:</strong>
                    <p><strong>1.1 Solución líquida:</strong> El solvente es un líquido.
                        <li>Sólido en líquido: cloruro de sodio en agua.</li>
                        <li>Líquido en líquido: alcohol en agua.</li>
                        <li>Gas en líquido: amoniaco en agua.</li>

                    <p><strong>1.2 Solución sólida:</strong>el solvente es un sólido.</p>
                        <li>Solido en solido: cobre en zinc (aleaciones)</li>
                    
                    <p><strong>1.3 Solución gaseosa:</strong>el solvente es un gas.</p>
                        <li>Gas en gas: aire.

                    <strong>2. Clasificación de acuerdo a la cantidad de soluto.</strong>
                    <p><strong>2.1. Soluciones diluidas: </strong> Son las que tienen una pequeña cantidad de soluto en un determinado volumen de disolución.
                    <p><strong>2.2. Soluciones Concentradas:</strong>Son aquellas que tienen gran cantidad de soluto en un determinado volumen de disolución y por lo tanto, están próximas a la saturación.</p>
                    <p><strong>Sobresaturadas:</strong>Son las que contienen más soluto de la que el solvente pueda disolver.</p>

                    <p><strong>3. Soluciones valoradas.</strong></p>
                    <li>Cuando no se conoce la concentración de una solución, se dice que no es valorada, en caso contrario se dice que es valorada.Concentración: es la cantidad de soluto disuelto por unidad de peso o volumen de solución, esta se puede en:</li>
                    <ul>
                        •	Unidades Físicas de concentración.<br>
                        •	Unidades Químicas de concentración.<br>
                    </ul>

                    <p><strong>3.1 Unidades Físicas de concentración:</strong> 
                    <ul>
                        <li><strong>Porcentaje masa-volumen (% m/v):</strong>gramos de soluto que se disuelven en cien mililitros de disolución. % m/v = (g soluto/ml disolución) x 100.</li><br>
                        <li><strong>Porcentaje masa-masa (% m/m):</strong> gramos de soluto por cada cien gramos de disolución. % m/m = (g soluto/g disolución) x 100.</li><br>
                        <li><strong>Porcentaje volumen-volumen (% v/v):</strong>mililitros de soluto por cada cien mililitros de de disolución. % v/v = (mL soluto/mL disolución) x 100.</li><br>
                        <li><strong>Partes por millón (ppm):</strong>es un concepto análogo al de porcentaje pero este se utiliza para concentraciones muy pequeñas. Se define como partes de masa de soluto que se encuentran en un millón de partes de disolución. Se puede referir a partes en volumen (ppmv) lo que equivale a miligramos de soluto que contiene un litro de disolución, o a partes en masa (ppmm), lo que equivale a miligramos de soluto que contiene un kilogramo de disolución.</li><br>
                    </ul>

                    <p><strong>3.2 Unidades Físicas de concentración:</strong> 
                    <ul>
                        <li><strong>Molaridad (M):</strong>es la cantidad de moles de soluto disueltos en 1 litro de solución. M = N° moles soluto/1 litro de solución</li><br>
                        <li><strong>Normalidad (N):</strong>Es la cantidad de equivalentes-gramo de soluto por litro de disolución. N = nº EQ (equivalentes-gramo)/1 Litro de solución.</li><br>
                        <li><strong>•	Molalidad (m):</strong>es la cantidad de moles de soluto que están disueltos en 1 kilogramo de disolvente.</li><br>
                            <li>m =  nº de moles de soluto/ 1 Kilogramos de disolvente</li><br>
                    </ul>

                    <strong>4. Dilución de las disoluciones concentradas</strong>
                    <p>Es el proceso de preparar un solución a partir de otra solución.</p>
                        <li>C1 x V1 = C2 x V2</li><br>

                        <p><strong>III.	MATERIALES Y REACTIVOS</strong></p>
                        <table border="1">
                            <thead>
                                <tr>
                                    <th colspan="2">a) Materiales:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fiola de 25, 50 y 100 ml</td>
                                    <td>Vaso de precipitado 50 ml</td>
                                </tr>
                                <tr>
                                    <td>Piceta</td>
                                    <td>Gradilla</td>
                                </tr>
                                <tr>
                                    <td>Luna de reloj</td>
                                    <td>Espátula</td>
                                </tr>
                                <tr>
                                    <td>Bagueta</td>
                                    <td>Pipeta</td>
                                </tr>
                                <tr>
                                    <td>Propipeta</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>

                        <table border="1">
                            <thead>
                                <tr>
                                    <th colspan="2">b) Reactivos:</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Indicador fenolftaleína</td>
                                    <td>Sulfato de cobre</td>
                                </tr>
                                <tr>
                                    <td>Ácido sulfúrico</td>
                                    <td>Etanol</td>
                                </tr>
                                <tr>
                                    <td>Permanganato de potasio</td>
                                    <td>Ácido nítrico</td>
                                </tr>
                                <tr>
                                    <td>Nitrato de plata</td>
                                    <td>Sulfato ferroso</td>
                                </tr>
                                <tr>
                                    <td>Ácido clorhídrico</td>
                                    <td>Hidróxido de sodio</td>
                                </tr>
                                <tr>
                                    <td>Hidróxido de potasio</td>
                                    <td>Peróxido de hidrógeno</td>
                                </tr>
                                <tr>
                                    <td>Cloruro de sodio</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>

                        <h2 id="PROCEDIMIENTO EXPERIMENTAL">IV. PROCEDIMIENTO EXPERIMENTAL</h2>
                        <p><strong>IV. PROCEDIMIENTO EXPERIMENTAL</strong></p>
                        <li>Pasos a seguir para preparar soluciones valoradas.</li>

                        <P><ul>
                            1.	Calcular<br>
                            2.	Pesar<br>
                            3.	Disolver<br>
                            4.	Trasvasar<br>
                            5.	Enrazar<br>
                            6.	Homogeneizar<br>
                            7.	Rotular<br>
                    </P></ul>

                    <h3><strong>Experiencia N° 1.</strong> Preparar soluciones diluidas, concentradas y sobresaturada.</h3>
                    <p><strong>Solución diluida:</strong></p>
                    <ul>
                        <li>En un vaso de precipitado disolver 0.5 gramos de permanganato de potasio en más o menos 25ml de agua destilada.</li>
                        <li>Trasvasar a una fiola de 100ml.</li>
                        <li>Repetir la operación hasta que no quede soluto en el vaso, luego enrasar, homogenizar y rotular.</li>
                    </ul>

                    <h3>Solución concentrada:</h3>
    <ul>
        <li>En un vaso de precipitado disolver 5 gramos permanganato de potasio en más o menos 25ml de agua destilada.</li>
        <li>Trasvasar a una fiola de 100ml.</li>
        <li>Repetir la operación hasta que no quede soluto en el vaso, luego enrasar, homogenizar y rotular.</li>
    </ul>

    <h3>Solución sobresaturada:</h3>
    <ul>
        <li>En un vaso de precipitado disolver cloruro de sodio en 100 ml de agua destilada hasta que el solvente ya no puede disolver más al soluto.</li>
    </ul>

    <h3>Experiencia N° 2:</h3>
    <p>Preparar 100 ml de solución de CuSO4.5H2O al 0.8% P/V.</p>
    <ul>
        <li>En un vaso de precipitado disolver el soluto calculado en más o menos 25ml de agua destilada.</li>
        <li>Trasvasar a una fiola de 100ml.</li>
        <li>Repetir la operación hasta que no quede soluto en el vaso, luego enrasar, homogenizar y rotular.</li>
    </ul>

    <h3>Experiencia N° 3:</h3>
    <p>Preparar 100 ml de solución de etanol al 40% V/V.</p>
    <p>En una fiola medir el soluto calculado, enrasar, homogenizar y rotular.</p>

    <h3>Experiencia N° 4:</h3>
    <p>Preparar 50 ml de solución de hidróxido de potasio 0.3N.</p>

    <h3>Experiencia N° 5:</h3>
    <p>Preparar 100 ml de solución de cloruro de sodio 0.6M.</p>

    <h3>Experiencia N° 6:</h3>
    <p>Preparar 50 ml de solución de ácido sulfúrico 0.1N.</p>

    <h3>Experiencia N° 7:</h3>
    <p>Preparar 100 ml de solución de ácido clorhídrico 0.3N.</p>

    <h3>Experiencia N° 8:</h3>
    <p>Preparar 50 ml de solución de permanganato de potasio al 0.5% a partir de una solución al 5%.</p>

    <h3>Experiencia N° 9:</h3>
    <p>Preparar 100 ml de solución de ácido sulfúrico 0.05N a partir de una solución al 0.1N.</p>


    <h3>Para el experimento N° 6</h3>
    <p>
        Cuando se trata de una solución ácida es necesario tomar en cuenta las especificaciones dadas por el fabricante y contenidas en los frascos de los reactivos. Así, para el ácido sulfúrico es la siguiente:
    </p>
    <ul>
        <li>Concentración en peso: 98%</li>
        <li>Densidad: 1,84 gr/ml</li>
        <li>Peso molecular: 98 g</li>
    </ul>
    <p>Con todos estos datos se calcula el volumen necesario de ácido sulfúrico para preparar los 50 ml de la solución.</p>
    
    <h4>a)</h4>
    <p class="equation">49 Eq-gr --------------------- 1N ------------------ 1000 ml</p>
    <p class="equation">4.9 Eq-gr --------------------- 0.1N ------------------ 1000 ml</p>
    <p class="equation">0.245 Eq-gr --------------------- 0.1N ------------------ 50 ml</p>

    <h4>b)</h4>
    <p class="equation">100 gr de solución --------------------- 98 gr de H2SO4 puro</p>
    <p class="equation">x --------------------- 0.245 gr H2SO4</p>
    <p>X = 0,25 gr de solución de H2SO4 concentrado</p>

    <h4>c)</h4>
    <p class="equation">1 ml --------------------- 1.84 gr de solución</p>
    <p class="equation">X --------------------- 0.25 gr de solución</p>
    <p>X = 0.14 ml</p>

    <p>Se mide 0.14 ml de ácido sulfúrico concentrado con una pipeta de 0.2 ml y trasvasar a una fiola de 50 ml, enrasar homogenizar y rotular.</p>
          
<br>
                    <h2 id="RESULTADOS Y CONCLUSIONES">V. RESULTADOS Y CONCLUSIONES</h2>
                    <li>Realice los cálculos para cada experimento.</li>
                    <P><ul>
                    

                    </P></ul>
                
    
                <h2 id="Referencia">Referencia</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
                
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
// Function to open the simulation in the same window
function openSimulation() {
    window.location.href = 'http://chemitry-experiments-simulation.vercel.app/experiment7&8';
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
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
