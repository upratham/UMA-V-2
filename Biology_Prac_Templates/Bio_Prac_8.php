<?php
include '../header.php';
$practical_number = "B8"
?>
<!DOCTYPE html>
<html lang="en">
<head>
     

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biology PRÁCTICA N°8: LA LEY DE CHARGAFF.</title>
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
        <img src="logo_UMA.png" alt="UMA Logo" class="practical-logo">
    </header>

    <div class="container">
        <!-- Left side (Shortcuts/Headings) -->
        <nav class="sidebar">
            <h3>Contents</h3>
            <ul>
                <li><a href="#COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#EXTRACCIÓN DE ADN">EXTRACCIÓN DE ADN</a></li>
                <li><a href="#MATERIALES Y MÉTODO">MATERIALES Y MÉTODO</a></li>
                <li><a href="#EJERCICIOS DE APLICACIÓN">EJERCICIOS DE APLICACIÓN</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA PRÁCTICA N°8: LA LEY DE CHARGAFF.</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Aplica una técnica sencilla para poder extraer el ADN de un tejido vegetal y por el aspecto que presenta, confirma su estructura fibrilar.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <p><strong>2.1	ÁCIDOS NUCLEICOS</strong></p>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 8\1.png" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>Los ácidos nucleicos son macromoléculas compuestas de unidades llamadas nucleótidos. Estos se clasifican en dos tipos: ácido desoxirribonucleico (ADN) y ácido ribonucleico (ARN) y se diferencian por:</p>
                <br>
                <br>
                <ul>
                    <li>Sus funciones bioquímicas. Mientras uno almacena la información genética (ADN), el otro sirve para transcribir sus instrucciones (ARN).</li>
                    <li>Su composición química. Cada uno contiene un grupo fosfáto, un azúcar pentosa y las bases nitrogenadas. Según el tipo de ácido nucleico presentará una molécula de azúcar pentosa: desoxirribosa para el ADN y ribosa para el ARN; y, un conjunto de bases nitrogenadas: adenina, guanina, citosina, timina (exclusivo en el ADN) y uracilo (exclusivo del ARN). </li>
                    <li>Su estructura: el ARN es lineal y monocatenario mientras que el ADN presenta doble cadena y una estructura. </li>
                </ul>

                <h3 id = "EXTRACCIÓN DE ADN">2.2	EXTRACCIÓN DE ADN </h3>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 8\2.jpg" alt="Fowler position" style="float: left; margin-right: 15px;">
                </div>
                <p>El  ADN al igual que el ARN se encuentran dentro de las biomoléculas conocidas como ácidos nucleicos, ambas cumplen un papel fundamental en los seres vivos y en los virus, como por ejemplo el ADN es la molécula que contiene toda la información genética de los seres vivos, mientras que el ARN es el encargado de extraer la información del ADN y transfórmalo en proteínas, las cuales son la base de los procesos metabólicos de los organismos.</p>
                <p>El ADN según el tipo de célula puede encontrarse inmerso en el citoplasma cuando se refiere a una célula procariota o protegido por una membrana nuclear cuando se trata de una célula eucariota, en ambos casos para poder llegar al material genético hay que pasar por algunas barreras. En una célula procariota habría que atravesar la pared celular y la membrana plasmática. Para la célula eucariota se tendría que atravesar una tercera barrera, que sería la membrana nuclear. Por ese motivo todo proceso de extracción debe iniciar con la liberación del material genético (degradación química), seguido de un proceso de purificación que consiste en separar los residuos celulares del material genético a través de una serie de lavados (soluciones de lavado), el último lavado se realiza con etanol frío para poder obtener el material genético puro.</p>
                <p>En la práctica al trabajar con gran cantidad de muestra (fruta) esta debe pasar primero por un proceso de disgregación del tejido (degradación mecánica), y luego se continua con la degradación química que estará a cargo de una solución que contiene detergente (rompe la pared y membrana), agua y sal (torna insoluble al ADN porque el sodio neutraliza la carga negativa de sus grupos fosfatos).</p>

                <h3>2.3	LEY DE CHARGAFF: PROPORCIONES DE I AS BASES NITROGENADAS DEL ADN</h3>
                <br>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 8\3.jpg" alt="Fowler position" class="center">
                </div>
                <p>Cuando hablamos de la molécula de ADN decimos que está formada por tres componentes: un grupo fosfato,	una desoxirribosa y una base nitrogenada, siendo ésta última la que genera la diferencia cuanto a los nucleótidos que constituyen a dicha molécula.
