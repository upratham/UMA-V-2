<?php
include '../header.php';
$practical_number = "B5";
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
                <li><a href="COMPETENCIAS">COMPETENCIAS</a></li>
                <li><a href="#INTRODUCCIÓN">INTRODUCCIÓN</a></li>
                <li><a href="#Célula procariota">Célula procariota</a></li>
                <li><a href="#Célula Eucariota">Célula Eucariota</a></li>
                <li><a href="#IMPORTANCIA DE LA CÉLULA Y CARACTERÍSTICAS">IMPORTANCIA DE LA CÉLULA Y CARACTERÍSTICAS</a></li>
                <li><a href="#MATERIALES Y MÉTODOS">MATERIALES Y MÉTODOS</a></li>
                <li><a href="#PROCEDIMIENTO">PROCEDIMIENTO</a></li>
                <li><a href="#RESULTADOS">RESULTADOS</a></li>
                <li><a href="#REFERENCIAS BIBLIOGRÁFICAS">REFERENCIAS BIBLIOGRÁFICAS</a></li>
            </ul>
        </nav>

        <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1> PRÁCTICA PRÁCTICA N°5: LA CÉLULA PROCARIOTA</h1>
                <h2 id="COMPETENCIAS">I.COMPETENCIAS</h2>
                <ul>
                    <li>Identificar a las células procariotas.</li>
                    <li>Reconocer a la célula eucariota.</li>
                    <li>Mencionar las diferencias entre una célula procariota y una célula eucariota.</li>
                </ul>

                <h2 id="INTRODUCCIÓN">II. INTRODUCCIÓN</h2>
                <p>Las células son las unidades básicas de todos los seres vivos, por tal razón, se le conoce como la unidad funcional y estructural. Al observarlas al microscopio, las células poseen diversas formas y tamaños y se presentan como corpúsculos hialinos o granulosos.</p>
                <p>Estas unidades estructurales están limitadas periféricamente por la membrana plasmática y algunas poseen una capa extra llamada pared celular. En el interior de algunas, se pueden observar estructuras de formas y tamaños variados denominadas organelas y entre ellas una en particular llamada núcleo. Y de acuerdo a la presencia de ésta última, las células se dividen en dos tipos: Células procariotas y Células eucariotas.</p>
                <br>
                <h3 id="Célula procariota">2.1	Célula procariota</h3>
                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 5\1.png" alt="Sunflower" style="float: left; margin-right: 15px; width: 300px; height: auto;">
                </div>
                <p>Las células procariotas presentan un ADN disperso porque carecen de un núcleo definido ya que no cuenta con membrana nuclear, usualmente miden entre 1μm a 7μm. La mayoría de las células procariotas están rodeadas completamente por una pared celular que está compuesta por peptidoglucano. Poseen diversas formas, siendo las más comunes las de cocos (redondo), bacilos (alargado), vibriones (coma) y espiraladas (espiral).</p>

                <h3 id="Célula Eucariota">2.2	Célula Eucariota</h3>
                <p>Las células eucariotas difieren de las células procariotas en cuanto a su estructura y complejidad, poseen un ADN dentro de un núcleo definido (rodeado por una membrana nuclear). También se caracterizan por presentar un tamaño promedio entre 10m a 100m y tener al interior de ellas una serie de organelas membranosas dedicadas a cumplir diferentes funciones. <br>

                    Estas células se clasifican en célula eucariota vegetal, animal, fúngica y protista. Aunque las formas más estudiadas son las dos primeras. Una de las principales diferencias entre las células eucariotas vegetales y animales es que la primera posee pared celular compuesta por celulosa.
                    </p>
                
                <h3 id="IMPORTANCIA DE LA CÉLULA Y CARACTERÍSTICAS">2.3	IMPORTANCIA DE LA CÉLULA Y CARACTERÍSTICAS</h3>
                <table style="width: 100%; border-collapse: collapse; text-align: center; font-family: Arial, sans-serif; font-size: 14px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">DOMINIO</th>
                            <th colspan="1" style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">PROCARIA</th>
                            <th colspan="5" style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">EUCARIOTA</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">REINO</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">MONERA</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">PROTISTA</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">FUNGI</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">PLANTAE</th>
                            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">ANIMALIA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Núm. Célula</td>
                            <td style="border: 1px solid black; padding: 10px;">Unicelular</td>
                            <td style="border: 1px solid black; padding: 10px;">Unicelular/ pluricelular</td>
                            <td style="border: 1px solid black; padding: 10px;">Unicelular/ Pluricelular</td>
                            <td style="border: 1px solid black; padding: 10px;">Pluricelular</td>
                            <td style="border: 1px solid black; padding: 10px;">Pluricelular</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Pared celular</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">No/Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">No</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Componente de la pared celular</td>
                            <td style="border: 1px solid black; padding: 10px;">Peptidoglucano</td>
                            <td style="border: 1px solid black; padding: 10px;">No/Variado Glucoproteínas Agarosa</td>
                            <td style="border: 1px solid black; padding: 10px;">Quitina</td>
                            <td style="border: 1px solid black; padding: 10px;">Celulosa</td>
                            <td style="border: 1px solid black; padding: 10px;">-</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Membrana celular</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Citoplasma</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black; padding: 10px;">Membrana nuclear</td>
                            <td style="border: 1px solid black; padding: 10px;">No</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                            <td style="border: 1px solid black; padding: 10px;">Sí</td>
                        </tr>
                    </tbody>
                </table>

                <div class="image-container">
                    <img src="Photos\Biology Diagrams\Prac 5\2.png" alt="Fowler position" class="center">
            </div>
            <div class="image-container">
                <img src="Photos\Biology Diagrams\Prac 5\3.png" alt="Fowler position" class="center">
        </div>
        <div class="image-container">
            <img src="Photos\Biology Diagrams\Prac 5\4.png" alt="Fowler position" class="center">
    </div>
    <div class="image-container">
        <img src="Photos\Biology Diagrams\Prac 5\5.png" alt="Fowler position" class="center">
