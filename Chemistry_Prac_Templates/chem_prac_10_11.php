<?php
include '../header.php';
$practical_number = "C10"
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 10 y 11: ESTEQUIOMETRÍA</title>
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
                <li><a href="#OBJECTIVOS">OBJECTIVOS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#CUESTIONARIO">CUESTIONARIO</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            PRÁCTICA N° 10 y 11: ESTEQUIOMETRÍA</h1>
                
                <h2 id="OBJECTIVOS">1. OBJECTIVOS</h2>
                <ul>
                    <li>Determinar la especie química que actúa como reactivo limitante en una reacción química de precipitación.</li>
                    <li>Analizar varias reacciones que involucran la formación de precipitados. Seleccionar una reacción de precipitación.</li>
                    <li>Realizar los cálculos estequiométricos para determinar teóricamente el reactivo limitante.</li>
                    <li>Comparar los resultados experimentales con los valores teóricos.</li>
                </ul>
                
                <h2 id="INTRODUCCIÓN">2. INTRODUCCIÓN</h2>
                <p>La estequiometría es la medición que se basa en las leyes cuantitativas de la combinación química. En los cálculos estequiométricos se utilizan los coeficientes de las ecuaciones químicas balanceadas para relacionarlos con cantidades de productos y reactivos. Con las ecuaciones químicas balanceadas se puede calcular la cantidad de materia o energía que se produce o se necesita en una ecuación química dada.</p>
                <p> Cuando se representa una reacción química mediante una ecuación se debe de determinar qué reactivos se usan, en qué razón reaccionan y qué cantidades de producto pueden resultar de esa reacción. La estequiometría de la reacción puede ser determinada al ver cómo varía una cierta propiedad con las proporciones en que se mezclan los reactivos.</p>
                <p> Los rendimientos de las reacciones no estequiométricas pueden aumentar o disminuir por adición de uno de los reactivos, por eso es necesario determinar experimentalmente las relaciones de los reactivos.</p>
                <p>En un proceso químico en donde se usa un exceso de dos o más reactivos, el rendimiento teórico de éste depende del reactivo que no está en exceso y que limita la reacción, es decir, del reactivo limitante.</p>
                <p>El reactivo limitante es el que establece la mínima relación de materia que debe de existir para que se logre la reacción química. Para determinar el reactivo limitante de una reacción se divide el número de moles existentes entre el número de moles de la ecuación balanceada; el número más pequeño nos da al reactivo limitante. Los demás cálculos de los reactivos se sacan con base al reactivo limitante.</p>
                <p>Para entender de una manera más clara el concepto de reactivo limitante, en esta práctica se llevarán a cabo diferentes reacciones de precipitación en las cuales uno de los reactivos actuará como el factor limitante de la reacción. Una característica importante es que la reacción químicaque se escoja debe ser cuantitativa. Por lo tanto, la selección estará en función de la solubilidad, aspecto físico del precipitado y la masa molecular del producto obtenido. Otros criterios que se deben de tomar en cuenta son el costo y toxicidad de las sustancias.</p>

                <div class="image-container">
                    <img src="Chemistry_Images\practical 10 & 11\10.1.jpg" alt="Equipos" class="Equipos">
                </div>
                <br>

<table border="1">
    <thead>
        <tr>
            <th colspan="2"><b>Materiales</b></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>5 Mechero Bunsen o Meker</td>
            <td>5 Gradilla para tubos de ensayo.</td>
        </tr>
        <tr>
            <td>50 Tubos de ensayos</td>
            <td>5 Beaker de 100 mL</td>
        </tr>
        <tr>
            <td>5 Pinzas</td>
            <td>5 Bagueta</td>
        </tr>
        <tr>
            <td>5 Cápsula de porcelana</td>
            <td>5 Atomizador</td>
        </tr>
        <tr>
            <td>5 Rejilla con asbesto</td>
            <td></td>
        </tr>
    </tbody>
</table>
<br>