<br>
                    Existen dos tipos de bases nitrogenadas: las púricas y las pirimidínicas, en el primer grupo encontramos la adenina y la guanina y en el segundo grupo timina, citosina y uracilo. (ver Fig. N°1)
                    </p>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 8\4.png" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 8\5.png" alt="Fowler position" class="center">
                </div>
                <p>En 1950 Erwin Chargaff, de origen checoeslovaco, descubre las Leyes de Complementariedad de Bases de los Ácidos Nucleicos, estas leyes solo se cumplen para aquel material genético que está constituido por ADN de doble hélice.</p>
                <p>Chargaff estableció lo siguiente:</p>
                <ul>
                    <li>La proporción de Adenina es igual a la Timina (A = T), lo cual nos da una relación de A/T = 1. Veamos la figura de la doble hélice:</li>
                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 8\6.png" alt="Fowler position" class="center">
                    </div>
                    <p>A = 4 y T = 4
                    Comprobando la relación 4/4 = 1
                        </p>

                        <br>
                    <li>La proporción de Guanina es igual a la Citosina (G = C), lo cual nos da una relación de G/C = 1. Veamos la figura de la doble hélice:</li>
                    <div class="image-container">
                        <img src="Photos\Biology Diagrams\Prac 8\7.png" alt="Fowler position" class="center">
                    </div>
                    <p>C = 2 y G = 2,
                    Comprobando la relación 2/2 = 1
                        </p>
                        <br>
                    <li>La proporción de bases púricas es igual a las pirimidínicas (A+G = T+C), lo cual nos da la relación (A+G) /(T+C) =1. Comprobando la relación tenemos:</li>
                    <p>T=4 y C = 2, entonces: 4+2/4+2</p>
                </ul>

                <h2 id = "MATERIALES Y MÉTODO">III.	MATERIALES Y MÉTODO</h2>
                <p><strong>3.1	MATERIALES DE LABORATORIO</strong></p>
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div style="width: 45%;">
                <ul>
                    <li>Mortero y pilón</li>
                        <li>Dos beacker de 100ml	</li> 
                        <li>10ml de alcohol al 95% helado</li>
                        <li>2 tubos de ensayo grande</li>
                        <li>Agua destilada
                        </li>
                </ul>
                </div>
                <div style="width: 45%;">
                    <ul>
                        <li>Una probeta de 50ml</li>
                        <li>Marcadores para vidrio</li>
                        <li>Láminas portaobjetos y cubreobjetos</li>
                        <li>Gasa</li>
                        <li>Una varilla de vidrio</li>
                    </ul>
                </div>
            </div>

            <p><strong>3.2	MATERIALES DEL ESTUDIANTE</strong></p>
            <ul>
                <li>Frutas suaves (plátano, fresa o papaya)</li>
                <li>Un cuchillo pequeño</li>
                <li>50 gr. de sal</li>
                <li>100 ml de jabón líquido</li>
            </ul>
            <p><strong>3.3	PROCEDIMIENTO</strong></p>
            <ol>
                <li>En el caso de las frutas suaves (fresa, plátano o papaya) cortarla por la mitad y retirar la cáscara.</li>
                <li>Moler la fruta hasta obtener una mezcla homogénea tipo puré.</li>
                <li>
                    En un beaker limpio, agregar 1 cucharada de solución de lauril sulfato sódico al 5% y un cuarto de cucharada de sal, 
                    agregar 40 ml de agua destilada, mezclar con la varilla de vidrio hasta disolver la sal, evitando producir espuma (solución de extracción).
                </li>
                <li>
                    Agregar el puré de fruta al beaker con la solución de extracción, mezclar por 5 minutos con la ayuda de una bagueta de vidrio 
                    evitando producir espuma.
                </li>
                <li>En un beaker limpio tamizar el preparado con ayuda de una gasa.</li>
                <li>
                    Colocar 5 ml aproximadamente de lo filtrado en un tubo de ensayo, con la ayuda de la probeta agregar lentamente 
                    por la pared del tubo 10 ml de alcohol helado.
                </li>
                <li>Observar en los siguientes minutos la formación de una franja gruesa de color blanco (ADN).</li>
            </ol>

            <h2 id = "RESULTADOS">IV. RESULTADOS</h2>
            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 8\8.png" alt="Fowler position" class="center">
            </div>
            <br>
            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 8\9.png" alt="Fowler position" class="center">
            </div>
            <br>
            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 8\10.png" alt="Fowler position" class="center">
            </div>

            <br>
            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 8\11.png" alt="Fowler position" class="center">
            </div>

            <h2 id = "EJERCICIOS DE APLICACIÓN">VI.	EJERCICIOS DE APLICACIÓN</h2>
            <p>Resolver 04 ejercicios de forma personal, los ejercicios serán designados por el docente (1 punto por cada ejercicio).</p>
    <ol>
        <li>
            La secuenciación del ADN del cromosoma 1 y 3 de una posible nueva especie de ave migratoria que transita en los Pantanos de Villa arrojó que la concentración de Citosina es 24 % para el cromosoma 1 y 15% para el cromosoma 3.
            <ul>
                <li>¿Cuál será la concentración de Adenina para el cromosoma 1?</li>
                <li>¿Cuál será la concentración de Timina para el cromosoma 3?</li>
            </ul>
        </li>
        <li>
            En el material molecular de una bromeliácea del bosque de Pampa Hermosa, un biólogo pudo determinar que el cromosoma 13 está formado por 800 pares de bases, y de las cuales 160 pares tienen Adenina.
            <ul>
                <li>¿Cuál será el número de Guaninas?</li>
                <li>¿Cuál será el porcentaje de Timinas?</li>
            </ul>
        </li>
        <li>
            A partir de una muestra de ADN se determinó que la suma de bases púricas es de 60%.
            <ul>
                <li>¿La muestra estudiada cumple con las leyes de Chargaff? ¿Por qué?</li>
            </ul>
        </li>
        <li>
            Un médico veterinario extrajo sangre de varios ejemplares de venado de cola blanca (<i>Odocoileus virginianus</i>) del noroeste del Perú. Por secuenciación genética del cromosoma 8, se determinó que el porcentaje de Guanina era de 30%. Se sabe que el cromosoma 8 presenta 270 pares de bases nitrogenadas.
            <ul>
                <li>¿Cuál será el porcentaje del resto de las bases?</li>
                <li>¿Cuál será la suma de las bases púricas?</li>
            </ul>
        </li>
        <li>
            Se aisló el plásmido TOL de una bacteria utilizada en procesos de biorremediación y al hacer pruebas moleculares se determinó que tiene un tamaño de 1200 pares bases con una concentración de 12% de Timina.
            <ul>
                <li>¿Cuántos pares de bases A-T hay en este plásmido?</li>
                <li>¿cuál será el porcentaje de Citosinas?</li>
            </ul>
        </li>

    <p>6. El cromosoma viral de un Retrovirus presentó 24 % de Adenina de un total de 780 pares bases en total.</p>
    <ol type="a">
        <li>¿Cuáles será el porcentaje del resto de las bases?</li>
        <li>¿Cuál será la suma de las bases pirimídicas?</li>
    </ol>

    <p>7. Se ha determinado que una muestra de ácido nucleico presente en el virus del Herpes presenta la siguiente proporción de bases nitrogenadas: A=25%.</p>
    <ol type="a">
        <li>¿La muestra estudiada cumple con las leyes de Chargaff?, ¿por qué?</li>
    </ol>

    <p>8. En un gen de Allium cepa (cebolla) se observó que la suma de A + T es de 40 % y dicho porcentaje equivale a 2500 pares de bases. Determine:</p>
    <ol type="a">
        <li>La cantidad de pares de bases C-G.</li>
        <li>¿Cuál será el porcentaje del resto de las bases?</li>
    </ol>

    <p>9. A partir de la siguiente molécula de ADN determina el porcentaje de todas las bases púricas.</p>
    <pre>
        G C T T C A T G C A A C G G C A G T G C
        C G A A G T A C G T T G C C G T C A C G
    </pre>

    <p>10. Se observa una molécula de ADN, procedente de una muestra vegetal. Complete las cadenas y responda:</p>
    <ol type="a">
        <li>¿Cuál será la suma de las bases pirimídicas?</li>
        <li>¿Cuántos nucleótidos contienen Citosina?</li>
    </ol>

    <pre>
        C T C _ G T T _ A G A T _
        G T T C A A G _ A T G _
    </pre>

    <p>Resuelva aquí los 04 ejercicios designados por el docente.</p>
    </ol>
    <h2 id="CUESTIONARIO">CUESTIONARIO</h2>
                <div id="anatomy-buttons">
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>

    <h2 id = "REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</h2>
    <p>Audesirk T., Audesirk G & Byers B. (2008) Biología: La vida en la tierra. 8va. Edición México: Pearson. Prentice-Hall Hispanoamericana.</p>
    <p>Solomon E, Berg L & Martin D (2013). Biología. 9na. Edición. México: Cengage Learning Editores S.A.</p>

    <body>
        <table border="1" style="border-collapse: collapse; width: 100%; text-align: center; font-family: Arial, sans-serif;">
            <caption style="font-weight: bold; margin-bottom: 10px; font-size: 1.2em;">RÚBRICA DE CALIFICACIÓN: EL ADN Y LEYES DE CHARGAFF</caption>
            <thead>
                <tr>
                    <th style="padding: 5px;">ASPECTOS A EVALUAR</th>
                    <th style="padding: 5px;">LOGRADO</th>
                    <th style="padding: 5px;">EN PROCESO</th>
                    <th style="padding: 5px;">NO LOGRADO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 5px;" rowspan="4">Extracción de ADN<br>FASE 1</td>
                    <td style="padding: 5px;">Reconoce la primera fase de la extracción de ADN completando la información solicitada sin errores</td>
                    <td style="padding: 5px;">Reconoce parcialmente la primera fase de la extracción de ADN completando la información solicitada con hasta 2 errores</td>
                    <td style="padding: 5px;">No reconoce la primera fase de la extracción de ADN completando incorrectamente la información solicitada</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">1</td>
                    <td style="padding: 5px;">0</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Reconoce la segunda fase de la extracción de ADN completando la información solicitada sin errores</td>
                    <td style="padding: 5px;">Reconoce la segunda fase de la extracción de ADN completando la información solicitada con hasta 2 errores</td>
                    <td style="padding: 5px;">No reconoce la segunda fase de la extracción de ADN completando la información solicitada con más de 2 errores</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">0</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Extracción de ADN<br>FASE 3</td>
                    <td style="padding: 5px;">Reconoce la tercera fase de la extracción de ADN respondiendo a la pregunta de forma coherente</td>
                    <td style="padding: 5px;">Reconoce parcialmente la tercera fase de la extracción de ADN respondiendo a la pregunta</td>
                    <td style="padding: 5px;">No reconoce la tercera fase de la extracción de ADN y no responde a la pregunta</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">1</td>
                    <td style="padding: 5px;">0.5</td>
                    <td style="padding: 5px;">0</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Extracción de ADN<br>FASE 4</td>
                    <td style="padding: 5px;">Reconoce la cuarta fase de la extracción de ADN completando la información solicitada sin errores</td>
                    <td style="padding: 5px;">Reconoce la cuarta fase de la extracción de ADN completando la información solicitada con hasta 3 errores</td>
                    <td style="padding: 5px;">No reconoce la cuarta fase de la extracción de ADN completando la información solicitada con más de 3 errores</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">1</td>
                    <td style="padding: 5px;">0</td>
                </tr>
                <tr>
                    <td style="padding: 5px;" rowspan="2">Discusión de resultados<br>Calidad de la información</td>
                    <td style="padding: 5px;">Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de la práctica</td>
                    <td style="padding: 5px;">Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica</td>
                    <td style="padding: 5px;">Explica la respuesta a la pregunta planteada sin relacionarla con el desarrollo de la práctica</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">5</td>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">1</td>
                </tr>
                <tr>
                    <td style="padding: 5px;" rowspan="2">Ejercicios de Leyes de Chargaff</td>
                    <td style="padding: 5px;">Desarrolla correctamente los cuatro ejercicios solicitados sobre las leyes de Chargaff, coloca las operaciones y cálculos</td>
                    <td style="padding: 5px;">Desarrolla correctamente dos a tres ejercicios sobre las leyes de Chargaff, coloca las operaciones y cálculos</td>
                    <td style="padding: 5px;">Desarrolla parcialmente hasta dos ejercicios sobre las leyes de Chargaff, no coloca las operaciones y cálculos</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">4</td>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">1</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">Presentación del informe</td>
                    <td style="padding: 5px;">Presenta sus resultados sin borrones, ni manchas</td>
                    <td style="padding: 5px;">Presenta sus resultados con 3 o menos borrones o manchas</td>
                    <td style="padding: 5px;">Presenta sus resultados de 4 a más borrones o manchas</td>
                </tr>
                <tr>
                    <td style="padding: 5px;">2</td>
                    <td style="padding: 5px;">1</td>
                    <td style="padding: 5px;">0</td>
                </tr>
            </tbody>
        </table>
    