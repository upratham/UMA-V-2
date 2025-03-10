<?php
include '../header.php';
$practical_number = "C6"
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
            display: flex; /* Changes display to flex to help with the layout */
            flex-direction: column; /* Stack elements vertically */
        }

        .practical-header {
            background-color: #f0f0f0;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin: 0;
            width: 100%;
            height: 100%;
            min-height: 100vh;
        }

        /* Sidebar (Shortcuts/Contents) */
        .sidebar {
            width: 20%;
            background-color: #f4f4f4;
            position: sticky;
            top: 0; /* Sticks at the top of the viewport */
            align-self: flex-start; /* Ensures sidebar stays at the top when scrolling */
            overflow-y: auto; 
            padding: 10px;
            height: 100vh;
            float:left;
        }
        .sidebar a {
            text-decoration: none; 
            color: #333;
            display: block;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #ddd;
            padding-left: 10px;
        }

        .sidebar h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }

        .sidebar ul li a:hover {
            color: #007BFF;
        }

        /* Main Content Section */
        #practical-content {
            flex-grow: 1;
            flex: 1; /* Takes the remaining space */
            padding: 20px;
            overflow-y: auto; /* Allows the main content to scroll */
            display: inline-block;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        /* Images styling */
        .image-container {
            text-align: left;
        }

        .anatomical-image {
            max-width: 100%;
            height: auto;
        }

        .label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
        .practical-header {
            position: sticky;
            top: 0;
            background-color: white; /* Ensures the logo background stays clean when sticky */
            z-index: 100; /* Ensures it stays above the rest of the content */
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd; /* Optional: Adds a bottom border to the header */}
        
            .styled-button {
            padding: 12px 24px; /* Larger padding for a bigger button */
            background-color: #E40D5E;
            color: white;
            border: black;
            border-radius: 8px; /* Larger border radius for a smoother look */
            cursor: pointer;
            font-size: 18px; /* Larger font size */
            transition: background-color 0.3s ease;
            margin-left: 20px; /* Adds space between the text and the button */
            justify-content: center; /* Centers both the text and the button */
            align-items: center;
            display: flex;
            width: 80%;
        }

        .styled-button:hover {
        background-color: #0e0d07; /* Darker color on hover */
        }
}

    </style>
</head>
<body>
    <header class="practical-header">
        <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>

    <div class="container">
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contenido</h3>
            <ul>
                <li><a href="#OBJETIVOS">OBJETIVOS</a></li>
                <li><a href="#FUNDAMENTO TEÓRICO">FUNDAMENTO TEÓRICO</a></li>
                <li><a href="#MATERIALES Y REACTIVOS">MATERIALES Y REACTIVOS</a></li>
                <li><a href="#PROCEDIMIENTO EXPERIMENTAL">PROCEDIMIENTO EXPERIMENTAL</a></li>
                <li><a href="#TABLA DE RESULTADOS">TABLA DE RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            PRÁCTICA N° 06: FUNCIONES QUÍMICAS INORGÁNICAS</h1>
                <a href='Simulation\chem_sim_6.php'       class="styled-button">Simulation</a>
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

                <h2 id="CUESTIONARIO">5. CUESTIONARIO</h2>
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                <ol>
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
        </section>
    </div>
</body>
</html>
