<?php
include '../header.php';
$practical_number = "B1"
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°1: BIOSEGURIDAD</title>
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
                <li><a href="#INTRODUCCIÓN">INTRODUCTION</a></li>
                <li><a href="#PRINCIPIOS DE LA BIOSEGURIDAD">PRINCIPIOS DE LA BIOSEGURIDAD </a></li>
                <li><a href="#AGENTES DE RIESGO">AGENTES DE RIESGO</a></li>
                <li><a href="#NIVELES DE BIOSEGURIDAD">NIVELES DE BIOSEGURIDAD</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#DISCUSIONES">DISCUSIONES</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1> PRÁCTICA N°1: BIOSEGURIDAD </h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Establecer los procesos y protocolos para el manejo de las normas de Bioseguridad en las prácticas del laboratorio de Biología.</li>
                    <li>Conocer los diferentes niveles de Bioseguridad</li>
                    <li>Establecer la importancia de los elementos de bioseguridad.</li>
                    <li>Reconoce los agentes de riesgo dentro de un laboratorio.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 1.png" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>La Organización Mundial de la Salud define como bioseguridad al conjunto de normas y medidas que se deben cumplir, para proteger la salud del personal, pacientes y el medio ambiente frente a la exposición de factores riesgos biológicos, químicos y físicos.</p>
                <p>Estas medidas deben ser diseñadas según las condiciones de cada laboratorio, ser regidas por políticas de bioseguridad de la institución y asegurar su cumplimiento mediante la designación de un responsable y de un comité de bioseguridad.</p>
                <p>El objetivo de estas normas y medidas preventivas busca mantener controlado los factores de riesgo procedentes de trabajar con agentes biológicos o químicos que pueden poner en peligro nuestra salud; en otras palabras, intentan minimizar los riesgos de esta actividad diaria de los trabajadores y todas las personas que trabajan en un laboratorio con agentes de riesgo (nocivos para la salud).
                    </p>
                <br>
                </br>
                <br>
                </br>

                <h3 id="PRINCIPIOS DE LA BIOSEGURIDAD">2.1 PRINCIPIOS DE LA BIOSEGURIDAD </h3>
                <p><strong>La bioseguridad tiene tres principios que sustentan y dan origen a las normas generales. Estos son:</strong></p>
                <ul>
                    <li>Universalidad</li>
                    <li>Barreras de protección</li>
                    <li>EMedidas de eliminación</li>
                </ul>

                <h3 id="AGENTES DE RIESGO">2.2 AGENTES DE RIESGO</h3>
                <p>Son los diferentes factores de exposición que pueden causar una enfermedad o daño físico e incluso puede ser transmitida a nuestros familiares y a la comunidad. Estos se clasifican en:</p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 2.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 3.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 4.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <h3 id="NIVELES DE BIOSEGURIDAD">2.3 NIVELES DE BIOSEGURIDAD</h3>
                <p>Se define como nivel de seguridad (Biosafety Level, BSL) a las condiciones bajo las cuales los agentes biológicos pueden comúnmente manipularse de forma segura.
                    </p>
                <p>La OMS clasifica a los microorganismos infecciosos en cuatro grupos, tomando en consideración el riesgo intrínseco que suponen; de este modo, los laboratorios de bioseguridad se clasifican por su nivel riesgo biológico, es decir, en función de la capacidad de infección de los agentes biológicos con los que se trabaja. Desde el 2006, la OMS especifica cuatro niveles de bioseguridad:
                    </p>
                
                <p><strong>Nivel de bioseguridad 1: </strong> Peligro mínimo para el personal del laboratorio. Acceso no restringido. No se requiere equipo de trabajo especial
                    </p>
                <p><strong>Nivel de bioseguridad 2</strong>: Se manipulan agentes de peligro moderado para el personal. El personal que trabaja en el laboratorio tiene un tipo de entrenamiento específico. Acceso restringido.
                    </p>
                <p><strong>Nivel de bioseguridad 3</strong>: Se trabaja con agentes que pueden causar daño importante para la salud. Es el tipo de seguridad en laboratorios clínicos o universitarios. Se necesita vestimenta y equipo de protección.                    
                    </p>
                    <p><strong>Nivel de bioseguridad 4</strong>: Existe alto riesgo de contagio y que los agentes tratados son muy perjudiciales para la vida. Se trabaja con trajes especiales que cubren todo el cuerpo y tienen sobrepresión con respecto al exterior
                    </p>

                <p>Las instalaciones de los laboratorios se clasifican, asimismo, en cuatro categorías y están relacionados con los niveles de bioseguridad y los grupos de riesgo biológico en los que se clasifican los microorganismos infecciosos:</p>
                <ul>
                    <li>Laboratorio Básico - Nivel 1 de Bioseguridad</li>
                    <li>Laboratorio Básico - Nivel 2 de Bioseguridad</li>
                    <li>Laboratorio de Contención - Nivel 3 de Bioseguridad</li>
                    <li>Laboratorio de Contención máxima - Nivel 4 de Bioseguridad</li>
                
                </ul>
                <p>Esta clasificación está basada en un conjunto de aspectos tales como: las características de diseño y construcción del laboratorio, elementos de contención, equipos y procedimientos de trabajo que se requieren para el trabajo con agentes biológicos de los diferentes grupos de riesgo. En la normativa española el término «nivel de bioseguridad» se corresponde con el de «nivel de contención» y, en ella, se incluyen las medidas específicas de contención para los niveles 2, 3 y 4.
                    </p>

                <p><br></br></p>

                <table>
                    <caption>GRUPOS DE RIESGOS DE LOS AGENTES BIOLÓGICOS</caption>
                    <tr>
                        <th>Grupo de Riesgo</th>
                        <th>Riesgo Infeccioso</th>
                        <th>Riesgo de propagación a la colectividad</th>
                        <th>Profilaxis o tratamiento eficaz</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Poco probable que cause enfermedad</td>
                        <td>No</td>
                        <td>Innecesario</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Puede causar una enfermedad y constituir un peligro para los trabajadores.
                            </td>
                         <td>Poco probable</td>
                         <td>Posible generalmente</td>   
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Puede provocar una enfermedad grave y constituir un serio peligro para los trabajadores.
                            </td>
                        <td>Probable</td>
                        <td>Possible generalmente</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Provocan enfermedad grave y constituyen un serio peligro para los trabajadores.
                            </td>
                        <td>Elevado</td>
                        <td>No conocido en la actualidad</td>
                    </tr>
                </table>

                <p><br></br></p>

                <table>
                    <tr>
                        <th>NIVEL DE BIOSEGURIDAD</th>
                        <th>TIPO DE RIESGO</th>
                        <th>PRECAUCIONES EN EL TRABAJO</th>
                        <th>AGENTES MICROBIOLÓGICOS</th>
                    </tr>
                    <tr>
                        <td>Nivel 1</td>
                        <td>Nulo</td>
                        <td>Uso del guardapolvo o mandil, de guantes para la manipulación de material contaminado.</td>
                        <td>No causan enfermedades: Bacillus subtilis, Agaricus terrestres, etc.</td>
                    </tr>
                    <tr>
                        <td>Nivel 2</td>
                        <td>Bajo
                            </td>
                         <td>Considerar las precauciones tomadas en el nivel anterior. Además de restringir el acceso debido al riesgo biológico. Se debe colocar los requerimientos para el ingreso y se debe usar cámara extractora y cabinas de flujo laminar.
                            </td>
                         <td>PPatógenos que pueden causar enfermedades a humanos o animales. Clostridium botulinum, Escherichia coli, Candida albicans, virus de la fiebre amarilla, Giardia spp, etc.</td>   
                    </tr>
                    <tr>
                        <td>Nivel 3</td>
                        <td>Moderado
                            </td>
                        <td>Considerar las precauciones tomadas en el nivel anterior, además de incluir barreras de contención física como pre cámaras de ingreso, indumentaria	de protección a aerosoles. Supervisión continua de la salud del personal.
                            </td>
                        <td>Patógenos que causan ENFERMEDADES SERIAS en humanos o animales con existencia	de un tratamiento	para combatirlas.
                            Bacillus	anthracis, Mycobacterium tuberculosis; Virus de la rabia, etc.                            
                            </td>
                    </tr>
                    <tr>
                        <td>Nivel 4</td>
                        <td>Alto</td>
                        <td>Los laboratorios de máxima seguridad y contención deben estar alejados de la población humana. Debe nexistir barreras de aire a través de uso de trajes especiales completamente aislados del medio.</td>
                        <td>Asignado a virus que producen enfermedades mortales en humanos o animales sin tratamiento conocido. Ej: Virus Lassa, Virus Junín, Virus del Ébola, etc.
                            </td>
                    </tr>
                </table>

                <p><br><br></p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 5.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\pic 5.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 1\picc 7.png" alt="Fowler position" class="center">
                </div>

                <p><br><br></p>

                <h3 id="MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</h3>
                    <p><strong>ACTIVIDAD EN CLASE </strong></p>
                    <p>1.	Observa el ambiente del laboratorio y detecta los posibles agentes de riesgo que están presentes. Completa la información obtenida en el siguiente cuadro:
                        </p>
                    
                    <table>
                        <tr>
                            <th>
                                TIPO DE RIESGO
                            </th>
                            <th>
                                OBSERVACIONES
                            </th>
                        </tr>
                        <tr>
                            <td>Agente de riesgo físico</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Agente de riesgo químico</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Agente de riesgo biológico</td>
                            <td> </td>
                        </tr>
                    </table>

                <p><br></br></p>

                <p><strong>2. PRECAUCIONES UNIVERSALES</strong></p>
                <p>Las precauciones universales son acciones que se deben cumplir como parte de la rutina de trabajo en el laboratorio. Completa la siguiente tabla con la información sobre las precauciones universales dadas en clase:</p>

                <table>
                    <caption>ACCIONES</caption>
                    <tr>
                       <th>1.</th>
                        <th>2.</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="Photos\Biology Diagrams\Prac 1\pic 8.png"
                       alt="">
                        </td>
                        <td>
                            <img src="Photos\Biology Diagrams\Prac 1\pic 9.png"
                       alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>4.</td>
                    </tr>
                    <tr>
                        <td>
                            <img src="Photos\Biology Diagrams\Prac 1\pic 10.png"
                       alt="">
                        </td>
                        <td>
                            <img src="Photos\Biology Diagrams\Prac 1\pic 11.png"
                       alt="">
                        </td>
                    </tr>
                </table>

                <h2 id="RESULTADOS">III.	RESULTADOS</h2>
                <p>¿Qué nivel de bioseguridad se corresponde con el laboratorio de trabajo?</p>
                <p>Evidencie las normas de bioseguridad presentes en el laboratorio de trabajo
                    </p>
                <h2 id="DISCUSIONES">IV.	DISCUSIONES</h2>
                <p>Discuta con sus compañeros acerca de la importancia y funcionalidad de las normas de bioseguridad del laboratorio donde se encuentra usted trabajando.
                    </p>
                
                <h2 id="CUESTIONARIO">VI.CUESTIONARIO</h2>
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

                <h2 id="REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
                <p>-	Organización Mundial de la Salud. 2006. MANUAL DE BIOSEGURIDAD EN EL LABORATORIO. Tercera edición. ISBN 9243546503, 9789243546506
                    </p>

                    <p><br></br></p>

                    <table>
                        <caption>LISTA DE COTEJO: SEGURIDAD Y BIOSEGURIDAD </caption>
                        <tr>
                            <th>CRITERIOS</th>
                            <th>LOGRADO</th>
                            <th>NO
                                LOGRADO
                                </th>
                            <th>PUNTAJE</th>
                        </tr>
                        <tr>
                            <td>Identifica los posibles agentes de riesgo que están presentes en el laboratorio de biología.
                                </td>
                            <td>1-6</td>
                            <td>0</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>Reconoce las precauciones universales dadas en clase y completa la siguiente tabla con la información correcta
                                </td>
                            <td>1-4
                                </td>
                             <td>0</td>
                             <td> </td>   
                        </tr>
                        <tr>
                            <td>Reconoce los niveles de bioseguridad y los grupos de riesgos asociados
                                </td>
                            <td>1-10
                                </td>
                            <td>0</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>TOTAL</td>
                            <td> 
                                </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </table>