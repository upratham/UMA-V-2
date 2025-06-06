<?php
include '../header.php';
$practical_number = "B6";
?>
<!DOCTYPE html>
<html lang="en">
<script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador UMA</title>
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
        Teoría</button>

        <button class="tab-button active" onclick="openTab('Video')">
        <img src="logo video.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Video</button>

        <button class="tab-button active" onclick="openTab('3D Modelo')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        3D Modelo</button>

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
                <li><a href="COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#ESTRUCTURAS BACTERIANAS">ESTRUCTURAS BACTERIANAS</a></li>
                <li><a href="#LA CÉLULA EUCARIOTA">LA CÉLULA EUCARIOTA</a></li>
                <li><a href="#ORGANELOS CELULARES">ORGANELOS CELULARES</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#PROCEDIMIENTO">Procedimiento</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

         <!-- Main Content Section -->
         <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> PRÁCTICA PRÁCTICA N°6: ESTRUCTURAS CELULARES</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Conocer las coloraciones bacterianas más usadas en microbiología.</li>
                    <li>Identificar las estructuras propias de una célula procariota.</li>
                    <li>Reconocer una célula eucariota diferenciando las estructuras entre una célula animal y vegetal.</li>
                    <li>Prepara muestras húmedas en el uso de colorantes para visualizar estructuras celulares.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <p>2.1	LA CÉLULA PROCARIOTA (BACTERIAS).</p>
                <p>Las bacterias son células procariotas que se caracterizan por tener el material genético de forma dispersa en un área denominada "nucleoide". Son organismos metabólicamente activos, se reproducen rápidamente por fisión binaria, poseen una pared celular compuesta por peptidoglucano. La forma de las bacterias está determinada por la rigidez de su pared celular.</p>
                <p>Las bacterias por ser células muy pequeñas deben ser observadas usando distintas coloraciones. La acción de los colorantes se basa en la afinidad que estas presentan con las estructuras bacterianas, por ejemplo: los colorantes catiónicos como cristal violeta y la safranina son atraídos por los componentes de carga negativa, como los ácidos nucleicos y los polisacáridos. </p>
                <p>Una de las coloraciones más utilizadas para observar bacterias es la coloración Gram. Christian Gram en 1884 desarrolló la tinción que lleva su nombre y que permite clasificar a las bacterias, según la respuesta a esta coloración, en dos grupos: las bacterias Gram positivas, que se tiñen de color azul violeta, y las Gram negativas, que adquieren un color rosa o rojo. Otras coloraciones de importancia son el método de Wirtz-Conkun, conocido también como Shaeffer-Fulton, para teñir esporas; la tinción de Burri para detectar cápsula.</p>

                <h3 id="ESTRUCTURAS BACTERIANAS">2.1.1	ESTRUCTURAS BACTERIANAS</h3>
                <p><strong>A.	COLORACIÓN GRAM: PARED CELULAR</strong></p>
                <p>Los principios de la tinción de Gram están basados en las características y estructura química de las paredes celulares de las bacterias, la cual le confiere propiedades determinantes a cada microorganismo. Esta tinción permite diferenciar las bacterias Gram positivas, que se visualizan de color morado, de las Gram negativas, que se visualizan de color rosa o rojo.<br> <br>

                    Las bacterias Gram positivas, al contener mayor cantidad de peptidoglucano, retienen con más fuerza el cristal violeta-yodo ante la acción deshidratante del alcohol/acetona. Por otro lado, en las bacterias Gram negativas, al contener menor cantidad de peptidoglucano y poseer una membrana externa cubierta de lípidos, el gran contenido de lípidos de la membrana externa es retirado por acción del alcohol/acetona, dejando escapar así el cristal violeta-yodo. Obteniéndose una coloración rosa o rojo por acción del colorante de contraste (Safranina).
                    </p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 6\1.jpg" alt="Fowler position" class="center">
                </div>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 6\2.png" alt="Fowler position" class="center">
                </div>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 6\3.png" alt="Fowler position" class="center">
                </div>

                <pre>Ejemplos de bacterias según coloración Gram:

                    Gram +: Staphylococcus aureus, Staphylococcus epidermidis, Streptococcus viridans, Streptococcus pneumoniae, Bacillus subtilis, Clostridium tetani, Clostridium botulinum, etc.
                    
                    Gram -: Neisseria gonorrheae, Escherichia coli, Pseudomonas aeruginosa, Salmonella typhi, etc.
                    </pre>

                <p><strong>B.	MÉTODO DE WIRTZ-CONKUN: COLORACIÓN DE ESPORAS</strong></p>
                <p>Las esporas o endoesporas son estructuras de resistencia que algunas bacterias Gram positivas presentan. En el ambiente, las esporas permiten la supervivencia de las bacterias en situaciones vitales estresantes como la escasez de nutrientes, calor, desecación, radiación ultravioleta, ácidos y desinfectantes. Debido a esta característica, las endoesporas son considerados agentes patógenos.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 6\4.jpg" alt="Fowler position" class="center" style="width: 300px; height: auto;">
                </div>
                <p>Para la coloración de esporas o endoesporas se utiliza el método de Wirtz-Conkun (o Shaeffer-Fulton) que consiste en utilizar el tinte verde de malaquita en caliente, el cual tiñe a las esporas de color verde, seguido de una etapa de contraste para la coloración del soma bacteriano, el cual se consigue con la safranina. Se debe observar a 1000X. </p><br><br>

                <p><strong>C.	TINCIÓN DE BURRI: OBSERVACIÓN DE LA CÁPSULA</strong></p>
                <p>La cápsula es una capa externa que cubre la pared celular en algunas bacterias, generalmente es de naturaleza polisacárido, aunque pueden ser de origen peptídico. La capsula brinda protección frente a la fagocitosis principal mecanismo de defensa del huésped, le proporciona cierta resistencia frente a los antibióticos y desinfectantes, impide la fijación de los bacteriófagos y le proporciona la capacidad de adherencia.</p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 6\5.png" alt="Fowler position" class="center" style="width: 300px; height: auto;">
                </div>
                <p>La presencia de cápsulas también se puede demostrar por tinción negativa con tinta china. La tinta china no penetra la cápsula, pero delimita un contorno refringente alrededor del cuerpo bacteriano de color rosado rodeado de un halo sin color en un fondo oscuro. </p><br><br>

                <h3 id="LA CÉLULA EUCARIOTA">2.2	LA CÉLULA EUCARIOTA</h3>

                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
                    <!-- Célula Animal -->
                    <div style="width: 45%; text-align: center;">
                        <img src="Photos\Biology Diagrams\Prac 6\6.jpg" alt="Célula animal" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                        <p style="margin-top: 10px; font-weight: bold;">Célula animal</p>
                    </div>
                    <!-- Text Content -->
                    <div style="width: 50%; text-align: justify;">
                        <p>
                            Las células eucariotas se caracterizan por tener un núcleo definido, limitado por una membrana nuclear y varias estructuras membranosas llamadas organelas, que poseen funciones especializadas y están contenidas en el citoplasma.
                        </p>
                        <p>
                            El término citoplasma es el espacio celular que contiene todo el material que está dentro de la membrana plasmática y fuera de la región nuclear, constituido por el citosol o hialoplasma que es una solución fluida el cual contiene: agua, sales minerales y diversas moléculas orgánicas.
                        </p>
                        <p>
                            Las células eucariotas también poseen una red de fibras proteicas con función esquelética (citoesqueleto), importante para mantener la forma celular, la organización y movimientos internos. Tanto las células eucariotas animales y vegetales presentan organelas.
                        </p>
                    </div>
                </div>
            
                <div style="display: flex; justify-content: center; align-items: center;">
                    <!-- Célula Vegetal -->
                    <div style="width: 45%; text-align: center;">
                        <img src="Photos\Biology Diagrams\Prac 6\7.jpg" alt="Célula vegetal" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                        <p style="margin-top: 10px; font-weight: bold;">Célula vegetal</p>
                    </div>
                </div>

            <h3 id="ORGANELOS CELULARES">2.2.1	ORGANELOS CELULARES</h3>
            <p>A diferencia de las células eucariotas animales, la célula eucariota vegetal está provista de una pared celular rígida compuestas por celulosa y varían en las organelas que presentan. Ambas células presentan las siguientes organelas: </p>
            <ol>
                <li>
                    Retículo endoplasmático (R.E.): sistema de sáculos y túbulos membranosos interconectados que pueden presentar apariencia rugosa (R.E.R), debido a ribosomas adheridos, o liso (R.E.L) si carece de ribosomas; sintetizan diferentes proteínas y lípidos. 
                </li>
                <li>
                    Ribosomas: organelas de suma importancia, son responsables de la síntesis de proteínas  
                </li>
                <li>
                    Aparato de Golgi: organela que presenta compartimentos membranosos que modifican las proteínas y los lípidos, sintetizan carbohidratos, clasifican y transportan moléculas. 
                </li>
                <li>
                    Mitocondrias: organela de doble membrana, participa de la respiración celular para la producción de energía (ATP).   
                </li>
                <li>
                    Los lisosomas: organelas exclusivas de las células eucariotas animales que se encargan de la digestión celular.  
                </li>
                <li>
                    Estructura móviles: como los flagelos y cilios los cuales permiten el movimiento de las células. 
                </li>
                <li>
                    Plastidios: algunos plastidios son exclusivamente de la célula vegetal. Los plastidios se dividen de acuerdo con su función:
                </li>
                <ul>
                    <li>
                        Cloroplastos. Función principal es la fotosíntesis.
                    </li>
                    <li>
                        Cromoplastos. Almacenan diferentes pigmentos (licopeno, P-caroteno, xantofila). 
                    </li>
                    <li>
                        Leucoplastos. Almacenan sustancias de reserva, como los amiloplastos que almacenan almidón.
                    </li>
                </ul>
            </ol>

            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 6\8.png" alt="Fowler position" class="center">
            </div>

            <h2 id="MATERIALES Y MÉTODOS">III.	MATERIALES Y MÉTODOS</h2>
            <h3>3.1 Materiales de laboratorio</h3>
    <ul>
        <li>✓ Cultivo bacteriano de 24 horas (<i>Staphylococcus aureus</i>, <i>Klebsiella sp.</i>, y/o <i>Escherichia coli</i>) o láminas fijadas de los mismos.</li>
        <li>✓ Batería Gram: Cristal violeta, Lugol, alcohol-acetona, safranina o fucsina básica.</li>
        <li>✓ Láminas fijadas de espermatozoides o de <i>Giardia Lamblia</i> adulto.</li>
        <li>✓ Solución verde de Janus (0.01% en suero salino isotónico).</li>
        <li>✓ Colorantes: Lugol, verde de malaquita, tinta china, verde Janus.</li>
        <li>✓ Gotero(s).</li>
        <li>✓ Microscopio óptico.</li>
        <li>✓ Aceite de inmersión.</li>
        <li>✓ Asa de siembra.</li>
        <li>✓ Mechero.</li>
        <li>✓ Pinzas de madera.</li>
        <li>✓ Solución desinfectante.</li>
    </ul>

    <h3>3.2 Materiales del alumno</h3>
    <ul>
        <li>✓ Una papa, zanahoria, ají amarillo.</li>
        <li>✓ Hojas de <i>Elodea sp.</i>.</li>
        <li>✓ Hoja guillete nueva.</li>
        <li>✓ Láminas porta objeto y cubre objetos limpias.</li>
        <li>✓ Plumón marcador.</li>
    </ul>

                 <h3 id="PROCEDIMIENTO">3.3	Procedimiento</h3>
                    <p><strong>A.	RECONOCIMIENTO DE ESTRUCTURAS BACTERIANAS</strong></p>
                    <br>
                    <p>
                      <strong>a.	COLORACIÓN GRAM</strong>  
                    </p>
                    <ol>
                        <li>
                            Muestra bacteriana fijada
                        </li>
                        <li>
                            Cubrir con solución de Cristal violeta por 1 minuto
                        </li>
                        <li>
                            Lavar ligeramente con agua corriente. 
                        </li>
                        <li>
                            Cubrir la preparación con Lugol por 1 minuto.
                        </li>
                        <li>
                            Lavar con agua corriente.
                        </li>
                        <li>
                            Diferenciar con alcohol-acetona 
                        </li>
                        <li>
                            Lavar con agua corriente.
                        </li>
                        Contrastar con el colorante Safranina por 1 minuto. 9.	Lavar con agua corriente para evitar formación de precipitados. 10. Retirar el exceso de agua y secar al ambiente
                        <li>
                            0bservar con objetivo de inmersión (100x) y aceite de inmersión.
                             
                        </li>
                    </ol>

                    <p><strong>Actividad 1: Observa la figura y completa la información</strong></p>
                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 6\9.png" alt="Fowler position" class="center">
                    </div>

                    <p><strong>Actividad 2: Observar y dibujar las muestras obtenidas al microscopio después de realizar la coloración Gram</strong></p>
                    
                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 6\10.png" alt="Fowler position" class="center">
                    </div>

                    <p><strong>b.	OTRAS ESTRUCTURAS BACTERIANA</strong></p>
                    <br>
                    <p><strong>Actividad 3: Observar las muestras al microscopio de esporas y cápsula. Dibujar y completa la información.</strong></p>
                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 6\11.png" alt="Fowler position" class="center">
                    </div>
                    <br>
                    <p><strong>B.	RECONOCIMIENTO DE ESTRUCTURAS Y ORGANELAS DE CÉLULAS EUCARIOTAS</strong></p>
                    <h3 style="font-weight: bold;">a. CÉLULAS ANIMALES</h3>

                    <!-- Observación de mitocondrias -->
                    <div style="margin-bottom: 20px;">
                        <p style="text-align: justify;">
                            <strong>Observación de mitocondrias:</strong> Con un hisopo estéril realizar un raspado de la cara interna de la mejilla y hacer un extendido en la parte central de la lámina en forma paralela y en un solo sentido. 
                            Dejar secar durante 5 minutos. Cubrir la muestra con Verde de Janus, dejar actuar por 5 minutos, colocar una laminilla y eliminar el exceso de colorante con papel secante.
                            <br>Esquematizar a 400X
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="width: 45%; text-align: center;">
                                <img src="Photos\Biology Diagrams\Prac 6\12.png" alt="Célula del Epitelio Bucal" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);">
                                <p style="margin-top: 10px; font-weight: bold;">CÉLULA DEL EPITELIO BUCAL</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- Observación de flagelos -->
                    <div>
                        <p style="text-align: justify;">
                            <strong>Observación de flagelos:</strong> Colocar una lámina fijada de espermatozoides en el microscopio (sino se cuenta con la muestra puede usarse las alternativas mencionadas en la lista de materiales).
                            <br>Esquematizar a 1000X
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="width: 45%; text-align: center;">
                                <img src="Photos\Biology Diagrams\Prac 6\13.png" alt="Espermatozoide Humano" style="width: 100%; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0,0,0,0.1);" class="center">
                                <p style="margin-top: 10px; font-weight: bold;">ESPERMATOZOIDE HUMANO</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <p><strong>b.	CÉLULAS VEGETALES</strong></p>
                    <p>Observación de cloroplastos y movimiento de ciclosis: Colocar una hoja de Elodea sp. en una lámina, añadir una gota de agua, cubrir con lámina cubreobjetos y observar al microscopio. Esquematizar a 400X</p>
                    <p>Observación de amiloplastos: Colocar en una lámina un corte muy fino de papa, agregar una gota de agua y media gota de Lugol. Cubrir con lámina cubreobjetos y observar al microscopio. Esquematizar a 400X.</p>
                    <p>Observación de cromoplastos: Hacer cortes transversales finos de tomate, ají, y zanahoria, colocar dichos cortes en una lámina, añadir una gota de agua y cubrir con lámina cubreobjetos. Esquematizar a 400X.</p>

                    <br>
                    <p><strong>Actividad 4: Esquematice y complete la información requerida para las células animales.</strong></p>
                    <table border="1" cellspacing="0" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th>ÍTEMS</th>
                                <th>MUESTRA # 1</th>
                                <th>MUESTRA # 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Realizar un dibujo científico de la observación al microscopio</td>
                                <td>
                                    <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                                </td>
                                <td>
                                    <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Aumento total de la observación</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Reactivo utilizado</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Nombre de la organela/estructura observada y función</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <p><Strong>Actividad 4: Observa las muestras de vegetales y completa.</Strong></p>

                    <table border="1" cellspacing="0" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
                        <thead>
                            <tr>
                                <th>ÍTEMS</th>
                                <th>MUESTRA # 1<br><i>S. tuberosum</i></th>
                                <th>MUESTRA # 2<br><i>Elodea sp.</i></th>
                                <th>MUESTRA # 3<br><i>Capsicum sp.</i></th>
                                <th>MUESTRA # 4<br><i>D. carota</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Realizar un dibujo científico de la observación al microscopio.</td>
                                <td>
                                    <div style="width: 100px; height: 100px; border: 2px solid black; border-radius: 50%; margin: auto;"></div>
                                </td>
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
                                <td>Nombre de la estructura/organela observada.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Función de la organela observada y sustancia que almacena.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Reactivo usado</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Aumento total de la observación.</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h2 id="RESULTADOS">IV.	RESULTADOS</h2>
                <p>Completar las actividades indicadas.</p>

                <h2 id="REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
                <ol>
                    <li>
                        Audesirk T., Audesirk G & Byers B. (2008) Biología: La vida en la tierra. 8va. Edición México: Pearson. Prentice-Hall Hispanoamericana. 
                    </li>
                    <li>
                        Solomon E, Berg L & Martin D (2013). Biología. 9na. Edición. México: Cengage Learning Editores S.A. 
                    </li>
                    <li>
                        López L.E, Hernandez M., Colin C., Ortega S., Cerón G. & Cendejas R. (2013). Las tinciones básicas en el laboratorio de microbiología. Investigación en discapacidad 3(1) 10-18. Recuperado de en http://www.medigraphic.com/rid 
                    </li>
                </ol>

                <table border="1" cellspacing="0" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
                    <thead>
                        <tr>
                            <th rowspan="2">Resultados</th>
                            <th colspan="3">Actividad 1: procedimiento de coloración Gram</th>
                            <th rowspan="2">Puntos</th>
                        </tr>
                        <tr>
                            <th>Reconoce el uso de colorantes completando las líneas con la información solicitada</th>
                            <th>Reconoce parcialmente el uso de colorantes y completa la información solicitada de forma incompleta y/o de forma incorrecta</th>
                            <th>No reconoce el uso de colorantes completando las líneas con la información incorrecta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">Gráfica Gram positivas y Gram negativas</td>
                            <td>Identifica los resultados de la coloración Gram a través de dibujos, los colorea, mantiene la proporción entre el dibujo y el aumento y coloca toda la información solicitada de forma correcta.</td>
                            <td>Identifica parcialmente los resultados de la coloración de Gram a través de dibujos, no colorea o no mantiene proporción entre el dibujo y el aumento utilizado y coloca la información incompleta y/o con errores.</td>
                            <td>No identifica los resultados de la coloración de Gram, no realiza los dibujos o utiliza lapicero y no completa la información solicitada.</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Identifica cápsulas y esporas realizando todos los dibujos, los colorea, mantiene la proporción entre el dibujo y el aumento, coloca la información completa correcta.</td>
                            <td>Identifica parcialmente cápsulas y esporas, realizando los dibujos con lápiz, no colorea, no mantiene la proporción entre el dibujo y el aumento, coloca la información solicitada de forma incompleta y/o con errores.</td>
                            <td>No identifica cápsulas y esporas, realiza los dibujos con lapicero o realiza dibujos con errores. No completa la información solicitada.</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td rowspan="2">Discusión de resultados Calidad de la información</td>
                            <td>Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica.</td>
                            <td>Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica.</td>
                            <td>Explica la respuesta a la pregunta planteada sin relacionar su respuesta con el desarrollo de la práctica.</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Presenta sus resultados sin borrones, ni manchas.</td>
                            <td>Presenta sus resultados con 3 o menos borrones o manchas.</td>
                            <td>Presenta sus resultados de 4 o más borrones o manchas.</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>

                <h3 style="text-align: center;">RÚBRICA DE CALIFICACIÓN: LAS ESTRUCTURAS Y ORGANELAS DE CÉLULAS EUCARIOTAS</h3>
    <table border="1" cellspacing="0" cellpadding="10" style="border-collapse: collapse; width: 100%; text-align: center;">
        <thead>
            <tr>
                <th rowspan="2">ASPECTOS A EVALUAR</th>
                <th colspan="3">LOGRADO</th>
                <th rowspan="2">PUNTOS</th>
            </tr>
            <tr>
                <th>Identifica las organelas y/o estructura en células animales dibujando la muestra observada y colocando la información solicitada sin errores.</th>
                <th>Identifica parcialmente las organelas y/o estructura en células animales dibujando la muestra observada y colocando la información solicitada hasta con 4 errores.</th>
                <th>Identifica parcialmente las organelas y/o estructura en células animales dibujando la muestra observada y colocando la información solicitada con más de 4 errores.</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Observación de estructuras de la célula animal</td>
                <td>2.5</td>
                <td>1.5</td>
                <td>0.5</td>
            </tr>
            <tr>
                <td>Observación de estructuras de la célula vegetal</td>
                <td>Identifica las organelas de células vegetales dibujando la muestra observada y colocando la información solicitada sin errores.</td>
                <td>Identifica parcialmente las organelas de células vegetales dibujando la muestra observada y colocando la información solicitada hasta con 6 errores.</td>
                <td>Identifica parcialmente las organelas de células vegetales dibujando la muestra observada y colocando la información solicitada con más de 6 errores.</td>
                <td>4</td>
            </tr>
            <tr>
                <td rowspan="2">Discusión de resultados Calidad de la información</td>
                <td>Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica.</td>
                <td>Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica.</td>
                <td>Explica la respuesta a la pregunta planteada sin relacionar su respuesta con el desarrollo de la práctica.</td>
                <td>2.5</td>
            </tr>
            <tr>
                <td>Presentación del informe</td>
                <td>Presenta sus resultados sin borrones, ni manchas.</td>
                <td>Presenta sus resultados con 3 o menos borrones o manchas.</td>
                <td>Presenta sus resultados de 4 o más borrones o manchas.</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
    </div>

<!-- Video Section -->
<div id="Video" class="content">
  <h3 class="video-title">Video</h3>
  <p class="video-description">Aquí podrás ver el video instructivo relacionado con esta práctica.</p>
  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Parc6.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>
</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>

    <h3>1. Animal Cell</h3>
    <model-viewer src="animalcellCOLOR.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Plant Cell</h3>
    <model-viewer src="plantcell.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>
</div>

<!---Questionaire--->

<ol>

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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_7.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_5.php'">Práctica anterior</button>
                    <a href="https://v2-38ue.onrender.com/biology/Biologia.html" class="styled-button">Página principal</a>
                </div>
</footer>

</body>
</html>
