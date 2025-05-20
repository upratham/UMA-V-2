<?php
include('../header.php');
$practical_number = "B1";
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

    <button class="tab-button active" onclick="openTab('Simulation')">
        <img src="pic.jpg" alt="Book" style="width:50px; height:50px; vertical-align:middle; margin-right:5px;">
        Simulation
    </button>

    <!-- Cuestionario tab: now submits the form directly -->
    <form id="cuestionarioForm" action="/V2/V2/questionnaire.php" method="GET" style="display:inline; margin:0; padding:0;">
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
                <li><a href="#Objetivos">Objetivos</a></li>
                <li><a href="#Introducción">Introducción</a></li>
                <li><a href="#Procedimiento">Procedimiento</a></li>
                <li><a href="#Resultados">Resultados</a></li>
                <li><a href="#Referencia">Referencia</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 04: Reglas de seguridad en el laboratorio</h1>
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
                    <li> e)	¿Qué sucede cuando se coloca el cedazo entre la llama?</li>

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
                <p> a)	Adicionar una cucharada de nitrato de estroncio en un beaker que contenga aproximadamente 50 mL de agua. Agitar la disolución para disolver la sal y, una vez esté completamente disuelta, transferir el contenido a un atomizador. Finalmente, atomizar la muestra sobre la llama del mechero Bunsen. Observa los cambios que se producen en su color. Repetir el mismo proceso con sulfato de cobre, nitrato de bario, cloruro sódico y nitrato de calcio. Anotar en la siguiente tabla los cambios observados en la llama para las diferentes sales estudiadas.</p>

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


<!-- Video Section -->
<div id="Video" class="content">
<h3>Video</h3>
<p>Here you can watch the instructional video related to this practical.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/xNYASNEdgg8" frameborder="0" allowfullscreen></iframe>
</div>

<!-- Simulator Section -->
<div id="Simulation" class="content">
<h3>Simulation</h3>
<p>Here you can try your experiment and learn about practicals.</p>

<!-- Button to open the simulation in a new window -->
<button onclick="openSimulation()" class="simulation-btn">Open Simulation</button>
</div>

<!---Questionaire--->

</div>

<script>
// Function to open the simulation in a new window
function openSimulation() {
    window.open('http://chemitry-experiments-simulation.vercel.app/experiment3', '_blank');
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
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_5.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Chem_Prac_4.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../chemistry/Química.html'">Inicio</button>
                </div>
</footer>

</body>
</html>
