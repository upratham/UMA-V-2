<?php
include '../header.php';
$practical_number = "B7"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     
   
    <!-- End of Profile Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°7: LA DIFUSIÓN Y PROCESOS BIOLÓGICOS DE LA MEMBRANA CELULAR: ÓSMOSIS Y DIÁLISIS</title>
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

        table,
        th,
        td {
            border: 1px solid black;
            padding: 20px;
        }

        tr:hover {background-color: #D6EEEE;}

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

        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
            <h3>Contents</h3>
            <ul>
                <li><a href="#COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#DIFUSIÓN">DIFUSIÓN</a></li>
                <li><a href="#ÓSMOSIS">ÓSMOSIS</a></li>
                <li><a href="#PRESIÓN OSMÓTICA">PRESIÓN OSMÓTICA</a></li>
                <li><a href="#DIÁLISIS">DIÁLISIS</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA N°7: LA DIFUSIÓN Y PROCESOS BIOLÓGICOS DE LA MEMBRANA CELULAR: ÓSMOSIS Y DIÁLISIS</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Identifica la característica de permeabilidad de la membrana celular.</li>
                    <li>Reconoce e identifica soluciones hipotónicas, isotónicas e hipertónicas.</li>
                    <li>Diferencia las respuestas celulares a diferentes concentraciones salinas.</li>
                    <li>Describe los mecanismos de difusión y ósmosis.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\1.jpg" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>La membrana celular es una estructura que se encuentra formando parte de todas las células, es la encargada de delimitar el contenido celular, así mismo, regula el tránsito de las moléculas tanto del interior como del exterior de la célula, permite reconocimiento comunicación celular y en organismos formadores de tejido provee sitios de anclaje para la formación de uniones celulares.</p><br>
                <p>La membrana celular se encuentra constituida por proteínas, lípidos y glúcidos, siendo los dos primeros los que se presentan en mayor abundancia; cuenta con una bicapa lipídica, la cual está constituida principalmente por fosfolípidos y esteroles. Inmersa en ella podemos localizar a las proteínas, las cuales pueden atravesar por completo la membrana celular llamándose proteínas integrales o pueden estar solo presentes en una de sus caras denominándose proteínas periféricas. Los glúcidos que se encuentran formando parte de la membrana siempre se encuentran asociados a los lípidos denominándose fosfolípidos o asociadas a proteínas denominándose glucoproteínas.</p>
                <p>La membrana celular no es una estructura rígida e impermeable, es todo lo contrario es una estructura fluida es decir que sus componentes se encuentran en movimiento y por las características fisicoquímicas de sus componentes esta es semipermeable, es decir, que permite el paso selectivo de sustancias del interior al exterior y viceversa.
                    <br>
                    La semipermeabilidad de la membrana celular permite que en ella se realicen dos procesos biológicos importantes: ósmosis y diálisis. Para poder entender los procesos biológicos debemos entender el proceso denominado Difusión.
                    </p>
                <br>
                <h3 id="DIFUSIÓN">2.2	DIFUSIÓN</h3>
                <p>Es el movimiento de partículas en medios sólidos, líquidos o gaseosos siguiendo una gradiente de concentración, es decir, que las partículas se moverán de un lugar donde hay mayor número (alta concentración) de ellas hacia un lugar donde no hay o hay un menor número de estas (baja concentración), generando así un flujo irreversible de las partículas, este proceso detendrá cuando las partículas se encuentren homogéneamente distribuidas en el medio en el que se hallen.</p>
                <p>Este proceso se ve influenciado por la viscosidad, solubilidad, caudal, tipo de componente y número de componentes. </p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\2.png" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\3.png" alt="Fowler position" class="center">
                </div>
                <h3 id="ÓSMOSIS">2.3	ÓSMOSIS</h3>
                <p>Es un proceso de difusión donde las moléculas de agua atraviesan una membrana semipermeable siguiendo una gradiente de concentración, es por ello que este proceso biológico es considerado un tipo especial de transporte pasivo.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\4.jpg" alt="Fowler position" class="center">
                </div>
                <h3 id="PRESIÓN OSMÓTICA">2.4	PRESIÓN OSMÓTICA</h3>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\5.jpg" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>Es la presión que se requiere para detener el flujo de agua a través de una membrana semipermeable que se encuentra separando dos soluciones de composiciones distintas.</p>

                <p><strong>a.	Ósmosis en una célula eucariota animal</strong></p>
                <p>Solución Hipertónica: Si la célula se encuentra en una solución hipertónica, es decir, el contenido de solutos es mayor (menor concentración de agua libre) del que hay en el interior de la célula, empezará a perder agua, a este fenómeno de se llama crenación.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\6.png" alt="Fowler position" class="center">
                </div>
                <p>Solución Isotónica: Si la célula se encuentra en una solución isotónica, es decir, el contenido de solutos es igual tanto en el exterior como en el interior de la célula, esta se encontrará en equilibrio dinámico, esto significa que la entrada y salida de las moléculas de agua será constante.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\7.png" alt="Fowler position" class="center">
                </div>
                <p>Solución Hipertónica: Si la célula se encuentra en una solución hipotónica, es decir, el contenido de solutos es menor (mayor concentración de agua libre) del que hay en el interior de la célula, ésta empezara a ganar agua hasta vulnerar la membrana celular, a este fenómeno se le llama lisis.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\8.png" alt="Fowler position" class="center">
                </div>
                <p><strong>b.	Ósmosis en una célula eucariota animal</strong></p>
                <p>Solución Hipertónica: Si la célula se encuentra en una solución hipertóniça, es decir, el contenido de solutos es mayor (menor concentración de agua libre) del que hay en el interior de la célula, ésta empezara a perder agua, a este fenómeno se le llama plasmólisis.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\9.png" alt="Fowler position" class="center">
                </div>
                <p>Solución Isotónica: Si la célula se encuentra en una solución isotónica, es decir, el contenido de solutos es igual tanto en el exterior como en el interior de la célula, esta se encontrará en equilibrio dinámico, esto significa que la entrada y salida de las moléculas de agua será constante.</p>
                <div class="image-container">
                    <img src="" alt="Fowler position" class="center">
                </div>
                <p>Solución Hipertónica: Si la célula se encuentra en una solución hipotónica, es decir, el contenido de solutos es menor (mayor concentración de agua libre) del que hay en el interior de la célula, ésta empezará a ganar agua, a este fenómeno se le llama turgencia.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\10.png" alt="Fowler position" class="center">
                </div>

                <h3 id="DIÁLISIS">2.5	DIÁLISIS</h3>
                <p>Es un proceso de difusión de moléculas de bajo peso molecular (soluto) las cuales deben atravesar una membrana semipermeable siguiendo una gradiente de concentración, es por ello que este proceso biológico también es considerado un tipo especial de transporte pasivo.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\11.png" alt="Fowler position" class="center">
                </div>

                <h2 id="MATERIALES Y MÉTODOS">III.	MATERIALES Y MÉTODOS</h2>
                <p><strong>3.1	MATERIALES DE LABORATORIO</strong></p>
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div style="width: 45%;">
                        <ul>
                            <li>Soluciones salinas al 0.2%</li>
                            <li>Colorante azul de metileno</li>
                            <li>Sangre a 0.896, 0.996 y 5%</li>
                            <li>Láminas portaobjetos</li>
                            <li>Láminas cubreobjetos</li>
                            <li>Microscopio compuesto</li>
                            <li>Papel secante</li>
                            <li>40ml de agua helada</li>
                            <li>40ml de agua caliente</li>
                            <li>Nitrato de plata</li>
                            <li>Solución de lugol</li>
                            <li>40 ml de solución de cloruro de sodio al 30%</li>
                            <li>Solución de almidón 1% 40ml</li>
                            <li>2 beakers de 100 ml</li>
                            <li>1 Beaker de 500ml</li>
                            <li>Embudo</li>
                            <li>Hornilla</li>
                        </ul>
                    </div>
                    <div style="width: 45%;">
                        <ul>
                            <li>Hojas de Elodea sp.</li>
                            <li>Marcadores para vidrio</li>
                            <li>1 buche de pollo limpio</li>
                            <li>Palito de anticucho</li>
                            <li>Pabilo</li>
                        </ul>
                    </div>
                </div>

                <h3 id = "PROCEDIMIENTO">3.3	PROCEDIMIENTO</h3>
                <p><strong>A.	DIFUSIÓN</strong></p>
                <p>Actividad 1: Influencia de la temperatura en la difusión de un colorante<br>
                En un beacker de 100 ml, agregar ¾ de volumen de agua helada y en otro beacker igual volumen de agua recién hervida. Añadir simultáneamente a cada beacker una gota de colorante azul de metileno (no mover los beacker) y observar el comportamiento de la gota en el agua. Anotar sus observaciones.</p>
                <br>
                <p><strong>B.	ÓSMOSIS</strong></p>
                <p>Actividad 2: Ósmosis en una célula eucariota animal<br>
                    Efecto de soluciones hipotónicas, hipertónicas e hipotónicas en células animales (glóbulos rojos). Sobre una lámina porta objeto colocar una gota de sangre, agregar una gota de solución salina al 0.2%, cubrir con una lámina cubreobjetos. Iniciar su observación a 40X y esquematizar a 400X. Repita el procedimiento con las soluciones al 0.9 % y 5%.
                    </p>
                <p>Actividad 3: Ósmosis en una célula eucariota vegetal<br>
                    Efecto de soluciones hipotónicas, hipertónicas e isotónicas en células vegetales (Elodea sp). Sobre una lámina porta objeto colocar una hoja de Elodea sp. agregar una gota de solución salina al 0.2%, cubrir con una lámina cubreobjetos. Iniciar su observación a 40X y esquematizar a 400X. Repita el procedimiento con las soluciones al 0.9 % y 5%.
                    </p>
                <p><strong>C.	DIÁLISIS</strong></p>
                <p>Actividad 4: Atar con pabilo un extremo del buche, por el otro extremo añadir, con ayuda del embudo por partes iguales solución de Cloruro de Sodio al 30% y solución de almidón al 1% y cerrar con pabilo el extremo que quedó abierto, mezclar y con ayuda del palito de madera, colocar en un beacker que contenga mismo volumen de agua destilada y solución de Lugol hasta cubrir el buche, dejar reposar por 30 minutos.</p>
                <ol>
                    <li>1.	DIÁLISIS DE AFUERA HACIA DENTRO: Pasado el tiempo retirar el buche y vaciar el contenido de este en un beacker. Anotar los cambios.</li>
                    <li>2.	DIÁLISIS DE ADENTRO HACIA AFUERA: El beacker en el cual fue colocado el buche (agua + lugol) agregar unas gotas de nitrato de plata. Anotar los cambios.</li>
                </ol>

                <h2 id = "RESULTADOS">IV.	RESULTADOS</h2>
                <p><strong>A.	DIFUSIÓN
                    <br>
                    Actividad 1: Influencia de la temperatura en la difusión de un colorante
                </strong></p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\12.png" alt="Fowler position" class="center">
                </div>
                <p>Describa brevemente lo observado:</p>

                <p><strong>B.	ÓSMOSIS
                    <br>
                    Actividad 2: Ósmosis en una célula eucariota animal
                </strong></p>

                <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
                    <tr>
                        <th rowspan="4">OBSERVACIÓN</th>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Aumento</td>
                        <td>Aumento</td>
                        <td>Aumento</td>
                    </tr>
                    <tr>
                        <td>Tipo de solución salina</td>
                        <td>Tipo de solución salina</td>
                        <td>Tipo de solución salina</td>
                    </tr>
                    <tr>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                    </tr>
                </table>
            
                <br><br>
                <p><strong>Actividad 3: Ósmosis en una célula eucariota vegetal</strong></p>
            
                <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
                    <tr>
                        <th rowspan="4">OBSERVACIÓN</th>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                        <td>
                            <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>Aumento</td>
                        <td>Aumento</td>
                        <td>Aumento</td>
                    </tr>
                    <tr>
                        <td>Tipo de solución salina</td>
                        <td>Tipo de solución salina</td>
                        <td>Tipo de solución salina</td>
                    </tr>
                    <tr>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                        <td>¿Qué fenómeno le ocurre a la célula?<br>Describa brevemente</td>
                    </tr>
                </table>

                <p><strong>C.	DIÁLISIS
                    <br>
                    Actividad 4: Observe el esquema y complete el proceso de diálisis
                </strong></p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 7\13.png" alt="Fowler position" class="center">
                </div>

                <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Buche de pollo</th>
                            <th style="text-align: center;">Beaker con lugol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align: top;">
                                ¿Habrá alguna molécula nueva en el interior de cada dibujo (si/no)? Fundamente su respuesta
                            </td>
                            <td style="vertical-align: top;"></td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;">
                                ¿Cómo identifico esa nueva molécula?
                            </td>
                            <td style="vertical-align: top;"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="image-container">
                    <img src="PPhotos\Biology Diagrams\Prac 7\14.png" alt="Fowler position" class="center">
                </div>
            
                <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

                <h2 id = "REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
                <p>Audesirk T., Audesirk G & Byers B. (2008) Biología: La vida en la tierra. 8va. Edición México: Pearson. Prentice-Hall Hispanoamericana</p>
                <p>Solomon E, Berg L & Martin D (2013). Biología. 9na. Edición. México: Cengage Learning Editores S.A.</p>

    <!-- Second Table -->
    <table border="1" cellpadding="5" cellspacing="0" style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr>
                <th style="text-align: left;">CRITERIOS</th>
                <th style="text-align: center;">LOGRADO</th>
                <th style="text-align: center;">NO LOGRADO</th>
                <th style="text-align: center;">PUNTAJE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Explica la difusión del azul de metileno.</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;">0.5 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Identifica a través de dibujos las células eucariotas animales y coloca el aumento.</td>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">1 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Determina el tipo de solución salina expuesta en la célula animal explicando el fenómeno observado en cada célula.</td>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">2 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Identifica las células eucariotas vegetales a través de dibujos y coloca el aumento.</td>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">1 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Determina el tipo de solución salina expuesta en la célula vegetal explicando el fenómeno observado en cada célula.</td>
                <td style="text-align: center;">6</td>
                <td style="text-align: center;">2 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Identifica el proceso de diálisis a través del esquema reconociendo la molécula que está al interior del buche y beaker.</td>
                <td style="text-align: center;">2</td>
                <td style="text-align: center;">1 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td>Explica coherentemente qué molécula realiza diálisis.</td>
                <td style="text-align: center;">1</td>
                <td style="text-align: center;">0.5 - 0</td>
                <td style="text-align: center;"></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;" colspan="3">TOTAL</td>
                <td style="text-align: center;"></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
