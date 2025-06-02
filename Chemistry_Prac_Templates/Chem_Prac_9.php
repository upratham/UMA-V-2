<?php
include '../header.php';
$practical_number = "C9"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de química 9: Reglas de seguridad en el laboratorio</title>
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

    <button class="tab-button active" onclick="window.location.href='https://chem-sim-wnth.vercel.app/experiment5';">
    <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
    Simulación
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
            <h3>Contenido</h3>
            <ul>
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#FUNDAMENTOS TEÓRICOS">FUNDAMENTOS TEÓRICOS</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
                <li><a href="#REFERENCIA">REFERENCIA</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 09: REACCIONES QUÍMICAS</h1>
             
                <h2 id="OBJETIVOS">1. OBJETIVOS</h2>
                <ul>
                    <li>1.1 Reconocer experimentalmente diferentes tipos de reacciones químicas.</li>
                </ul>
                
                <h2 id="FUNDAMENTOS TEÓRICOS">2. FUNDAMENTOS TEÓRICOS</h2>
                <p>De acuerdo a la manera como se combinan las sustancias (reactivos) para darorigen a otras nuevas, estas se pueden clasificar en:</p>

                <p><strong>2.1 Reacciones molecular:</strong>si todas las moléculas participantes tienen carácter neutro.Éstas pueden ser:</p>
                
                <p><strong>2.1.1 Reacciones de combinación:</strong>en estas reacciones dos o más sustancias secombinan para dar una nueva.</p>
                <li>A + B→ AB</li>

                <p><strong>2.1.2 Reacciones de descomposición:</strong>una sustancia se descompone para producir doso más sustancias nuevas.</p>
                <li>AB→ A + B</li>

                <p><strong>2.1.3 Reacciones de desplazamiento: </strong>en estas reacciones un elemento o más de losreactivos es reemplazado por otro u otros.</p>
                <li>A + BC→ AC + B</li>

                <p><strong>2.1.4 Reacción de doble desplazamiento: </strong>en estas reacciones ocurre un intercambioentre los átomos de los reactivos, a este grupo pertenecen las reacciones deprecipitación y neutralización.</p>
                <li>AB + CD→ AD + CB</li>

                <h4><span class="highlight">2.1.4.1 Precipitación:</span></h4>
                <p>Es la reacción que ocurre entre dos compuestos solubles que producen una sustancia soluble y una insoluble.</p>
                <p class="reaction">K<sub>2</sub>CrO<sub>4</sub>(ac) + Ba(NO<sub>3</sub>)<sub>2</sub>(ac) → KNO<sub>3</sub>(ac) + BaCrO<sub>4</sub>(s)</p>
            
                <h4>2.1.4.2 Neutralización:</h4>
                <p>Es una reacción entre un ácido y una base y producen una sal y agua.</p>
                <p class="reaction">H<sub>2</sub>S(ac) + NaOH(ac) → Na<sub>2</sub>S(s) + H<sub>2</sub>O(l)</p>
            
                <h4>2.2 Reacciones iónicas:</h4>
                <p>En estas reacciones algunas de las sustancias por todas se encuentran en estado iónico (iones positivos y iones negativos). Con frecuencia las reacciones de doble desplazamiento se escriben de esta forma.</p>
                <p class="reaction">HCl(ac) + NaOH(ac) → H<sup>+</sup>(ac) + Cl<sup>-</sup> + Na<sup>+</sup>(ac) + OH<sup>-</sup>(ac)</p>
            
                <p>
                    Puesto que los anteriores procesos no son directamente observables, es necesario tener en cuenta los criterios establecidos en la práctica referente a cambios químicos para determinar cuándo ha ocurrido una reacción química.
                </p>
                <p>
                    Es necesario aclarar que existen otras formas de clasificación de las reacciones químicas, teniendo en cuenta diversos criterios, <strong>como</strong> por ejemplo: reacciones endotérmicas y reacciones exotérmicas; reacciones con transferencia de electrones (reacciones de óxido-reducción) y reacciones sin transferencia de electrones; reacciones de neutralización; reacciones de precipitación, entre otras.
                </p>

                <h4>2.3 Reacciones de Óxido-Reducción:</h4>
    <p>
        En las reacciones Redox ocurre una transferencia de electrones entre los reactantes, se identifica por el cambio en el número de oxidación, mientras uno se oxida (aumenta) el otro se reduce (disminuye) simultáneamente.
    </p>
    <p><span class="highlight">Oxidación:</span> Es el proceso que implica pérdida de electrones y por tanto aumenta su número de oxidación.</p>
    <p><span class="highlight">Reducción:</span> Es el proceso que implica ganancia de electrones, por lo <strong>tanto</strong> disminuye su número de oxidación.</p>
    <p><span class="highlight">Agente oxidante:</span> Es la sustancia que se reduce o gana electrones.</p>
    <p><span class="highlight">Agente reductor:</span> Es la sustancia que fácilmente libera o cede electrones, se reduce.</p>

    <p class="highlight">Ejemplo:</p>
    <p class="reaction">Zn<sup>0</sup> + CuSO<sub>4</sub> → ZnSO<sub>4</sub> + Cu<sup>0</sup></p>
    <p class="reaction">Zn<sup>0</sup> - 2e<sup>-</sup> → Zn<sup>+2</sup> (oxidación, agente reductor)</p>
    <p class="reaction">Cu<sup>0</sup> + 2e<sup>-</sup> → Cu<sup>0</sup> (reducción, agente oxidante)</p>
       

    <table border="1">
        <thead>
            <tr>
                <th colspan="2">3. MATERIALES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5 mechero de bunsen</td>
                <td>5 malla metálica con asbesto</td>
            </tr>
            <tr>
                <td>30 tubos de ensayo</td>
                <td>5 espátula metálica</td>
            </tr>
            <tr>
                <td>5 gradilla para tubos de ensayo</td>
                <td>5 pinza metálica para tubos de ensayo</td>
            </tr>
            <tr>
                <td>5 pipeta graduada de 10ml</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th colspan="2">4. Reactivos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Clorato de potasio (s)</td>
                <td>5 g</td>
            </tr>
            <tr>
                <td>Magnesio metálico en cinta</td>
                <td>5 g</td>
            </tr>
            <tr>
                <td>Zinc metálico en granallas</td>
                <td>5 g</td>
            </tr>
            <tr>
                <td>Ácido clorhídrico diluido (0.1 N)</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Solución de yoduro de potasio 0.5M</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Solución de nitrato de plomo 0.5M</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Solución de carbonato de sodio 0.1M</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Ácido clorhídrico 4.0N</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Solución de hidróxido de sodio al 0.1N</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Solución de cloruro de bario 0.1M</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Ácido sulfúrico 1.0M</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Fenolftaleína en solución</td>
                <td>5 g</td>
            </tr>
            <tr>
                <td>Acetato de plomo</td>
                <td>15 mL</td>
            </tr>
            <tr>
                <td>Sulfato de cobre (II) diluido</td>
                <td>15 mL</td>
            </tr>
        </tbody>
    </table>
    <br>

    <h3 id="PROCEDIMIENTO">3. PROCEDIMIENTO</h3>
    <h4>5.1 Reacciones de combinación (síntesis).</h4>
    <p>
        Tomar 1 cm de cinta de magnesio <strong>con</strong> una pinza para crisol sujetarla por un extremo y colocarla directamente a la <strong>llama</strong> del mechero. Cuando comience a producirse una luz blanca intensa (deslumbrante), retire la cinta del mechero y manténgala lejos de la cara mientras ocurra la reacción. Dejar enfriar y luego recoger en un vidrio de reloj el producto de <strong>la</strong> reacción y examinar su aspecto. Añadir de 3 a 5 gotas de agua y una gota de solución de fenolftaleína.
    </p>
    <p>
        Otro ejemplo de reacciones de combinación es cuando se combinan aluminio en polvo y azufre en polvo; Calentándola suavemente hasta que se inicie la reacción. (Consultar la ecuación química de la reacción).
    </p>

    <h4>5.2 Reacciones de descomposición.</h4>
    <p>
        Colocar 1g de clorato de potasio en un tubo de ensayo limpio y seco; sujetar con las pinzas el tubo de ensayo y calentar directamente en la llama del mechero (no dirigir la boca del tubo hacia su cara ni hacia la de los compañeros); cuando el clorato de potasio se funda y desprenda burbujas, acercar a la boca del tubo un palillo con un punto de ignición. Observe cuidadosamente el residuo y las paredes del tubo. Otro ejemplo de reacciones de descomposición es utilizando óxido de mercurio(II). (Consultar la ecuación química de la reacción).
    </p>

    <h4>5.3 Reacciones de desplazamiento.</h4>
    <p>
        Verter 3ml de solución de ácido clorhídrico 4.0 N en un tubo de ensayo y agregar una granalla de zinc. Recoger el gas que se produce en otro tubo de ensayo. Este se coloca invertido sobre el tubo en el cual se realiza la reacción; una vez que el tubo esté lleno de gas, en esa misma posición se lleva a la llama del mechero. Anote las observaciones.
    </p>

    <h4>5.4 Reacción de doble desplazamiento.</h4>
    <p>
        Colocar en un tubo de ensayo 1 ml de solución de yoduro de potasio 0.5M y en otro tubo 1 ml de solución de nitrato de plomo 0.5M. Mezclar el contenido de ambos tubos. En un tubo de ensayo limpio y seco vierta 3ml de agua y agregue unos cristalitos de acetato de plomo, agite hasta que los cristales se disuelvan completamente. Adicionar 1 ml de solución de yoduro de potasio 0.5M y agite. Otro ejemplo de este tipo de reacción es la combinación de nitrato de plata y cloruro de sodio. (Consultar la ecuación química de la reacción).
    </p>


    <h4>4.5 Estudio de otras reacciones.</h4>

    <div class="experience">
        <strong>Experiencia N° 1.</strong> En un tubo de ensayo colocar 5 ml de sulfato de cobre 1M y dejar caer limaduras de hierro (un clavo).
    </div>

    <div class="experience">
        <strong>Experiencia N° 2.</strong> En un tubo de ensayo colocar 2 ml de solución de permanganato de potasio 0.5M, acidular con 3 gotas de ácido sulfúrico concentrado y agregar unos cristales de sulfito de sodio agitar la solución.
    </div>

    <div class="experience">
        <strong>Experiencia N° 3.</strong> En un tubo de ensayo coloque 2 ml de ácido nítrico concentrado y deje caer en su interior un trocito de lámina de cobre.
    </div>

    <div class="experience">
        <strong>Experiencia N° 4.</strong> En un tubo de ensayo coloque 2 ml de solución de peróxido de hidrógeno, 5 gotas de ácido sulfúrico y 1 ml de yoduro de potasio 1M.
    </div>

    <div class="experience">
        <strong>Experiencia N° 5.</strong> En un tubo de ensayo coloque 2 ml de solución acuosa diluida de permanganato de potasio, le agregamos 5 gotas de ácido sulfúrico y la misma cantidad de gotas de solución de yoduro de potasio.
    </div>

    <div class="experience">
        <strong>Experiencia N° 6.</strong> En un tubo de ensayo coloque 2 ml de solución acuosa diluida de permanganato de potasio, le agregamos 5 gotas de solución al 10% de NaOH y la misma cantidad de gotas de solución de yoduro de potasio.
    </div>

    <div class="experience">
        <strong>Experiencia N° 7.</strong> En un tubo de ensayo coloque 1 ml de solución acuosa de Dicromato de Potasio, le agregamos 5 gotas de solución de ácido sulfúrico 6M y 10 gotas de etanol. Agitamos para homogenizar, y si no observamos ningún cambio lo calentamos.
    </div>

    <div class="experience">
        <strong>Experiencia N° 8.</strong> En un tubo de ensayo coloque 2 ml de ácido sulfúrico 0.5M 1 ml de yoduro de potasio 0.5M. A la disolución resultante se le añade gota a gota 1 ml de yodato de potasio 0.5M.
    </div>

                    <ol>
                        <li>Escriba las ecuaciones químicas (completas y balanceadas) representativas de cada una de las reacciones efectuada en el procedimiento.</li>
                        <li>Escriba mínimo otros dos ejemplos con su respectiva ecuación de cada uno de los tipos de reacciones estudiadas.</li>
                        <li>Clasifique cada una de las reacciones del experimento 5.</li>
                        <li>Las reacciones de desplazamiento se explican mediante la <strong>serie de actividad de los metales</strong>. Escriba en su orden la serie y dé explicaciones referentes a este caso.</li>
                        <li>Al agregar el magnesio se forma efervescencia. ¿A qué se debe?</li>
                        <li>¿Cómo se determina el estado de oxidación de un elemento o de un compuesto? Ponga tres ejemplos.</li>
                        <li>¿Cuántos métodos de balanceo conoce? Describa brevemente el procedimiento de cada método.</li>
                        <li>Balancear las siguientes reacciones:</li>

                        <ul>
                            <li>KBr + H<sub>2</sub>SO<sub>4</sub> → K<sub>2</sub>SO<sub>4</sub> + Br<sub>2</sub> + SO<sub>2</sub> + H<sub>2</sub>O</li>
                            <li>KI + H<sub>2</sub>SO<sub>4</sub> → K<sub>2</sub>SO<sub>4</sub> + I<sub>2</sub> + H<sub>2</sub>S + H<sub>2</sub>O</li>
                            <li>Cr<sub>2</sub>O<sub>3</sub> + Na<sub>2</sub>CO<sub>3</sub> + KNO<sub>3</sub> → NaCrO<sub>4</sub> + CO<sub>2</sub> + KNO<sub>2</sub></li>
                            <li>NH<sub>4</sub>OH + HCl → NH<sub>4</sub>Cl + H<sub>2</sub>O</li>
                            <li>HNO<sub>3</sub> + Zn → Zn(NO<sub>3</sub>)<sub>2</sub> + H<sub>2</sub></li>
                            <li>H<sub>2</sub>S + FeCl<sub>3</sub> → S + FeCl<sub>2</sub> + HCl</li>
                        </ul>
                    </ol>
                

                    
    
                <h2 id="REFERENCIA">REFERENCIA</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
                
            </div>
        </section>
    <!-- Video Section -->
<div id="Video" class="content">
<h3>Video</h3>
<p>Here you can watch the instructional video related to this practical.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xNYASNEdgg8" frameborder="0" allowfullscreen></iframe>
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_10_11.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_7_8.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/chemistry/Química.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