</div>

<h2 id="MATERIALES Y MÉTODOS">III.	MATERIALES Y MÉTODOS</h2>
<div style="display: flex; justify-content: space-between;">
    <div style="width: 45%;">
        <ul style="list-style: none; padding: 0;">
            <li><strong>3.1 Materiales del laboratorio</strong></li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Hisopos estériles
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Colorante Azul de metileno
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Láminas fijadas y coloreadas de bacteria
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Lugol
            </li>
        </ul>
    </div>
    <div style="width: 45%;">
        <ul style="list-style: none; padding: 0;">
            <li<strong>3.2	MATERIALES DEL ALUMNO</strong>></li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Un bulbo de cebolla
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Una Gillette nueva 
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Láminas porta objetos y cubre objeto.
            </li>
            <li style="position: relative; padding-left: 20px;">
                <span style="position: absolute; left: 0; color: green;">✔</span>
                Papel secante
            </li>
        </ul>
    </div>
</div>

<h3 id="PROCEDIMIENTO">3.3	PROCEDIMIENTO</h3>
    <ol>
        <li>
            Células Procariotas <br>
            Observar en el microscopio óptico, las láminas de bacterias fijadas y coloreadas usando el objetivo de inmersión. Esquematice lo que observa.<br>
        </li>
        <li>
            Células Eucariotas <br>
            Células Vegetales:
