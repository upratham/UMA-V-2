<?php
include '../header.php';
$practical_number = "A1"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 5 : ESTRUCTURAS DEL SISTEMA ENDOCRINO Y APARATO REPRODUCTOR</title>
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
            position: fixed;
            top: 1; /* Sticks at the top of the viewport */
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
            margin-left: 300px;
        }

        h1 {
            font-size: 24px;
            text-align: center
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
            text-align: center;
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
            <h3>Encantado</h3>
            <ul>
                <li><a href="#SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#SISTEMA REPRODUCTOR">SISTEMA REPRODUCTOR</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA N° 5:<br>ESTRUCTURAS DEL SISTEMA ENDOCRINO Y APARATO
                REPRODUCTOR</h1><br>
                <h2 id="SISTEMA ENDOCRINO">SISTEMA ENDOCRINO</h2>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del cuerpo Sistema endocrino.</li>
                    <li>Relacionar las regiones del cuerpo Sistema endocrino y patologías 
                        relacionadas.</li>
                </ul>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\1.jpg" alt="1" class="1">
                </div><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\2.jpg" alt="2" class="2">
                </div><br><br>
                
                <p>Hipotálamo. El hipotálamo se encuentra en la base del cerebro, cerca del quiasma óptico, 
                    donde se cruzan y encuentran los nervios ópticos detrás de cada ojo. El hipotálamo secreta 
                    hormonas que estimulan o suprimen la liberación de hormonas en la glándula pituitaria, 
                    además de controlar el equilibrio de agua, el sueño, la temperatura, el apetito y la presión 
                    sanguínea.<br></p>
                <p>Glándula pineal. La glándula pineal se encuentra debajo del cuerpo calloso, en el medio del 
                    cerebro. Produce la hormona melatonina, que ayuda al cuerpo a saber cuándo es momento 
                    de dormir
                    Pituitaria. La glándula pituitaria se encuentra debajo del cerebro. Generalmente su tamaño no 
                    es superior al de un frijol y controla numerosas funciones de las demás glándulas endócrinas.
                    <br></p>
                <p>Tiroides y paratiroides. La glándula tiroides y paratiroides se encuentran en la parte delantera 
                    del cuello, debajo de la laringe. La tiroides desempeña una importante función en el 
                    metabolismo del cuerpo. Las glándulas paratiroides desempeñan una importante función en 
                    la regulación del equilibrio de calcio del cuerpo.
                    <br></p>
                <p>Timo. El timo se encuentra en la parte superior del pecho y produce linfocitos T (glóbulos 
                    blancos que combaten las infecciones y destruyen las células anormales)
                    </p>
                <p>Glándula suprarrenal. Las glándulas suprarrenales se encuentran en la parte superior de cada 
                    riñón. Al igual que muchas glándulas, las glándulas suprarrenales actúan en colaboración con 
                    el hipotálamo y la glándula pituitaria. Las glándulas suprarrenales producen y liberan 
                    hormonas corticosteroides que mantienen la presión sanguínea y regulan el metabolismo.</p><br><br>  
    
                <h4 id="Questionnaire">Cuestionario</h4>
                
                <div>
                    <form action="questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div><br><br><br><br><br>
                <h2>SISTEMA REPRODUCTOR</h2>
                <h4 id="objetivos">1. OBJETIVOS</h4>
                <ul>
                    <li>Conocer las Regiones del cuerpo Sistema endocrino.</li>
                    <li>Relacionar las regiones del cuerpo Sistema endocrino y patologías 
                        relacionadas.</li>
                </ul>
                <p>Conjunto de tejidos, glándulas y órganos que participan en la procreación (tener hijos). 
                    El aparato reproductor de la mujer incluye los ovarios, las trompas de Falopio, el útero, 
                    el cuello uterino y la vagina. El del hombre, incluye la próstata, los testículos y el pene.
                    </p><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\3.jpg" alt="3" class="3">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\4.jpg" alt="4" class="4">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\5.jpg" alt="5" class="5">
                </div><br><br><br>
                <div class="image-container">
                    <img src="Anatomy images\Practical 5\6.jpg" alt="6" class="6">
                </div><br><br><br>
                <h4 id="Cuestionario">Cuestionario</h4>
                
                <div>
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div><br><br>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
