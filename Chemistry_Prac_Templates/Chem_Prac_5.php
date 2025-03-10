<?php
include '../header.php';
$practical_number = "C5"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 05: Reglas de seguridad en el laboratorio</title>
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
                <li><a href="#Objetivos">Objetivos</a></li>
                <li><a href="#Marco Teórico">Marco Teórico</a></li>
                <li><a href="#PARTE EXPERIMENTAL">PARTE EXPERIMENTAL</a></li>
                <li><a href="#RESULTADOS Y CONCLUSIONES">RESULTADOS Y CONCLUSIONES</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#Referencia">Referencia</a></li>

            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            PRÁCTICA N° 05: PROPIEDADES Y TRANSFORMACIONES DE LA MATERIA </h1>
                <a href='Simulation/chem_sim_5.php'      class="styled-button">Simulation</a>
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
        </section>
    </div>
</body>
</html>



-	RESULTADOS Y CONCLUSIONES.