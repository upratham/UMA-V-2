<?php

$practical_number = "B3"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°3: EL AGUA Y LAS BIOMOLÉCULAS</title>
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
                <li><a href="COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#Las biomoléculas">Las biomoléculas</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#TUBOS CONTROLES">TUBOS CONTROLES</a></li>
                <li><a href="#MATERIALES DE LABORATORIO">MATERIALES DE LABORATORIO</a></li>
                <li><a href="#MATERIALES DEL ESTUDIANTE">MATERIALES DEL ESTUDIANTE</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#PREPARACIÓN DE LAS MUESTRAS">PREPARACIÓN DE LAS MUESTRAS</a></li>
                <li><a href="#PREPARACIÓN DE LOS TUBOS CONTROLES">PREPARACIÓN DE LOS TUBOS CONTROLES</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1> PRÁCTICA N°3: EL AGUA Y LAS BIOMOLÉCULAS</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ol>
                    <li>Identificar las propiedades del agua mediante experimentos sencillos.</li>
                    <li>Comprender la importancia del agua en la materia viva.</li>
                    <li>Reconoce la presencia de algunas biomoléculas en alimentos de uso diario.</li>
                    <li>Relaciona el uso de reactivos universales con el reconocimiento de las biomoléculas.</li>
                </ol>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <p>2.1 El Agua</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\1.gif" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>

                <p>El agua es una molécula considerada como disolvente universal. Participa en los medios intracelular y extracelular gracias principalmente a dos de sus propiedades: su tendencia a formar enlaces de hidrógeno y su carácter dipolar.</p>
                <br>
                <br>
                <br>

                <p>La solubilidad depende de la capacidad de un solvente de interactuar con un soluto con más fuerza que lo que las partículas de soluto interactúan entre sí, el agua disuelve más tipos diferentes de solutos que cualquier otro solvente. El carácter polar del agua la hace un disolvente excelente para moléculas polares y iónicas (hidrofílicas), las sustancias no polares (hidrofóbicas) son prácticamente insolubles en agua, pero solubles en disolventes no polares. </p>
                <p>Las atracciones electrostáticas entre los dipolos de las moléculas de agua son fundamentales para las propiedades del agua en sí y para su papel como disolvente. Las moléculas de agua vecinas tienden a orientarse de manera que el hidrógeno de una molécula (el extremo positivo) apunte hacia uno de los pares de electrones del oxígeno de otra molécula de agua (el extremo negativo). La asociación intermolecular direccional resultante se conoce como puente (enlace) de hidrógeno. </p>
                <p>La formación de puentes de hidrógeno entre las moléculas de agua, resulta en propiedades térmicas poco comunes como alto calor específico y alto calor de vaporización. El agua absorbe grandes cantidades de calor que utiliza en romper los puentes de hidrógeno. Su temperatura desciende más lentamente que la de otros líquidos a medida que va liberando energía al enfriarse. Esta propiedad permite que el citoplasma acuoso sirva de protección para las moléculas orgánicas en los cambios bruscos de temperatura. El agua tiene el calor específico más alto de todas las sustancias excepto el amoniaco líquido. Cuando se eleva la temperatura del agua, las moléculas deben vibrar más rápido, así, para romper los puentes de hidrógeno entre las moléculas de agua debe suministrase gran cantidad de energía al sistema.</p>
                <p>La evaporación del agua requiere una cantidad de energía excepcional para una molécula de su tamaño, por consiguiente, tanto el calor de evaporación como el punto de ebullición del agua son excepcionalmente elevados. Debido al alto calor de vaporización, la evaporación que ocurre durante la transpiración, tiene un notable efecto enfriador y la condensación tiene efecto de calentamiento.</p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\2.jpg" alt="Fowler position" class="center">
                </div>

                <h3 id="Las biomoléculas">2.2	Las biomoléculas </h3>
                <p>Una molécula es un conjunto de átomos (de un mismo elemento químico o diferentes) que están organizados e interrelacionados mediante enlaces químicos. Y si estos elementos (átomos) forman parte de los seres vivos entonces su unión dará lugar a las biomoléculas. Las biomoléculas se encuentran presentes en los seres vivos formando parte de sus células y permitiendo el adecuado funcionamiento de ellas.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\3.jpg" alt="Fowler position" class="center">
                </div>
                <p>Según su naturaleza química, las biomoléculas pueden clasificarse en inorgánicas, como lo son el agua y las sales minerales; y, en orgánicas, como los carbohidratos, lípidos, proteínas y ácidos nucleicos.</p>
                <br>
                <br>
                <br>

                <h3 id="MATERIALES Y MÉTODOS">III.	MATERIALES Y MÉTODOS</h3>
                <p><strong>3.1	LOS REACTIVOS UNIVERSALES</strong></p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\4.jpg" alt="Fowler position" class="center">
                </div>
                <p>Los reactivos universales son un conjunto de reactivos químicos usados para el reconocimiento de moléculas y biomoléculas. Existen un gran número y dependiendo de su reacción pueden reconocer un grupo de ellas o una en particular.</p>
                <br>
                <br>
                <br>

                <p><strong>A.	RECONOCIMIENTO DE CARBOHIDRATOS</strong></p>
                <p>Los carbohidratos son biomoléculas que también reciben el nombre de hidratos de carbono, glúcidos, azúcares o sacáridos.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\5.jpg" alt="Fowler position" class="center">
                </div>
                <p>GLUCOSA: Para reconocer esta biomolécula se utiliza el reactivo de BENEDICT. Este reactivo está constituido por una disolución de sulfato de cobre, citrato de sodio y bicarbonato de sodio</p>
                <p>2.	ALMIDÓN: Este polisacárido formado de amilosa y amilopectina, es reconocido a través del reactivo de LUGOL.

                    El Lugol o reactivo de yodo-yoduro, tiñe al almidón de azul oscuro y en algunos casos de negro. El color de la reacción varía debido a la proporción de amilosa (tono más azul) y amilopectina (tono más rojo).
                    </p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\6.jpg" alt="Fowler position" class="center" style="width: 300px; height: 300px;">
                </div>
                <p><strong>B.	RECONOCIMIENTO DE LÍPIDOS</strong></p>
                <p>El reactivo SUDAN III, revela la presencia de lípidos saturados que pueden estar presentes en las células y en los alimentos. 

                    Más que una reacción es una coloración de lípidos que se puede observar mejor cuando se hace diferencia con una fase acuosa.</p>

                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 3\7.jpg" alt="Example Image" style="width: 300px; height: 300px;" class="center">
                    </div>
                    
                    <p>La reacción positiva será aquella que presente dos fases; una fase rojo cereza donde se encuentran los lípidos y debajo de esta, una fase translúcida donde se encuentra el agua.
                    </p>

                <br>
                <p><strong>C.	RECONOCIMIENTO DE PROTEÍNAS</strong></p>
              
                <p>La presencia de proteínas puede determinarse por la reacción de BIURET.

                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 3\8.jpg" alt="Example Image" style="width: 300px; height: 300px;" class="center">
                    </div>

                    Este es un método general que se basa en la reacción del sulfato de cobre con los enlaces peptídicos de las proteínas en un medio alcalino.
                    El producto de la reacción es el cambio de color de celeste a violeta.
                    </p>

                <h3 id="TUBOS CONTROLES">3.2	TUBOS CONTROLES</h3>
                <p>Cada reacción de identificación de las biomoléculas debe ir acompañada de un tubo control. Un tubo control puede ser positiva, si sólo contiene la BIOMOLECULA a reconocer junto con el REACTIVO UNIVERSAL que la reconocerá.<br>
                    También se pueden preparar tubos donde se coloque una molécula que el reactivo universal NO reconoce. Este tubo se llamará CONTROL NEGATIVO, pues mostrará una reacción negativa.
                    <br>
                    En cualquiera de los casos, el tubo control sirve de punto de comparación para determinar la reacción en la muestra problema.
                    </p>

                <h3 id="MATERIALES DE LABORATORIO">3.3	MATERIALES DE LABORATORIO</h3>
                <div style="display: flex; justify-content: space-between;">
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                6 tubos de ensayo por mesa de trabajo
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Baño María
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Beacker 100 ml
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                4 gradillas
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                4 varillas de vidrio
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                4 morteros con Pilón
                            </li>
                        </ul>
                    </div>
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Pipetas Pasteur
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Dextrosa al 10%
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Solución de almidón
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Reactivo de Benedict
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Reactivo de Lugol
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Reactivo de Sudan III
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Reactivo de Biuret
                            </li>
                        </ul>
                    </div>
                </div>

                <h3 id="MATERIALES DEL ESTUDIANTE">3.4	MATERIALES DEL ESTUDIANTE </h3> 
                <div style="display: flex; justify-content: space-between;">
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                100 ml yogurt
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                100g de comida para perro
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                50g de snack de papitas
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Un plátano de seda
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Una clara cruda
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Una papa
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Plumos marcador
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Cuchillo
                            </li>
                        </ul>
                    </div>
                    <div style="width: 45%;">
                        <ul style="list-style: none; padding: 0;">
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Plato desechable
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Aplicador de madera
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Globo mediano
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                1 hoja de papel tamaño carta
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                1 soporte universal
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                1 vela y encendedor
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                1g pimienta negra molida
                            </li>
                            <li style="position: relative; padding-left: 20px;">
                                <span style="position: absolute; left: 0; color: green;">✔</span>
                                Jabón en pasta
                            </li>
                        </ul>
                    </div>
                </div>   
                
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 3\9.jpg" alt="Example Image" class="center">
                </div> 
                
                <h3 id="PROCEDIMIENTO">3.5	PROCEDIMIENTO </h3> 
                <p>Reconocimiento de las Propiedades del Agua</p>
    <ol>
        <li>
            <strong>Práctica 1: Reconocimiento de la tensión superficial del agua</strong>
            <ol style="list-style-type: decimal; margin-left: 20px;">
                <li>Agregar al plato un poco de agua de la llave.</li>
                <li>Agregar al agua del plato un poco de pimienta negra molida, hasta que se cubra ligeramente la superficie del líquido.</li>
                <li>Tocar con un aplicador de madera la superficie del líquido, hacer observaciones.</li>
                <li>Ahora tocar la superficie del líquido, con un aplicador de madera que tiene un poco de jabón en pasta en el extremo, hacer observaciones.</li>
            </ol>
        </li>
        <li>
            <strong>Práctica 2: Reconocimiento del calor específico del agua y su importancia en la termorregulación</strong>
            <ol style="list-style-type: decimal; margin-left: 20px;">
                <li>Inflar un globo con aire.</li>
                <li>Llenar un segundo globo con agua.</li>
                <li>Encender el mechero con precaución y a baja llama.</li>
                <li>Colocar el globo con aire y controlar el tiempo en que se calienta y se destruye.</li>
                <li>Colocar el segundo globo con agua y controlar el tiempo, observar si el tiempo en que se destruye es el mismo que del globo anterior.</li>
            </ol>
        </li>
        <li>
            <strong>Práctica 3: Reconocimiento de la conductividad eléctrica del agua</strong>
            <ol style="list-style-type: decimal; margin-left: 20px;">
                <li>Inflar un globo</li>
                <li>Abrir la llave del agua, hasta que se forme un chorrito fino</li>
                <li>Acercar el globo al chorrito de agua (sin mojarlo), hacer observaciones</li>
                <li>Frotar el globo sobre el cabello de algún compañero de equipo y acercarlo </li>
                <li>nuevamente al chorrito de agua (sin mojarlo), hacer observaciones</li>
            </ol>
        </li>
    </ol>
    <p>Grafique los procedimientos y anote sus observaciones en resultados. Discute acerca de la importancia del agua para la vida y discuta las propiedades observadas en el laboratorio.</p>

    <h3 id="PREPARACIÓN DE LAS MUESTRAS">PREPARACIÓN DE LAS MUESTRAS</h3>
    <ul>
        <li>Triturar el alimento sólido y agregar un poco de agua.</li>
        <li>En el caso de la identificación de <strong>LÍPIDOS</strong>, en lugar de agua usar el reactivo SUDAN III.</li>
        <li>
            Luego traspasa sólo el <strong>LÍQUIDO</strong> obtenido en la trituración a un tubo de ensayo,
            aproximadamente <strong>DOS DEDOS DE ALTO</strong> y rotula el tubo.
        </li>
        <li>
            Dependiendo de la biomolécula que se va a identificar, agrega el <strong>MISMO VOLUMEN</strong> de reactivo universal.
        </li>
    </ul>
    <div style="display: flex; gap: 20px; align-items: center;">
        <div>
            <img src="Photos\Biology Diagrams\Prac 3\10.jpg" alt="Muestra en tubo" class="left">
            <img src="Photos\Biology Diagrams\Prac 3\11.jpg" alt="Muestra con reactivo" class="right">
        </div>
    </div>
    <h3 id="PREPARACIÓN DE LOS TUBOS CONTROLES">PREPARACIÓN DE LOS TUBOS CONTROLES</h3>
    <p>
        La preparación de los tubos control es similar al de la muestra. Lo único que varía es la solución de biomolécula que se debe agregar antes del reactivo. En la siguiente tabla se observa los controles positivos que se deben preparar para cada biomolécula.
    </p>
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
        <thead>
            <tr>
                <th>Tubo control</th>
                <th>Solución conocida (referencia)</th>
                <th>Reactivo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Glucosa</td>
                <td>Dextrosa al 10%</td>
                <td>Benedict</td>
            </tr>
            <tr>
                <td>Almidón</td>
                <td>Sol. almidón</td>
                <td>Lugol</td>
            </tr>
            <tr>
                <td>Proteínas</td>
                <td>Clara de huevo</td>
                <td>Biuret</td>
            </tr>
            <tr>
                <td>Lípidos</td>
                <td>Aceite</td>
                <td>Sudan III</td>
            </tr>
        </tbody>
    </table>
    <p>
        En el caso del tubo control positivo para lípidos, colocar dentro del tubo aceite más Sudan III, homogenizar bien y luego agregar agua, hasta observar dos fases.
    </p>

    <h3 id="RESULTADOS">IV.	RESULTADOS</h3>
    <p>Completa la siguiente tabla con los resultados obtenidos en clase:</p>

    <p><strong>Título de la tabla 1:</strong> ______________________________________________</p>
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
        <thead>
            <tr>
                <th>Alimento</th>
                <th>Glucosa</th>
                <th>Almidón</th>
                <th>Lípidos</th>
                <th>Proteínas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="height: 40px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 40px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 40px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="height: 40px;"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <br>
    <p>Para los tubos controles, a manera de síntesis, completa la información en la tabla 2:</p>
    <div>
        <img src="Photos\Biology Diagrams\Prac 3\12.jpg" alt="Muestra en tubo" class="center">
    </div>

    <h3 id="CUESTIONARIO">VI.	CUESTIONARIO</h3>
    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

    

    <h3 id="REFERENCIAS BIBLIOGRÁFICAS">VI.	REFERENCIAS BIBLIOGRÁFICAS</h3>
    <ul style="font-family: Arial, sans-serif; font-size: 16px; line-height: 1.8;">
        <li>
            Witson. M. 2018. The Molecules of Life. USA. BIOLABREVIEW.
            <br>
            <a href="https://www.nku.edu/Nwhitsonma/Bi0120LSite/Bi0120LReviews/Bi0120LRevMolec.html" target="_blank" style="color: blue; text-decoration: underline;">
                https://www.nku.edu/Nwhitsonma/Bi0120LSite/Bi0120LReviews/Bi0120LRevMolec.html
            </a>
        </li>
        <li>
            UNITIPS. 2017. ¿Qué Son Las Biomoléculas?
            <br>
            <a href="https://blog.unitips.mx/queson-las-biomoleculas" target="_blank" style="color: blue; text-decoration: underline;">
                https://blog.unitips.mx/queson-las-biomoleculas
            </a>
        </li>
    </ul>

    <h2 style="font-family: Arial, sans-serif; font-size: 18px; margin-top: 20px;">RÚBRICA DE CALIFICACIÓN: BIOMOLÉCULAS</h2>
    <table border="1" style="width: 100%; border-collapse: collapse; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
        <thead>
            <tr>
                <th rowspan="2" style="padding: 10px;">ASPECTOS A EVALUAR</th>
                <th colspan="3" style="padding: 10px;">LOGRO</th>
            </tr>
            <tr>
                <th style="padding: 10px;">LOGRADO</th>
                <th style="padding: 10px;">EN PROCESO</th>
                <th style="padding: 10px;">NO LOGRADO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px;">Título de la tabla 1</td>
                <td style="padding: 10px;">Reconoce la importancia y las propiedades del agua para la vida.</td>
                <td style="padding: 10px;">Reconoce parcialmente las propiedades del agua y su importancia.</td>
                <td style="padding: 10px;">No nombra las propiedades ni la importancia del agua para la vida.</td>
            </tr>
            <tr>
                <td style="padding: 10px;">Tabla 1 de resultados</td>
                <td style="padding: 10px;">
                    Identifica las biomoléculas completando la tabla de resultados usando símbolos como (+) para la reacción positiva y (-) para la reacción negativa.
                </td>
                <td style="padding: 10px;">
                    Identifica parcialmente las biomoléculas completando la tabla de resultados usando símbolos ambiguos que no son (+) reacción positiva o (-) para la reacción negativa.
                </td>
                <td style="padding: 10px;">
                    No identifica las biomoléculas y completa la tabla de resultados sin usar símbolos y con errores.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Tabla 2 de reacciones</td>
                <td style="padding: 10px;">
                    Reconoce las reacciones completando la tabla de resultados sin errores.
                </td>
                <td style="padding: 10px;">
                    Reconoce parcialmente las reacciones completando la tabla de actividad de clase con hasta 8 errores.
                </td>
                <td style="padding: 10px;">
                    No reconoce las reacciones completando la tabla en la actividad de clase incorrectamente con 8 hasta 16 errores.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Calidad de la información</td>
                <td style="padding: 10px;">
                    Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica.
                </td>
                <td style="padding: 10px;">
                    Explica parcialmente la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica.
                </td>
                <td style="padding: 10px;">
                    Explica la respuesta a la pregunta planteada sin relacionar su respuesta con el desarrollo de la práctica.
                </td>
            </tr>
            <tr>
                <td style="padding: 10px;">Presentación del informe</td>
                <td style="padding: 10px;">Presenta sus resultados sin borrones, manchas.</td>
                <td style="padding: 10px;">Presenta sus resultados con 3 o menos borrones o manchas.</td>
                <td style="padding: 10px;">Presenta sus resultados con 4 o más borrones o manchas.</td>
            </tr>
        </tbody>
    </table>