<?php
include '../header.php';
$practical_number = "C4"
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
                <li><a href="#Introducción">Introducción</a></li>
                <li><a href="#Procedimiento">Procedimiento</a></li>
                <li><a href="#Resultados">Resultados</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#Referencia">Referencia</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            PRÁCTICA N° 04: Reglas de seguridad en el laboratorio</h1>
                <a href='Simulation\chem_sim_4.php'       class="styled-button">Simulation</a>
                <h2 id="Objetivos">1. Objetivos</h2>
                <ul>
                    <li>Conozca el uso correcto del mechero Bunsen como fuente de calor en el laboratorio. Comprender el fenómeno de la combustión.</li>
                </ul>
                
                <h2 id="Introducción">2. Introducción</h2>
                <p>El mechero Bunsen es fuente de calor en el laboratorio y su estudio revela interesantes 
                    aspectos del proceso de combustión. La figura 1.1 muestra el mechero Bunsen y sus piezas. 
                    La Figura 1.2 muestra un mechero Meker, que es similar al mechero Bunsen pero tiene un quemador más ancho. 
                    boca con rejilla para que la llama se propague mejor.</p>

                    <div class="image-container">
                        <img src="Chemistry_Images\practical 4\1.jpg" alt="Equipos" class="Equipos">
                    </div>

                    <div class="image-container">
                        <img src="Chemistry_Images\practical 4\2.jpg" alt="Equipos" class="Equipos">
                    </div>


                <p>La válvula reguladora sirve para graduar la entrada del gas combustible (propano o butano). Los orificios laterales regulan, según la apertura que tengan, la entrada de aire; el cual contiene aproximadamente un 20 % de oxígeno que actúa como comburente. Al encender el gas con un fósforo o un encendedor pueden ocurrir, simultáneamente, las
                    siguientes reacciones entre el gas propano (C3H8) y el oxígeno (O2):</p>
                    
                <p> following reactions between propane gas (C3H8) and oxygen (O2):</p>
                <ul>
                    <li>C3H8(g) +5O2(g) → 3CO2(g) + 4H2O(g) (1)</li>
                    <li>C3H8(g) +7O2(g) → 6CO(g) + 8H2O(g) (2)</li>
                    <li>C3H8(g) +2O2(g) → 3C(s) + 4H2O(g) (3)</li>
                </ul>
            
                <p>Cuando los orificios laterales permiten que entre suficiente aire, ocurre preferentemente la reacción (1) y la llama es de color azulado. En el caso de que la entrada de aire esté restringida, no haya suficiente oxígeno y la combustión no sea completa, ocurren las reacciones (2) y (3), con una llama amarilla (figura 1.3), producto del carbono que no sufrió combustión. Cuando este entra en contacto con una superficie fría, se deposita en forma de hollín. Además, se produce monóxido de carbono CO (gas muy venenoso). El quemador en el laboratorio puede tener muchos usos como en la calcinación, como fuente de calor, entre otros. En el caso de la calcinación se debe utilizar además del quemador, un anillo de acero, un triángulo de porcelana y un soporte. En el caso de calentar agua se debe usar, además del quemador, un cedazo de asbesto, un anillo de acero y un soporte o bien un trípode (figura 1.4).</p>

                <div class="image-container">
                    <img src="Chemistry_Images\practical 4\3.jpg">
                </div>

                <div class="image-container">
                    <img src="Chemistry_Images\practical 4\4.jpg">
                </div>

                <table border="1">
                    <thead>
                        <tr>
                            <th>Reactivos</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nitrato de estroncio</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Sulfato de cobre</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Nitrato de bario</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Cloruro sódico</td>
                            <td>5 g</td>
                        </tr>
                        <tr>
                            <td>Nitrato de calcio</td>
                            <td>5 g</td>
                        </tr>
                    </tbody>
                </table>
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
            

                <h2 id="Procedimiento">3. Procedimiento</h2>
                <p><strong> A. Encendido del quemador:</strong></p>
                <ul>
                    <p>
                        Para encender el quemador debe seguir los siguientes pasos:
                        <li>1.	Compruebe que la llave principal del gas ubicada en la mesa de trabajo esté abierta.</li>
                        <li>2.	Asegúrese que las entradas de aire y de gas del mechero estén totalmente cerradas.</li>
                        <li>3.	Abra la llave de paso del gas que está conectada a su mechero.</li>
                        <li>4.	Encienda un fósforo o encendedor y acérquelo al cañón del mechero.</li>
                        <li>5.	Abra lentamente la válvula reguladora de gas del mechero, hasta que encienda la llama color amarillo.</li>
                        <li>6.	Si se desea obtener una llama de color azul, abra la entrada de aire hasta lograrlo.</li>

                    </p>
                    
                    <p><strong>Atención: </strong>En el caso de que se abra mucho la entrada de aire y la entrada de gas esté poco:</p>
                    <p>
                        abierta, el mechero se apagará. Cierre inmediatamente la llave de paso del gas. Asegúrese de cerrar la válvula de gas del mechero y la entrada de aire. Una vez que se esté seguro de que las llaves están cerradas, se inicia con los pasos anteriormente descritos para encender de nuevo el mechero.<br>
                    </p>
                </ul>
                
                <h2 id="Resultados">4. Resultados</h2>
                    
                    <li> a)	¿Por qué es luminosa la llama cuando las entradas de aire están cerradas?</li>
                    <li> b)	¿Qué le sucedió a la cápsula fría de porcelana? Explique por qué. Explique por qué cambia la luminosidad al abrir las entradas de aire.</li>
                    <li> c)	¿En qué forma se quema el palillo de fósforo que se coloca acostado sobre el cañón del mechero? Explique.</li>
                    <li> d)	¿Por qué la llama tiene forma cónica?</li>   
                    <li>e)	¿Qué sucede cuando se coloca el cedazo entre la llama?</li>

                <h2 id="C.	Calentar tubos de ensayo"> C. Calentar tubos de ensayo</h2>
                <ul>
                    <li>Llene con agua la tercera parte de un tubo de ensayo de 100 x 10 mm.</li>
                    <li>Sostenga el tubo por la parte superior con una pinza para tubos de ensayo.</li>
                    <li>Caliente el tubo con la llama azul del mechero. El calentamiento debe ser suave, de abajo hacia arriba por las paredes del tubo, retirando el tubo de la llama y volviéndolo a poner de modo que no se llegue a una ebullición violenta. El fondo del tubo no debe colocarse directo sobre la llama.</li>
                    <li>Asegúrese de que la boca del tubo no esté apuntando hacia usted o a otro compañero.</li>
                    <li>Cuide que la llama no toque la pinza. El metal se calienta rápidamente y puede quemar su mano.</li>
                </ul>

                <h2 id="D. Llamas de colores"> D. Llamas de colores</h2>
                <p>El color de una llama se puede modificar adicionado sales inorgánicas. Las elevadas temperaturas que se generan en el seno de la llama provocan la disociación de las moléculas de sal en sus átomos constituyentes. Los electrones de estos átomos absorben energía y son excitados a un nivel superior. Cuando el electrón vuelve a su estado fundamental, emite la energía emitida en forma de un fotón. La energía de este fotón determina la longitud de onda y, como consecuencia, el color observado.</p>>
                <p>a)	Adicionar una cucharada de nitrato de estroncio en un beaker que contenga aproximadamente 50 mL de agua. Agitar la disolución para disolver la sal y, una vez esté completamente disuelta, transferir el contenido a un atomizador. Finalmente, atomizar la muestra sobre la llama del mechero Bunsen. Observa los cambios que se producen en su color. Repetir el mismo proceso con sulfato de cobre, nitrato de bario, cloruro sódico y nitrato de calcio. Anotar en la siguiente tabla los cambios observados en la llama para las diferentes sales estudiadas.</p>


                <p><strong></strong></p>
                <h2 id="Cuestionario">5. Cuestionario</h2>
                <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                <ol>
                <li>¿Cuál gas se usa en el laboratorio?</li>
                <li>Ni el propano, ni el butano tienen olor, ¿por qué huele el gas de laboratorio?</li>
                <li>¿De qué color está pintada la tubería que conduce el gas en el laboratorio?</li>
                <li>¿Cuál reacción ocurre cuando la llama es luminosa?</li>
                <li>¿Cuál reacción se presenta cuando la combustión es completa?</li>
                <li>Defina los conceptos: a) combustión, b) combustible y c) comburente.</li>
                <li>¿En qué consiste una llama oxidante y una llama reductora?</li>
                <li>¿Cuáles son los componentes de los fuegos artificiales? ¿Cuál es la función de cada uno de ellos?</li>
                <li>¿Qué sustancias se utilizan para dar color a los fuegos artificiales? Explicar el mecanismo físico-químico responsable del color.</li>
                    
                </ol>
    
                <h2 id="Referencia">Referencia</h2>
                <p>Source: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es">Kenhub - Terminología anatómica</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