<table border="1">
    <thead>
        <tr>
            <th colspan="2">Disoluciones 0.2 M de:</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cromato de potasio (K2CrO4)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Nitrato de plomo II [Pb(NO3)2]</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Hidróxido de sodio (NaOH)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Cloruro de hierro III (FeCl3)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Sulfato de níquel II (NiSO4)</td>
            <td>25 mL</td>
        </tr>
        <tr>
            <td>Yoduro de potasio (KI)</td>
            <td>25 mL</td>
        </tr>
    </tbody>
</table>

    <h2 id="PROCEDIMIENTO">3. PROCEDIMIENTO</h2>
        <li>Nota: Trabajar los experimentos con un punto antes y un punto después del punto de estequimétrico.</li>
        <li>Cada equipo deberá seleccionar alguna reacción de precipitación.</li>
        <p>
             1.	Realizar en forma cualitativa las reacciones propuestas con pequeñas cantidades de reactivos.<br>
             2.	Colocar en distintos vasos de precipitados los volúmenes de la disolución que permanecerá constante.<br>
             3.	Agregar los volúmenes de la disolución del reactivo que variará en forma sucesiva, en los vasos que ya contienen el otro reactivo.<br>
             4.	Agitar la mezcla de cada vaso, durante tres minutos, para permitir que la reacción se lleve a cabo en su totalidad.<br>
             5.	Calentar suavemente la mezcla hasta que desprenda vapores. Dejar enfriar a temperatura ambiente para que el precipitado aumente.<br>
             6.	Numerar los papeles filtro.<br>
             7.	Filtrar los precipitados formados en cada vaso.<br>
             8.	Lavar los precipitados con agua destilada y efectuar el último lavado con etanol para facilitar el secado de los precipitados.<br>
             9.	Colocar cada papel con el precipitado en vidrios de reloj y ponerlos en la estufa a 60 °C durante dos horas.<br>
            10.	Determinar las masas de los precipitados.<br>
        </p>

    <h2 id="RESULTADOS">4. RESULTADOS</h2>
                <p>1] Completar, balancear y dar los nombres de los reactivos de las siguientes ecuaciones químicas:</p>
                <ul>
                    <li>K2CrO4	+	Pb (NO3)2	→</li>
                    <li>NaOH	+	NiSO4	    →</li>
                    <li>NaOH	+	FeCl3       →</li>
                    <li>KI	+	Pb (NO3)2	    →</li>
                    
                <p>2] Anotar en el cuaderno las masas de los precipitados formados y las características físicas de los diferentes precipitados.</p>
                    
                <p>3] Justificar la razón por la cual seleccionó cierta reacción química de precipitación.</p>

                <p>4] Completar el siguiente cuadro:</p>

                <p><strong>REACTIVOS</strong></p>
<li>Etanol</li>
<li>Agua destilada</li>
<br>
<table border="1">
    <thead>
        <tr>
            <th rowspan="2">Exp. No.</th>
            <th colspan="2">Reactivo "A"</th>
            <th colspan="2">Reactivo "B"</th>
            <th colspan="2">Precipitado formado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>(mL)</th>
            <th>(n)</th>
            <th>(mL)</th>
            <th>(n)</th>
            <th>Masa (g)</th>
            <th>Moles (n)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>2</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>3</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>5</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>6</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
        <tr>
            <td>7</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Teór.</td>
            <td>Exp.</td>
        </tr>
    </tbody>
</table>
<br>
<p>5] Realizar la gráfica correspondiente a la relación que hay entre los volúmenes de reactivo agregado y los gramos del producto formado que representen la curva teórica y experimental, indicando el punto estequiométrico.</p>

<div class="image-container">
    <img src="Chemistry_Images\practical 10 & 11\10.2.jpg">
</div>

<p>6] Realizar una gráfica similar correspondiente a la relación que existe entre los moles del reactivo agregado y el producto formado.</p>
<p>7Comparar las curvas teóricas con las experimentales.</p>
    </strong></p>

                <h2 id="CUESTIONARIO">5. CUESTIONARIO</h2>
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                
            </div>
        </section>
    </div>
</body>
</html>
