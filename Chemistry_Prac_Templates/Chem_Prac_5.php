<?php
include('../header.php');
$practical_number = "B1";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 04: Reglas de seguridad en el laboratorio</title>
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
        <!-- Sidebar (Contents) -->
        <nav class="sidebar">
        <h3>Contents</h3>
            <ul>
                <li><a href="#Objetivos">Objetivos</a></li>
                <li><a href="#Marco Teórico">Marco Teórico</a></li>
                <li><a href="#PARTE EXPERIMENTAL">PARTE EXPERIMENTAL</a></li>
                <li><a href="#RESULTADOS Y CONCLUSIONES">RESULTADOS Y CONCLUSIONES</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#Referencia">Referencia</a></li>

            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 05: PROPIEDADES Y TRANSFORMACIONES DE LA MATERIA </h1>
                <h2 id="Objetivos">1. Objetivos</h2>
                <ul>
                    <li>-	Identificar las diferentes propiedades físicas y químicas de la Materia.</li>
                    <li>-	Estudiar la naturaleza de los cambios producidos en las sustancias debido a la acción del calor o de otros medios físicos y químicos.</li>
                </ul>
                
                <h2 id="Marco Teórico">2. Marco Teórico</h2>
                <p><strong>1.Propiedades:</strong>Las propiedades de la materia son sus cualidades o características propias o intrínsecas que hace que se distingan unas de otras, se clasifican en:</p>
                <p> También es importante conocer los daños que estas sustancias, si se eliminan mal, pueden causar a sus pares y al ecosistema.</p>

                <h2 id="Generales:">a.	Generales:</h2>
                <p><strong>Extensión.-</strong>Todos los cuerpos ocupan un lugar en el espacio. El lugar que ocupa uncuerpo es su volumen.</p>
                <p><strong>Impenetrabilidad.-</strong>Como cada cuerpo ocupa un lugar en el espacio, su lugar no puedeser ocupado al mismo tiempo por otro cuerpo.</p>
                <p><strong>Inercia.-</strong>Consiste en la tendencia que tienen los cuerpos de continuar en su estado dereposo o movimiento en que se encuentran si no hay una fuerza que los cambie.</p>
                <p><strong>Masa.-</strong>Es la cantidad de materia contenida en un volumen cualquiera, la masa de uncuerpo es la misma en cualquier parte de la Tierra o en otro planeta.</p>
                <p><strong>Peso.-</strong>Es la acción de la gravedad de la Tierra sobre los cuerpos. En los lugares dondela fuerza de gravedad es menor, por ejemplo, en una montaña o en la Luna, el peso de los cuerpos disminuye.</p>
                <p><strong>Divisibilidad.-</strong>Es la propiedad que tiene cualquier cuerpo de poder dividirse enpedazos más pequeños, hasta llegar a las moléculas y los átomos.</p>
                <p><strong>Porosidad.-</strong>Como los cuerpos están formados por partículas diminutas, éstas dejanentre sí espacios vacíos llamados poros.</p>
                <p><strong>Elasticidad.-</strong>Propiedad que tienen los cuerpos de cambiar su forma cuando se lesaplica una fuerza adecuada y de recobrar la forma original cuando se suspende la acción de la fuerza.</p>
                <ul>
                
                <h2 id="Particulares:">b.	Particulares:</h2>
                <p><strong>Dureza.-</strong>Es la resistencia que opone un cuerpo al corte, a la penetración y a ser rayado.La materia más dura que se conoce es el diamante.</p>
                <p><strong>Tenacidad.-</strong>Es la resistencia que ofrece un cuerpo a romperse o a deformarse cuandose le golpea. Lo contrario a la tenacidad es la fragilidad. El acero es tenaz y el vidrio es frágil.</p>
                <p><strong>Ductilidad.-</strong>Es la propiedad que tienen algunas materias, principalmente los metales,de estirarse para formar hilos o alambres.</p>
                <p><strong>Maleabilidad.-</strong>Consiste en la facilidad que tienen algunas materias para extenderseen láminas.</p>
                
                <p>Los metales son maleables. Se hacen láminas de hierro, zinc, estaño, etc. El oro es el más maleable, sus láminas pueden ser tan delgadas que son transparentes y flotan en el aire.</p>
                <p><strong>c.	Propiedades físicas</strong>son las características que se pueden determinar sin que ocurra ningún cambio en su composición química. Se puede dividir de la siguiente manera:</p>
                    <li>Propiedades físicas externas, son aquellas que dependen de la cantidad de materia y entre ellas se tienen las propiedades organolépticas (sabor, olor , color, forma) y además la masa, volumen, tamaño.</li>
                    <li>Propiedades físicas internas, son aquellas que no dependen de la cantidad de materia, densidad, viscosidad, punto de ebullición, punto de Fusión, índice de refracción, solubilidad, conductibilidad eléctrica.</li>

                <p><strong>d.Propiedades químicas </strong>son aquellas que se ponen de manifiesto cuando la materia sufre transformación química. También es la capacidad que tiene una sustancia de poder experimentar un cambio químico: Alcalinidad, acidez, oxidación, fermentación, combustión.</p>
                
                <p><strong>2.Fenómenos</strong>son los cambios o alteraciones surgidas en la naturaleza de la materia como consecuencia de diferentes acciones físicas o químicas, se divide en:</p>

                <p><strong>2.1 Fenómeno Físico: </strong>Fenómeno Físico: Son los cambios temporales o reversibles, significa que el cuerpo puede recuperar su estado inicial, después que haya cesado el efecto que lo produjo.</p>

                <p><strong>2.2 Fenómeno Químico:</strong>Son cambios que dan como resultado la formación de sustancias nuevas y que implican modificación en la composición o estructura interna de las sustancias, ejemplo: oxidación, combustión, saponificación.</p>

                <table border="1">
                    <thead>
                        <tr>
                            <th colspan="2">MATERIALES Y REACTIVOS:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>5 soporte universal</td>
                            <td>5 probeta</td>
                        </tr>
                        <tr>
                            <td>5 aros</td>
                            <td>5 densímetro</td>
                        </tr>
                        <tr>
                            <td>5 malla de asbesto</td>
                            <td>5 pipeta</td>
                        </tr>
                        <tr>
                            <td>5 pinza para tubo</td>
                            <td>5 matraz</td>
                        </tr>
                        <tr>
                            <td>15 tubo de ensayo</td>
                            <td>5 luna de reloj</td>
                        </tr>
                        <tr>
                            <td>5 termómetro</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <table border="1">
                    <thead>
                        <tr>
                            <th colspan="2">Reactivos:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Yodo metálico</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Granallas de Zinc</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Cinta de magnesio</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Ácido sulfúrico</td>
                            <td>10 mL</td>
                        </tr>
                        <tr>
                            <td>Ácido clorhídrico concentrado</td>
                            <td>10 mL</td>
                        </tr>
                        <tr>
                            <td>Cloruro de sodio</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Etanol</td>
                            <td>15 mL</td>
                        </tr>
                        <tr>
                            <td>Éter</td>
                            <td>10 mL</td>
                        </tr>
                        <tr>
                            <td>Sulfato de cobre</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br>

                    <p><strong>Explosiones:</strong> Muchas explosiones pueden ocurrir en las siguientes situaciones:</p>
                    <p>
                        1] Una reacción exotérmica incontrolable.<br>
                        2] Una explosión de residuos de peróxido al concentrar soluciones de éter hasta sequedad<br>
                        3] Por calentamiento, secado, destilación o impacto de compuestos inestables.<br>
                        4] Al mezclar sustancias que generen vapores inflamables o explosivos.<br>
                        5] Por desconocer las condiciones de almacenamiento y uso de cada sustancia.<br>
                    </p>

                    <h2 id="PARTE EXPERIMENTAL">PARTE EXPERIMENTAL</h2>
                    <p><strong>-PARTE EXPERIMENTAL.</strong></p>
                    <p><strong>1.- Determinación del punto de ebullición.</strong>Tomar en un vaso de precipitado 100 ml de agua y armar el equipo de la siguiente manera:</p>
                    
                    <div class="image-container">
                        <img src="Chemistry_Images\practical 5\prac 5.1.jpg" alt="Equipos" class="Equipos">
                    </div>
    
                    
                    <p><strong>2.- Determinación de densidades:</strong></p>
                    <li>-	Densidad de un sólido, utilizando una balanza determine la masa de un sólido, luego sumérjalo a una probeta que contenga 20 ml de agua, determine el volumen del sólido y calcule su densidad.</li>
                    <li>-	Densidad de un líquido, Pese una probeta  de 100 ml, enseguida añada 10 ml de una solución de cloruro de sodio, vuelva a pesar el conjunto. Por diferencia de pesos determine la masa de la sustancia liquida y calcule la densidad.</li>
                
                    <p>Tome una probeta y vierta 80 ml de una solución de cloruro de sodio, introduzca adecuadamente en densímetro y lea la densidad de la mezcla.</p>
                </ul>
                
                <h2 id="Identificación de cambios físicos">3.- Identificación de cambios físicos</h2>
                <p></p><strong>a.	Se recoge el yodo (0.1g) en una cápsula. (sublimación de yodo)</strong></p>
                <li>I.- Se prende el mechero y se calienta la capsula por espacio de 1-2 minutos y luego de los minutos que pasaron se puede observar partículas solidas de yodo, cuando está muy caliente se comienza a formar gas de yodo (es de color violeta)</li>
                <li>II.- Acto seguido se deja enfriar la cápsula y se pudo observar que la cápsula se encuentra como al inicio.</li> 
                
                <p>*	Realice el mismo experimento utilizando Naftalina, pero en la parte superior coloque un cono de color negro para capturar los vapores.</p>

                <p><strong>b.	Se recoge la cera en el tubo de ensayo</strong></p>
                <li>I.- Se prende el mechero y con nuestra pinza se sujeta al tubo de ensayo II.- Se lo calienta el tubo de ensayo y se puede observar que cuanto más caliente está la cera se comienza a convertir en estado líquido luego de observar se pasa al siguiente</li>
                <li>III.- Con cuidado se empieza a enfriar el tubo de ensayo con unas gotas de agua que salen del caño, y se observa que la cera de nuevo vuelve a estado sólido.</li>

                <h2 id="Identificación de cambios químicos">4.- Identificación de cambios químicos</h2>
                <p><strong>a.	En un tubo de ensayo se recoge 1 ml de HCl(c)</strong></p>
                <li>I.- luego se agrega un pedacito de tira de cinta de magnesio o aluminio.</li>
                <li>II.-se puede observar que la tirita de magnesio o aluminio se comienza a oxidar al entrar en contacto con la sustancia que seencontraba en el tubo de ensayo</li>

                <p><strong>En el tubo de ensayo se recoge 2 ml de sulfato de cobre II.</strong></p>
                <li>I.- luego se agrega una granalla de zinc( o un clavo de acero) y se agita golpeándolo con la mano y observar.</li>

                <p><strong>c.	Combustión:</strong></p>
                <li>En una capsula colocar unas gotas de acetona y acercar un cerillo encendido. Observar.</li>

                <h2 id="RESULTADOS Y CONCLUSIONES"> RESULTADOS Y CONCLUSIONES</h2>

                <h2 id="Cuestionario">5. Cuestionario</h2>
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                <
    
                <h2 id="Referencia">Referencia</h2>
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
<div id="Questionaire" class="content">
    <h3>Questionaire</h3>
    <form action="../questionnaire.php" method="GET">
    <!-- Pass the practical number as a GET parameter -->
    <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
    <button type="submit" class="styled-button">Ir al cuestionario</button>
    </form>
                
<ol>
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_6.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_5.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../chemistry/Química.html'">Inicio</button>
                </div>
</footer>

</body>
</html>