En una lámina porta objeto colocar un fragmento de catafilo (epidermis) de cebolla y sobre ella una gota de Lugol. El fragmento tomado debe colocarse completamente extendido sobre la lámina porta objeto. Luego colocar una lámina cubreobjetos y observar la muestra A 400X. Esquematice lo que observa.

        </li>
        <li>
            Células Animales <br>
            En un frotis de epitelio bucal se puede observar núcleo y citoplasma. Con un hisopo estéril realizar un raspado de la cara interna de la mejilla y hacer un extendido en la parte central de la lámina portaobjeto en forma paralela y en un solo sentido. Cubrir la muestra con azul de metileno por tres minutos, eliminar el exceso de colorante y colocar una lámina cubreobjetos. Esquematizar sus observaciones a 400X.<br>
        </li>
    </ol>

 <h2 id="RESULTADOS">IV. RESULTADOS</h2>
 <div style="margin-bottom: 30px;">
    <p><strong>A.</strong> Observar las células procariotas al microscopio, dibujar y completar la información.</p>
    <div style="display: flex; justify-content: space-evenly; align-items: center;">
        <div style="text-align: center;">
            <div style="width: 100px; height: 100px; border: 1px solid black; border-radius: 50%; margin: auto;"></div>
            <p>Forma:</p>
            <p>Aumento:</p>
        </div>
        <div style="text-align: center;">
            <div style="width: 100px; height: 100px; border: 1px solid black; border-radius: 50%; margin: auto;"></div>
            <p>Forma:</p>
            <p>Aumento:</p>
        </div>
    </div>
</div>

<!-- Activity B -->
<div style="margin-bottom: 30px;">
    <p><strong>B.</strong> Observa en el microscopio las células eucariotas animales (epitelio bucal) y vegetales (epidermis cebolla). En las líneas centrales, indique y señale 3 estructuras observables comunes entre ambas células y una diferencia observable entre ellas.</p>
    <div style="display: flex; justify-content: space-evenly; align-items: center;">
        <div style="text-align: center;">
            <div style="width: 100px; height: 100px; border: 1px solid black; border-radius: 50%; margin: auto;"></div>
            <p>Célula eucariota animal</p>
            <p>400X</p>
        </div>
        <div style="text-align: center;">
            <p>__________________</p>
            <p>__________________</p>
            <p>__________________</p>
            <p>__________________</p>
        </div>
        <div style="text-align: center;">
            <div style="width: 100px; height: 100px; border: 1px solid black; border-radius: 50%; margin: auto;"></div>
            <p>Célula eucariota vegetal</p>
            <p>400X</p>
        </div>
    </div>
</div>

<!-- Activity C -->
<div style="margin-bottom: 30px;">
    <p><strong>C. Actividad</strong></p>
    <p>La figura representa una muestra de Epitelio bucal (A) que está contaminada con bacterias (B). Encuentre 2 diferencias observables entre ambas células.</p>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <img src="Photos\Biology Diagrams\Prac 5\6.jpg" alt="Epitelio Bucal" style="width: 150px; height: auto;">
        <div style="text-align: left;">
            <p>1. _________________________________</p>
            <p>_________________________________</p>
            <p>2. _________________________________</p>
            <p>_________________________________</p>
        </div>
    </div>
</div>




<div style="margin-top: 20px;">
    <h2 id="REFERENCIAS BIBLIOGRÁFICAS">VI.	REFERENCIAS BIBLIOGRÁFICAS</h2>
    <p>
        Audesirk T., Audesirk G & Byers B. (2008) Biología: La vida en la tierra. 8va. Edición México: 
        Pearson. Prentice-Hall Hispanoamericana
    </p>
    <p>
        Solomon E, Berg L & Martin D (2013). Biología. 9na. Edición. México: Cengage Learning 
        Editores S.A.
    </p>
</div>

<table style="width: 100%; border-collapse: collapse; text-align: center; font-size: 14px;">
    <caption style="font-weight: bold; font-size: 16px; margin-bottom: 10px;">RÚBRICA DE CALIFICACIÓN: CÉLULA PROCARIOTA Y EUCARIOTA</caption>
    <thead>
        <tr>
            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">ASPECTOS A EVALUAR</th>
            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">LOGRADO</th>
            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">EN PROCESO</th>
            <th style="border: 1px solid black; padding: 10px; background-color: #f0f0f0;">NO LOGRADO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="border: 1px solid black; padding: 10px;">Esquema de procariota</td>
            <td style="border: 1px solid black; padding: 10px;">Identifica la célula procariota realizando los dibujos, los colorea y completa toda la información solicitada de forma correcta.<br><br>4</td>
            <td style="border: 1px solid black; padding: 10px;">Identifica parcialmente la célula procariota realizando los dibujos con lápiz, no colorea y completa una parte de la información solicitada o completa con errores.<br><br>3</td>
            <td style="border: 1px solid black; padding: 10px;">No identifica la célula procariota, realiza los dibujos o usa lapicero y no completa la información solicitada.<br><br>1</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 10px;">Esquema de eucariota</td>
            <td style="border: 1px solid black; padding: 10px;">Identifica la célula eucariota realizando todos los dibujos, los colorea y señala toda la información solicitada de forma correcta.<br><br>4</td>
            <td style="border: 1px solid black; padding: 10px;">Identifica parcialmente la célula eucariota, realizando los dibujos con lápiz, no colorea y señala la información solicitada, pero lo hace de forma incompleta o con más de 2 errores.<br><br>3</td>
            <td style="border: 1px solid black; padding: 10px;">No identifica la célula eucariota, no realiza los dibujos o los realiza con lapicero y no señala la información solicitada.<br><br>1</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 10px;">Figura de diferencias entre eucariota y procariota</td>
            <td style="border: 1px solid black; padding: 10px;">Reconoce las diferencias entre las células completando las líneas con dos diferencias de forma correcta.<br><br>4</td>
            <td style="border: 1px solid black; padding: 10px;">Reconoce parcialmente las diferencias entre las células completando las líneas con una diferencia y/o completa de forma incorrecta.<br><br>3</td>
            <td style="border: 1px solid black; padding: 10px;">No reconoce las diferencias entre las células y no completa las líneas con las diferencias solicitadas.<br><br>0</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 10px;">Discusión de resultados<br>Calidad de la información</td>
            <td style="border: 1px solid black; padding: 10px;">Explica la respuesta a la pregunta planteada con coherencia relacionándola con el desarrollo de práctica.<br><br>6</td>
            <td style="border: 1px solid black; padding: 10px;">Explica parcialmente y con coherencia la respuesta a la pregunta planteada relacionándola con el desarrollo de la práctica.<br><br>3</td>
            <td style="border: 1px solid black; padding: 10px;">Explica la respuesta a la pregunta planteada sin relacionar su respuesta con el desarrollo de la práctica.<br><br>2</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; padding: 10px;">Presentación del informe</td>
            <td style="border: 1px solid black; padding: 10px;">Presenta sus resultados sin borrones, ni manchas.<br><br>2</td>
            <td style="border: 1px solid black; padding: 10px;">Presenta sus resultados con 3 o menos borrones o manchas.<br><br>1</td>
            <td style="border: 1px solid black; padding: 10px;">Presenta sus resultados de 4 a más borrones o manchas.<br><br>0</td>
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
      <source src="Prac5.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

  <div class="video-container">
    <video width="720" height="405" controls>
      <source src="Prac5_Part2.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
  </div>

  <br>

</div>

<!-- 3D Model Section -->
<div id="3D Modelo" class="content">
    <h3>3D Modelo</h3>
    <p>Aquí explorarás y comprenderás cada diagrama visualizándolo en 3D.</p>

    <h3>1. Célula vegetal</h3>
    <model-viewer src="animalcellCOLOR.glb"
    alt="3D Model"
    camera-controls
    auto-rotate
    ar
    shadow-intensity="1"
    style="background-color: white; width: 100%; height: 600;">
    </model-viewer>

    <h3>2. Célula Plant</h3>
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
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_6.php'">Próxima práctica</button>
                    <button class="styled-button" onclick="window.location.href='Bio_Prac_4.php'">Práctica anterior</button>
                    <button class="styled-button" onclick="window.location.href='../biology/Biologia.html'">Página principal</button>
                </div>
</footer>

</body>
</html>
