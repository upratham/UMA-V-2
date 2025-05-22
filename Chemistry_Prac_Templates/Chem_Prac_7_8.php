<?php
include '../header.php';
$practical_number = "C7"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <!-- End of Profile Section -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRÁCTICA N° 07 y 08: NOMENCLATURA INORGÁNICA</title>
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
                <li><a href="#Resultados de aprendizaje">Resultados de aprendizaje</a></li>
                <li><a href="#Contenidos">Contenidos</a></li>
                <li><a href="#Nomenclatura Básica">Nomenclatura Básica</a></li>
                <li><a href="#Uso de nomenclatura sistemática">Uso de nomenclatura sistemática</a></li>
                <li><a href="#Resultados">Resultados</a></li>
                <li><a href="#EJERCICIOS">EJERCICIOS</a></li>
                <li><a href="#Cuestionario">Cuestionario</a></li>
                <li><a href="#Referencia">Referencia</a></li>
            </ul>
        </nav>

       <!-- Main Content Section -->
        <section id="practical-content">
            <!-- Theory Section -->
            <div id="Teoría" class="content active">
                <h1>            PRÁCTICA N° 07 y 08: NOMENCLATURA INORGÁNICA</h1>
                <a href='Simulation\chem_sim_7_8.php'       class="styled-button">Simulation</a>
                
                <h2 id="Resultados de aprendizaje">1. Resultados de aprendizaje</h2>
                <h3>Resultados de aprendizaje</h3>
                <p>Aplicar las reglas para nombrar y escribir compuestos químicos inorgánicos, según IUPAC (Unión Internacional de química pura y aplicada).</p>

                <h2 id="Contenidos">2. Contenidos</h2>
                 <ol>
                    <li>Estados de oxidación de elementos más comunes.</li>
                    <li>Formas de nombrar compuestos químicos, según nomenclatura IUPAC.</li>
                    <li>Formas de escribir un compuesto químico, según su clasificación. (Óxidos metálicos, óxidos no metálicos o anhídridos, hidruros, hidrácidos, oxácidos, sales de hidrácidos y oxácidos).</li>
                    <li>Tabla de iones más comunes.</li>
                 </ol>

                 <h2 id="Nomenclatura Básica">3. Nomenclatura Básica</h2>
                 <p>El sistema utilizado para nombrar compuestos se conoce como nomenclatura. Para poder nombrar los compuestos, tenemos que conocer algunos elementos de la Tabla Periódica, y reconocer en qué grupo se encuentran. Además, nos ayudaría saber si son metales de grupos representativos, metales de transición y no metales.</p>

                 <div class="image-container">
                    <img src="Chemistry_Images\practical 7\7.1.jpg" alt="Equipos" class="Equipos">
                </div>

                <p><strong>Principales números de oxidación de los elementos representativos</strong></p>
                <table border="1">
                    <tbody>
                        <tr>
                            <th>Grupo I A</th>
                            <th>Estado de oxidación sólo +1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td>Símbolo</td>
                        </tr>
                        <tr>
                            <td>Litio</td>
                            <td>Li</td>
                        </tr>
                        <tr>
                            <td>Sodio</td>
                            <td>Na</td>
                        </tr>
                        <tr>
                            <td>Potasio</td>
                            <td>K</td>
                        </tr>
                        <tr>
                            <td>Rubidio</td>
                            <td>Rb</td>
                        </tr>
                        <tr>
                            <td>Cesio</td>
                            <td>Cs</td>
                        </tr>
                        <tr>
                            <td>Francio</td>
                            <td>Fr</td>
                        </tr>
                    </tbody>
                </table>
<br>


                <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo II A</th>
                                <th>Estado de oxidación sólo +2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Berilio</td>
                                <td>Be</td>
                            </tr>
                            <tr>
                                <td>Magnesio</td>
                                <td>Mg</td>
                            </tr>
                            <tr>
                                <td>Calcio</td>
                                <td>Ca</td>
                            </tr>
                            <tr>
                                <td>Estroncio</td>
                                <td>Sr</td>
                            </tr>
                            <tr>
                                <td>Bario</td>
                                <td>Ba</td>
                            </tr>
                            <tr>
                                <td>Radio</td>
                                <td>Ra</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                
                    <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo III A</th>
                                <th>Estado de oxidación sólo +3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Boro</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>Aluminio</td>
                                <td>Al</td>
                            </tr>
                            <tr>
                                <td>Galio</td>
                                <td>Ga</td>
                            </tr>
                            <tr>
                                <td>Indio</td>
                                <td>In</td>
                            </tr>
                            <tr>
                                <td>Talio</td>
                                <td>Tl</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                
                    <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo IV A</th>
                                <th>Estado de oxidación +2 y +4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Carbono</td>
                                <td>C</td>
                            </tr>
                            <tr>
                                <td>Silicio</td>
                                <td>Si (además de -4)</td>
                            </tr>
                            <tr>
                                <td>Germanio</td>
                                <td>Ge (además de -4)</td>
                            </tr>
                            <tr>
                                <td>Estaño</td>
                                <td>Sn</td>
                            </tr>
                            <tr>
                                <td>Plomo</td>
                                <td>Pb</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo V A</th>
                                <th>Estado de oxidación +3 y +5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Nitrógeno</td>
                                <td>N</td>
                            </tr>
                            <tr>
                                <td>Fósforo</td>
                                <td>P</td>
                            </tr>
                            <tr>
                                <td>Arsénico</td>
                                <td>As</td>
                            </tr>
                            <tr>
                                <td>Antimonio</td>
                                <td>Sb</td>
                            </tr>
                            <tr>
                                <td>Bismuto</td>
                                <td>Bi</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <p><strong>Los números de oxidación del nitrógeno son +1, +2,	3, +4 y +5. Los números de oxidación del P, As y Sb son	3 y 5.</strong></p>

                    <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo VI A</th>
                                <th>Estado de oxidación -2; +4 y +6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Oxígeno</td>
                                <td>O</td>
                            </tr>
                            <tr>
                                <td>Azufre</td>
                                <td>S</td>
                            </tr>
                            <tr>
                                <td>Selenio</td>
                                <td>Se</td>
                            </tr>
                            <tr>
                                <td>Teluro</td>
                                <td>Te</td>
                            </tr>
                            <tr>
                                <td>Polonio</td>
                                <td>Po</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <p><strong>El oxígeno solo presenta números de oxidación -2 y -1. El azufre presenta, además, número de oxidación +2.</strong></p>

                    <table border="3">
                        <thead>
                            <tr>
                                <th>Grupo VII A</th>
                                <th>Estado de oxidación sólo 1, 3, 5, y 7</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nombre</td>
                                <td>Símbolo</td>
                            </tr>
                            <tr>
                                <td>Flúor</td>
                                <td>F</td>
                            </tr>
                            <tr>
                                <td>Cloro</td>
                                <td>Cl</td>
                            </tr>
                            <tr>
                                <td>Bromo</td>
                                <td>Br</td>
                            </tr>
                            <tr>
                                <td>Yodo</td>
                                <td>I</td>
                            </tr>
                            <tr>
                                <td>Astato</td>
                                <td>At</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <p><strong>El F presenta solo estado de oxidación -1. El bromo presenta número de oxidación 1 y 5, el yodo 1, 5 y 7.</strong></p>

                    <p><strong>Principales números de oxidación de los elementos de transición</strong></p>

                    <table border="3">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Símbolo</th>
                                <th>Estados de oxidación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Plata</td>
                                <td>Ag</td>
                                <td>+1</td>
                            </tr>
                            <tr>
                                <td>Oro</td>
                                <td>Au</td>
                                <td>+1 y +3</td>
                            </tr>
                            <tr>
                                <td>Cobre</td>
                                <td>Cu</td>
                                <td>+1 y +2</td>
                            </tr>
                            <tr>
                                <td>Mercurio</td>
                                <td>Hg</td>
                                <td>+1 y +2</td>
                            </tr>
                            <tr>
                                <td>Hierro</td>
                                <td>Fe</td>
                                <td>+2 y +3</td>
                            </tr>
                            <tr>
                                <td>Cobalto</td>
                                <td>Co</td>
                                <td>+2 y +3</td>
                            </tr>
                            <tr>
                                <td>Níquel</td>
                                <td>Ni</td>
                                <td>+2 y +3</td>
                            </tr>
                            <tr>
                                <td>Zinc</td>
                                <td>Zn</td>
                                <td>+2</td>
                            </tr>
                            <tr>
                                <td>Paladio</td>
                                <td>Pd</td>
                                <td>+2 y +4</td>
                            </tr>
                            <tr>
                                <td>Cromo</td>
                                <td>Cr</td>
                                <td>+2, +3 y +6</td>
                            </tr>
                            <tr>
                                <td>Molibdeno</td>
                                <td>Mo</td>
                                <td>+2, +3, +4, +5 y +6</td>
                            </tr>
                            <tr>
                                <td>Manganeso</td>
                                <td>Mn</td>
                                <td>+2, +3, +4, +6 y +7</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>

                    <h3>Formas de escribir los compuestos:</h3>
    <p>Antes de empezar a estudiar nomenclatura, es importante que tengamos claro cómo vamos a denotar los compuestos:</p>
    <p>Supongamos que:</p>
    <ul>
        <li>Tenemos un ion positivo A con carga <span class="example">+x</span>, que representamos como: <span class="example">A<sup>+x</sup></span></li>
        <li>Tenemos un ion negativo B con carga <span class="example">-y</span>, que representamos como: <span class="example">B<sup>-y</sup></span></li>
    </ul>
    <p>Ambos iones forman un compuesto que denotamos:</p>
    <p><span class="example">A<sub>y</sub>B<sub>x</sub></span> (con las cargas cruzadas)</p>

    <h3>Reglas para nombrar compuestos:</h3>

    <p><strong>Ejemplo 1:</strong> Si tuviéramos los iones <span class="example">A<sup>+2</sup></span> y <span class="important">B<sup>-2</sup></span></p>
    <p>Formaríamos el compuesto <span class="example">A<sub>2</sub>B<sub>2</sub></span>, y como las cargas son iguales, lo escribimos simplificando, como <span class="example">AB</span>.</p>
    <p>La información que podríamos extraer de acá es que un átomo de A está unido con un átomo de B para formar el compuesto <span class="example">AB</span>.</p>

    <p><strong>Ejemplo 2:</strong> Si tuviéramos los iones <span class="example">A<sup>+4</sup></span> y <span class="important">B<sup>-2</sup></span></p>
    <p>Formaríamos el compuesto <span class="example">A<sub>2</sub>B<sub>4</sub></span>, y como las cargas son simplificables, lo escribimos como <span class="example">AB<sub>2</sub></span>.</p>

    <h3>Reglas para nombrar compuestos:</h3>
    <p>Los metales forman los iones positivos y los no metales forman iones negativos.</p>
    
    <p><strong>a)</strong> Los iones positivos (cationes) que se forman a partir de átomos metálicos tienen el mismo nombre que el metal:</p>
    <ul>
        <li><strong>Ejemplos:</strong> <span class="example">Na<sup>+</sup></span> ion sodio, <span class="example">Al<sup>+3</sup></span> ion aluminio.</li>
    </ul>

    <p><strong>b)</strong> Si un metal puede formar cationes con diferente carga, la carga positiva se indica con un número romano entre paréntesis, después del nombre del metal.</p>
    <ul>
        <li><strong>Ejemplos:</strong> <span class="example">Fe<sup>+2</sup></span> ion hierro(II), <span class="example">Fe<sup>+3</sup></span> ion hierro(III).</li>
        <li><span class="example">Cu<sup>+1</sup></span> ion cobre(I), <span class="example">Cu<sup>+2</sup></span> ion cobre(II).</li>
    </ul>

    <h3>Reglas para Formación de Compuestos</h3>

    <p>Los iones positivos siempre se combinarán con iones negativos. Por ejemplo, para la formación de óxidos, se combina un catión metálico con el anión <span class="important">O<sup>-2</sup></span>.</p>
    
    <p><strong>Ejemplo:</strong></p>
    <p><span class="example">Hg<sup>+2</sup> + O<sup>-2</sup> → Hg<sub>2</sub>O</span></p>
    <p><strong>Nota:</strong> Cuando el subíndice es 1, no hay que escribirlo. La fórmula del compuesto queda solamente como: <span class="example">HgO</span></p>

    <ul>
        <li><span class="example">K<sup>+</sup> (potasio) + O<sup>-2</sup> (óxido) → K<sub>2</sub>O</span></li>
        <li><span class="example">Ca<sup>+2</sup> (calcio) + O<sup>-2</sup> (óxido) → CaO</span></li>
        <li><span class="example">Al<sup>+3</sup> (aluminio) + O<sup>-2</sup> (óxido) → Al<sub>2</sub>O<sub>3</sub></span></li>
    </ul>

    <p><strong>c)</strong> Los nombres de los aniones (negativos) monoatómicos, así como algunos aniones poliatómicos sencillos, se forman reemplazando la terminación del nombre del elemento por <strong>-uro</strong>:</p>
    <ul>
        <li><strong>Ejemplo:</strong> <span class="example">Cl<sup>-</sup></span> ion cloruro, <span class="example">CN<sup>-</sup></span> ion cianuro.</li>
    </ul>

    <p><strong>d)</strong> Los aniones monoatómicos formados con oxígeno, así como algunos aniones poliatómicos sencillos, tienen la terminación <strong>-ido</strong>:</p>
    <ul>
        <li><strong>Ejemplo:</strong> <span class="example">O<sup>-2</sup></span> ion óxido, <span class="example">O<sub>2</sub><sup>-2</sup></span> ion peróxido, <span class="example">OH<sup>-</sup></span> ion hidróxido.</li>
    </ul>

    <p><strong>e)</strong> Los aniones que se obtienen añadiendo H<sup>+</sup> se nombran agregando la palabra hidrógeno o dihidrógeno como un prefijo.</p>
    <p><strong>Ejemplo:</strong></p>
    <ul>
        <li><span class="example">CO<sub>3</sub><sup>-2</sup></span> ion carbonato</li>
        <li><span class="example">HCO<sub>3</sub><sup>-</sup></span> ion hidrogenocarbonato</li>
    </ul>

    <h3>Formas de nombrar los compuestos, a partir de sus fórmulas:</h3>
    <p>Existen tres tipos de nombrar los compuestos químicos, la forma dependerá de la nomenclatura que uses, ejemplo:</p>

    <table border="3">
        <thead>
            <tr>
                <th>Nomenclatura</th>
                <th>Fórmula</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">Stock</td>
                <td>Cu<sub>2</sub>O</td>
                <td>Óxido de cobre (I)</td>
            </tr>
            <tr>
                <td>CuO</td>
                <td>Óxido de cobre (II)</td>
            </tr>
            <tr>
                <td rowspan="2">Tradicional</td>
                <td>Cu<sub>2</sub>O</td>
                <td>Óxidocupr***oso*** (la terminación <strong>oso</strong> se debe al estado de oxidación menor, en este caso es +1)</td>
            </tr>
            <tr>
                <td>CuO</td>
                <td>Óxidocupr***ico*** (la terminación <strong>ico</strong> se debe al estado de oxidación mayor, en este caso es +2)</td>
            </tr>
            <tr>
                <td rowspan="2">Sistemática</td>
                <td>Cu<sub>2</sub>O</td>
                <td>Monóxido de dicobre</td>
            </tr>
            <tr>
                <td>CuO</td>
                <td>Monóxido de (mono)cobre*<br><small>*Cuando la palabra "mono" está entre la frase, no es necesario incluirla.</small></td>
            </tr>
        </tbody>
    </table>
    <br>

    <p>Cuando conocemos la fórmula del compuesto debes considerar que los compuestos se nombran a partir de la derecha, por lo que escribimos primero el nombre del anión (-) y después del catión (+) unidos por la conjunción "de", ejemplo:</p>
    
    <p><strong>Ejemplo:</strong> <span class="example">CaCl<sub>2</sub></span> cloruro de calcio</p>
    <p><em>* Escrito en forma de reacciones:</em></p>
    <ul>
        <li><span class="example">Ca<sup>+2</sup> (catión calcio (II)) + Cl<sup>-</sup> (ión cloruro) → CaCl<sub>2</sub></span></li>
        <li><span class="example">Cu (ClO<sub>4</sub>)<sub>2</sub></span> perclorato de cobre (II) ó perclorato cúprico</li>
        <li><span class="example">Cu<sup>+2</sup> (catión cobre (II)) + (ClO<sub>4</sub>)<sup>-</sup> (ión perclorato) → Cu (ClO<sub>4</sub>)<sub>2</sub></span></li>
    </ul>

    <p><em>* En el caso de que el metal tenga solamente un estado de oxidación, se puede nombrar como cloruro cálcico.</em></p>
    <p>Otro punto importante es que en general los compuestos se nombran a partir de la derecha.</p>

    <h3>Formas de escribir las fórmulas del compuesto, a partir de su nombre:</h3>
    <p>Cuando conocemos el nombre del compuesto y deseamos derivar su fórmula, escribimos primero el símbolo del catión (+) y luego el símbolo del anión (-), si se trata de un anión monoatómico (compuesto de un átomo).</p>

    <p><strong>Ejemplo:</strong> <span class="example">K<sup>+</sup> + I<sup>-</sup></span> (ión yoduro) → <span class="example">KI</span> yoduro de potasio</p>

    <p>Recuerda que siempre hay intercambio de los estados de oxidación.</p>
    <p><strong>Ejemplo:</strong> <span class="example">Na<sup>+</sup> + (OH)<sup>-</sup></span> → <span class="example">NaOH</span> hidróxido de sodio</p>

    <p>En caso de que el anión sea poliatómico, es necesario usar paréntesis.</p>
    <p><strong>Ejemplo:</strong> El hierro (Fe) tiene dos estados de oxidación 2 y 3.</p>
    <ul>
        <li><span class="example">Fe<sup>+2</sup> + (NO<sub>3</sub>)<sup>-</sup></span> → <span class="example">Fe (NO<sub>3</sub>)<sub>2</sub></span> Nitrato de hierro (II) ó nitrato ferroso</li>
        <li><span class="example">Fe<sup>+3</sup> + (NO<sub>3</sub>)<sup>-</sup></span> → <span class="example">Fe (NO<sub>3</sub>)<sub>3</sub></span> Nitrato de hierro (III) ó nitrato férrico</li>
    </ul>

    <h3>Hidrácidos y oxácidos:</h3>
    <p>Primero, debemos identificar que los ácidos son aquellos compuestos en donde, en general, el hidrógeno está a la izquierda. Debemos recalcar que el <span class="example">H<sub>2</sub>O<sub>2</sub></span>, el <span class="example">H<sub>2</sub>O</span>, y otros no son ácidos, entonces no es una regla general.</p>

    <p><strong>Ejemplo:</strong> <span class="example">HCl</span> Ácido <span class="highlight">clorhídrico</span>, <span class="example">H<sub>2</sub>S</span> Ácido <span class="highlight">sulfhídrico</span></p>

    <p>Los oxoácidos son aquellos ácidos que se forman de la reacción de un óxido no metálico o anhídrido más agua. Para escribir la fórmula del ácido, debes contar la cantidad de átomos de cada uno de los elementos.</p>
    
    <p>Las fórmulas se escriben siempre en este orden: hidrógeno - no metal - oxígeno.</p>
    <p><strong>Ejemplo:</strong> El cloro tiene estado de oxidación +1, +3, +5 y +7.</p>

    <table border="3">
        <thead>
            <tr>
                <th>Est. Oxidación</th>
                <th>Óxido o Anhídrido</th>
                <th>Ácido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><span class="oxide">Cl<sup>+1</sup> + O<sup>-2</sup> → Cl<sub>2</sub>O</span><br>Óxido o anhídrido <span class="highlight">hipocloroso</span></td>
                <td><span class="acid">+ H<sub>2</sub>O → H<sub>2</sub>Cl<sub>2</sub>O → HClO</span><br>Ácido <span class="highlight">hipocloroso</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td><span class="oxide">Cl<sup>+3</sup> + O<sup>-2</sup> → Cl<sub>2</sub>O<sub>3</sub></span><br>Óxido o anhídrido <span class="highlight">cloroso</span></td>
                <td><span class="acid">+ H<sub>2</sub>O → H<sub>2</sub>Cl<sub>2</sub>O<sub>4</sub> → HClO<sub>2</sub></span><br>Ácido <span class="highlight">cloroso</span></td>
            </tr>
            <tr>
                <td>5</td>
                <td><span class="oxide">Cl<sup>+5</sup> + O<sup>-2</sup> → Cl<sub>2</sub>O<sub>5</sub></span><br>Óxido o anhídrido <span class="highlight">clórico</span></td>
                <td><span class="acid">+ H<sub>2</sub>O → H<sub>2</sub>Cl<sub>2</sub>O<sub>6</sub> → HClO<sub>3</sub></span><br>Ácido <span class="highlight">clórico</span></td>
            </tr>
            <tr>
                <td>7</td>
                <td><span class="oxide">Cl<sup>+7</sup> + O<sup>-2</sup> → Cl<sub>2</sub>O<sub>7</sub></span><br>Óxido o anhídrido <span class="highlight">perclórico</span></td>
                <td><span class="acid">+ H<sub>2</sub>O → H<sub>2</sub>Cl<sub>2</sub>O<sub>8</sub> → HClO<sub>4</sub></span><br>Ácido <span class="highlight">perclórico</span></td>
            </tr>
        </tbody>
    </table>
    <br>

    <p><strong>Si te acomoda más trabajar con la tabla de iones, puedes formar los ácidos como se muestra en la tabla. Completa en base a este razonamiento los nombres faltantes.</strong>

        <table border="3">
            <thead>
                <tr>
                    <th>Iones</th>
                    <th>Fórmula</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>H<sup>+</sup> + Cl<sup>-</sup> <span class="ion">(cloruro)</span></td>
                    <td>HCl</td>
                    <td class="highlight">Ácido clorhídrico</td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + (NO<sub>2</sub>)<sup>-</sup> <span class="ion">(nitrito)</span></td>
                    <td>HNO<sub>2</sub></td>
                    <td class="highlight">Ácido nitroso</td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + (PO<sub>4</sub>)<sup>-3</sup> <span class="ion">(fosfato)</span></td>
                    <td>H<sub>3</sub>PO<sub>4</sub></td>
                    <td class="highlight">Ácido fosfórico</td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + (ClO)<sup>-</sup></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + (ClO<sub>4</sub>)<sup>-</sup></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + Br<sup>-</sup></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>H<sup>+</sup> + (NO<sub>3</sub>)<sup>-</sup></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>

        <h2>Sales de Hidrácidos y Oxoácidos:</h2>
    <p>Son compuestos formados por metal-no metal-oxígeno. Se nombran con la raíz del no metal terminada en <strong>uro</strong>.</p>
    <p><strong>Ejemplo:</strong> Si tienes el ácido clorhídrico HCl y quieres formar el cloruro de plata, debes reemplazar el H (ión positivo) por el metal, en este caso <span class="ion">la plata</span>.</p>

    <p><strong>Ejemplo:</strong> HCl ácido clorhídrico → AgCl cloruro de plata o cloruro argéntico.</p>

    <p>Ahora, si tienes que formar una sal proveniente de un oxoácido, con un no metal que tiene más de un estado de oxidación, la formación será igual, pero cambiará la terminación.</p>
    <p>Por <strong>ejemplo:</strong> escribe la fórmula del nitrito de sodio. Esta sal se deriva del ácido nitroso HNO<sub>2</sub>, por lo <span class="important">tanto</span>, si reemplazamos el hidrógeno por el metal, la sal será NaNO<sub>2</sub>.</p>

    <p>Ahora, para el nitrato de sodio, que se deriva del ácido nítrico, la fórmula de la sal sería NaNO<sub>3</sub>.</p>

    <p><em>La información anterior se resume en la siguiente tabla.</em></p>

    <table border="3">
        <thead>
            <tr>
                <th>Terminación en la Sal</th>
                <th>Ácido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>...<span class="ion">uro</span></td>
                <td>Ácido ...<span class="highlight">hídrico</span></td>
            </tr>
            <tr>
                <td>...<span class="ion">ito</span></td>
                <td>Ácido ...<span class="highlight">oso</span></td>
            </tr>
            <tr>
                <td>...<span class="ion">ato</span></td>
                <td>Ácido ...<span class="highlight">ico</span></td>
            </tr>
        </tbody>
    </table>

    <h2>Ejemplo</h2>
    <table>
        <thead>
            <tr>
                <th>Iones</th>
                <th>Fórmula</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>H<sup>+</sup> + S<sup>-2</sup> <span class="ion">(sulfuro)</span></td>
                <td>H<sub>2</sub>S</td>
                <td class="highlight">Ácido sulfhídrico</td>
            </tr>
            <tr>
                <td>H<sup>+</sup> + SO<sub>3</sub><sup>-2</sup> <span class="ion">(sulfito)</span></td>
                <td>H<sub>2</sub>SO<sub>3</sub></td>
                <td class="highlight">Ácido sulfuroso</td>
            </tr>
            <tr>
                <td>H<sup>+</sup> + SO<sub>4</sub><sup>-2</sup> <span class="ion">(sulfato)</span></td>
                <td>H<sub>2</sub>SO<sub>4</sub></td>
                <td class="highlight">Ácido sulfúrico</td>
            </tr>
        </tbody>
    </table>
    <br>


    <h2 id="Uso de nomenclatura sistemática">4. Uso de nomenclatura sistemática</h2>
   
    <p><strong>Para usar este tipo de nomenclatura debes usar los siguientes sufijos para indicar la cantidad de átomos que hay de cada elemento.</strong></p>
    <table border="3">
        <thead>
            <h2>Tabla de Cantidad de Átomos y Sufijos</h2>
    <table>
        <thead>
            <tr>
                <th>Cantidad de átomos</th>
                <th>Sufijo</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Mono-</td></tr>
            <tr><td>2</td><td>di- ó bi-</td></tr>
            <tr><td>3</td><td>Tri-</td></tr>
            <tr><td>4</td><td>Tetra-</td></tr>
            <tr><td>5</td><td>Penta-</td></tr>
            <tr><td>6</td><td>Hexa-</td></tr>
            <tr><td>7</td><td>Hepta-</td></tr>
            <tr><td>8</td><td>Octa-</td></tr>
            <tr><td>9</td><td>Nona-</td></tr>
            <tr><td>10</td><td>Deca-</td></tr>
        </tbody>
    </table>

    <h2>Ejemplos de Fórmulas y Nombres</h2>
    <table>
        <thead>
            <tr>
                <th>Fórmula</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>PCl<sub>5</sub></td><td>Pentacloruro de fósforo</td></tr>
            <tr><td>Cl<sub>2</sub>O<sub>7</sub></td><td>Heptóxido de dicloro</td></tr>
            <tr><td>SO<sub>3</sub></td><td>Trióxido de azufre</td></tr>
            <tr><td>N<sub>2</sub>O<sub>4</sub></td><td>Tetróxido de dinitrógeno</td></tr>
        </tbody>
        </tbody>
    </table>
    <br>

    <p><strong>Completa en base a lo aprendido la siguiente tabla.</strong></p>

    <table border="3">
        <thead>
            <tr>
                <th>Iones</th>
                <th>Fórmula</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Co<sup>+2</sup> (cobalto II) + Cl<sup>-</sup> (cloruro)</td>
                <td>CoCl<sub>2</sub></td>
                <td>Cloruro de cobalto (II)</td>
            </tr>
            <tr>
                <td>Ag<sup>+</sup> (plata) + NO<sub>3</sub><sup>-</sup> (nitrato)</td>
                <td>AgNO<sub>3</sub></td>
                <td>Nitrato de plata</td>
            </tr>
            <tr>
                <td>Mg<sup>+2</sup> (magnesio) + ClO<sub>4</sub><sup>-</sup> (perclorato)</td>
                <td>Mg(ClO<sub>4</sub>)<sub>2</sub></td>
                <td>Perclorato de magnesio</td>
            </tr>
            <tr>
                <td>NH<sub>4</sub><sup>+</sup> (amonio) + S<sup>-2</sup> (sulfuro)</td>
                <td>(NH<sub>4</sub>)<sub>2</sub>S</td>
                <td>Sulfuro de amonio</td>
            </tr>
            <tr>
                <td>K<sup>+</sup> (potasio) + O<sub>2</sub><sup>-2</sup> (peróxido)</td>
                <td>K<sub>2</sub>O<sub>2</sub></td>
                <td>Peróxido de potasio</td>
            </tr>
            <tr>
                <td>Fe<sup>+3</sup> (hierro III) + OH<sup>-</sup> (hidróxido)</td>
                <td>Fe(OH)<sub>3</sub></td>
                <td>Hidróxido férrico</td>
            </tr>
            <tr>
                <td>Na<sup>+</sup> (sodio) + ClO<sup>-</sup> (hipoclorito)</td>
                <td>NaClO</td>
                <td>Hipoclorito de sodio</td>
            </tr>
            <tr>
                <td>Ca<sup>+2</sup> (calcio) + O<sup>-2</sup></td>
                <td>CaO</td>
                <td>Óxido de calcio</td>
            </tr>
            <tr>
                <td>Cu<sup>+2</sup> (cobre II) + NO<sub>3</sub><sup>-</sup></td>
                <td>Cu(NO<sub>3</sub>)<sub>2</sub></td>
                <td>Nitrato de cobre (II)</td>
            </tr>
        </tbody>
    </table>
    <br>

    <table border="3">
        <thead>
            <tr>
                <th>Ión Positivo</th>
                <th>Ión Negativo</th>
                <th>Fórmula</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>K<sup>+</sup></td>
                <td>(Cr<sub>2</sub>O<sub>7</sub>)<sup>-2</sup></td>
                <td>K<sub>2</sub>Cr<sub>2</sub>O<sub>7</sub></td>
                <td>Dicromato de potasio</td>
            </tr>
        </tbody>
    </table>
    <br>

    <table border="3">
        <thead>
            <tr>
                <th>+1</th>
                <th>+2</th>
                <th>+3</th>
                <th>+4</th>
                <th>-1</th>
                <th>-2</th>
                <th>-3</th>
                <th>-4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>H+ (Hydrogen)</td>
                <td>Mg2+ (Magnesium)</td>
                <td>Al3+ (Aluminum)</td>
                <td>Sn4+ (Tin IV)</td>
                <td>F- (Fluoride)</td>
                <td>O2- (Oxide)</td>
                <td>N3- (Nitride)</td>
                <td>C4- (Carbide)</td>
            </tr>
            <tr>
                <td>Li+ (Lithium)</td>
                <td>Ca2+ (Calcium)</td>
                <td>Cr3+ (Chromium III)</td>
                <td>Pb4+ (Lead IV)</td>
                <td>Cl- (Chloride)</td>
                <td>S2- (Sulfide)</td>
                <td>P3- (Phosphide)</td>
                <td></td>
            </tr>
            <tr>
                <td>Na+ (Sodium)</td>
                <td>Sr2+ (Strontium)</td>
                <td>Fe3+ (Iron III)</td>
                <td></td>
                <td>Br- (Bromide)</td>
                <td>CO3^2- (Carbonate)</td>
                <td>PO4^3- (Phosphate)</td>
                <td></td>
            </tr>
            <tr>
                <td>K+ (Potassium)</td>
                <td>Ba2+ (Barium)</td>
                <td>Sb3+ (Antimony III)</td>
                <td></td>
                <td>I- (Iodide)</td>
                <td>SO3^2- (Sulfite)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Cu+ (Copper I)</td>
                <td>Co2+ (Cobalt II)</td>
                <td>Bi3+ (Bismuth III)</td>
                <td></td>
                <td>OH- (Hydroxide)</td>
                <td>SO4^2- (Sulfate)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Ag+ (Silver)</td>
                <td>Fe2+ (Iron II)</td>
                <td></td>
                <td></td>
                <td>NO2- (Nitrite)</td>
                <td>C2O4^2- (Oxalate)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Rb+ (Rubidium)</td>
                <td>Mn2+ (Manganese II)</td>
                <td></td>
                <td></td>
                <td>NO3- (Nitrate)</td>
                <td>Cr2O7^2- (Dichromate)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Hg+ (Mercurous)</td>
                <td>Ni2+ (Nickel II)</td>
                <td></td>
                <td></td>
                <td>HSO4- (Hydrogen Sulfate)</td>
                <td>MnO4^2- (Manganate)</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Cs+ (Cesium)</td>
                <td>Cu2+ (Copper II)</td>
                <td></td>
                <td></td>
                <td>ClO- (Hypochlorite)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Zn2+ (Zinc)</td>
                <td></td>
                <td></td>
                <td>ClO2- (Chlorite)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Sn2+ (Tin II)</td>
                <td></td>
                <td></td>
                <td>ClO3- (Chlorate)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Pb2+ (Lead II)</td>
                <td></td>
                <td></td>
                <td>ClO4- (Perchlorate)</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Hg2+ (Mercuric)</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
<br>

<h2 id="Resultados">5. Resultados</h2>

<table border="3">
    <thead>
        <tr>
            <th>Iones</th>
            <th>Fórmula</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Co<sup>+2</sup> (cobalto (II))</td>
            <td>CoCl<sub>2</sub></td>
            <td>Cloruro de cobalto (II) o Cloruro de cobaltoso</td>
        </tr>
        <tr>
            <td>Ag<sup>+</sup> (plata)</td>
            <td>AgNO<sub>3</sub></td>
            <td>Nitrato de plata</td>
        </tr>
        <tr>
            <td>Mg<sup>+2</sup> (magnesio)</td>
            <td>Mg(ClO<sub>4</sub>)<sub>2</sub></td>
            <td>Perclorato de magnesio</td>
        </tr>
        <tr>
            <td>(NH<sub>4</sub>)<sup>+</sup> (amonio)</td>
            <td>(NH<sub>4</sub>)<sub>2</sub>S</td>
            <td>Sulfuro de amonio</td>
        </tr>
        <tr>
            <td>K<sup>+</sup> (potasio)</td>
            <td>KO<sub>2</sub></td>
            <td>Peróxido de potasio</td>
        </tr>
        <tr>
            <td>Fe<sup>+3</sup> (hierro (III))</td>
            <td>Fe(OH)<sub>3</sub></td>
            <td>Hidróxido de hierro (III) o Hidróxido férrico</td>
        </tr>
        <tr>
            <td>Na<sup>+</sup> (sodio)</td>
            <td>NaClO</td>
            <td>Hipoclorito de sodio</td>
        </tr>
        <tr>
            <td>Ca<sup>+2</sup> (calcio)</td>
            <td>CaO</td>
            <td>Óxido de calcio</td>
        </tr>
        <tr>
            <td>CoHPO<sub>4</sub></td>
            <td>CoHPO<sub>4</sub></td>
            <td>Fosfato hidrógeno de cobalto (II)</td>
        </tr>
        <tr>
            <td>Cu<sup>+2</sup> (cobre (II))</td>
            <td>Cu(OH)<sub>2</sub></td>
            <td>Hidróxido de cobre (II)</td>
        </tr>
        <tr>
            <td>K<sup>+</sup> (potasio)</td>
            <td>KClO</td>
            <td>Hipoclorito de potasio</td>
        </tr>
        <tr>
            <td>CN<sup>-</sup> (cianuro)</td>
            <td>NH<sub>4</sub>CN</td>
            <td>Cianuro de amonio</td>
        </tr>
    </tbody>
</table>
<br>

<table border="3">
    <thead>
        <tr>
            <th>Iones</th>
            <th>Fórmula</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Cu<sup>+2</sup> (cobre (II) o cúprico)</td>
            <td>Cu(NO<sub>3</sub>)<sub>2</sub></td>
            <td>Nitrato de cobre (II) o nitrato cúprico</td>
        </tr>
        <tr>
            <td>Cs<sup>+</sup> (cesio)</td>
            <td>CsHCO<sub>3</sub></td>
            <td>Carbonato hidrógeno de cesio o bicarbonato de cesio</td>
        </tr>
        <tr>
            <td>Fe<sup>+3</sup> (hierro (III) o férrico)</td>
            <td>Fe<sub>2</sub>O<sub>3</sub></td>
            <td>Óxido de hierro (III)</td>
        </tr>
        <tr>
            <td>Ca<sup>+2</sup> (calcio)</td>
            <td>CaO<sub>2</sub></td>
            <td>Peróxido de calcio</td>
        </tr>
        <tr>
            <td>K<sup>+</sup> (potasio)</td>
            <td>K<sub>2</sub>Cr<sub>2</sub>O<sub>7</sub></td>
            <td>Dicromato de potasio</td>
        </tr>
    </tbody>
</table>
<br>

<table border="3">
    <thead>
        <tr>
            <th>Iones</th>
            <th>Fórmula</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>PCl<sub>5</sub></td>
            <td>Pentacloruro de fósforo</td>
        </tr>
        <tr>
            <td>Cl<sub>2</sub>O<sub>7</sub></td>
            <td>Heptóxido de dicloro</td>
        </tr>
        <tr>
            <td>SO<sub>3</sub></td>
            <td>Trióxido de azufre</td>
        </tr>
        <tr>
            <td>N<sub>2</sub>O<sub>4</sub></td>
            <td>Trióxido de dinitrógeno</td>
        </tr>
        <tr>
            <td>B<sub>2</sub>O<sub>3</sub></td>
            <td>Trióxido de diboro</td>
        </tr>
    </tbody>
</table>
<br>

<table border="3">
    <thead>
        <tr>
            <th>Iones</th>
            <th>Fórmula</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>H<sup>+</sup> Cl<sup>-</sup></td>
            <td>HCl</td>
            <td>Ácido clorhídrico</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> NO<sub>2</sub><sup>-</sup></td>
            <td>HNO<sub>2</sub></td>
            <td>Ácido nitroso</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> PO<sub>4</sub><sup>3-</sup></td>
            <td>H<sub>3</sub>PO<sub>4</sub></td>
            <td>Ácido fosfórico</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> ClO<sup>-</sup></td>
            <td>HClO</td>
            <td>Ácido hipocloroso</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> ClO<sub>4</sub><sup>-</sup></td>
            <td>HClO<sub>4</sub></td>
            <td>Ácido perclórico</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> Br<sup>-</sup></td>
            <td>HBr</td>
            <td>Ácido bromhídrico</td>
        </tr>
        <tr>
            <td>H<sup>+</sup> NO<sub>3</sub><sup>-</sup></td>
            <td>HNO<sub>3</sub></td>
            <td>Ácido nítrico</td>
        </tr>
    </tbody>
</table>
<br>

<h2 id="EJERCICIOS">4. EJERCICIOS</h2>
<p><strong>Hallar la fórmula de los siguientes compuestos</strong></p>

<table border="1">
    <thead>
        <tr>
            <td class="number">1.</td>
            <td>Tetrafluoruro de azufre</td>
            <td class="number">15.</td>
            <td>Ditiocarbonato de magnesio</td>
        </tr>
        <tr>
            <td class="number">2.</td>
            <td>Ácido fosfórico</td>
            <td class="number">16.</td>
            <td>Clorito de bario</td>
        </tr>
        <tr>
            <td class="number">3.</td>
            <td>Tiosulfito de berilio</td>
            <td class="number">17.</td>
            <td>Cianuro de cobre (II)</td>
        </tr>
        <tr>
            <td class="number">4.</td>
            <td>Hidrogenosulfuro de litio</td>
            <td class="number">18.</td>
            <td>Perbromato de amonio</td>
        </tr>
        <tr>
            <td class="number">5.</td>
            <td>Disulfuro de carbono</td>
            <td class="number">19.</td>
            <td>Monocarburo de silicio</td>
        </tr>
        <tr>
            <td class="number">6.</td>
            <td>Amoniaco</td>
            <td class="number">20.</td>
            <td>Cloruro de amonio</td>
        </tr>
        <tr>
            <td class="number">7.</td>
            <td>Cloruro mercurioso</td>
            <td class="number">21.</td>
            <td>Dihidrogenoarseniato de plomo (IV)</td>
        </tr>
        <tr>
            <td class="number">8.</td>
            <td>Tiarseniato de plata</td>
            <td class="number">22.</td>
            <td>Estibina</td>
        </tr>
        <tr>
            <td class="number">9.</td>
            <td>Ácido arsénico</td>
            <td class="number">23.</td>
            <td>Pentacloruro de fósforo</td>
        </tr>
        <tr>
            <td class="number">10.</td>
            <td>Óxido de cinc y hierro (II)</td>
            <td class="number">24.</td>
            <td>Dióxido de plomo</td>
        </tr>
        <tr>
            <td class="number">11.</td>
            <td>Triyoduro de nitrógeno</td>
            <td class="number">25.</td>
            <td>Hidrogenoteluros de aluminio</td>
        </tr>
        <tr>
            <td class="number">12.</td>
            <td>Nitruro de litio</td>
            <td class="number">26.</td>
            <td>Fluoruro de boro</td>
        </tr>
        <tr>
            <td class="number">13.</td>
            <td>Peróxido de berilio</td>
            <td class="number">27.</td>
            <td>Permanganato de potasio</td>
        </tr>
        <tr>
            <td class="number">14.</td>
            <td>Nitrato de amonio</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<br>

<table border="3">
    <thead>
        <tr>
            <td class="number">28.</td>
            <td>Ácido selenhídrico</td>
            <td class="number">46.</td>
            <td>Ácido metabórico</td>
        </tr>
        <tr>
            <td class="number">29.</td>
            <td>Bis(trioxobromato) de hierro</td>
            <td class="number">47.</td>
            <td>Trisilicuro de diboro</td>
        </tr>
        <tr>
            <td class="number">30.</td>
            <td>Trihidróxido de níquel</td>
            <td class="number">48.</td>
            <td>Silicato de calcio</td>
        </tr>
        <tr>
            <td class="number">31.</td>
            <td>Borato de calcio y sodio</td>
            <td class="number">49.</td>
            <td>Tetraoxarseniato de galio</td>
        </tr>
        <tr>
            <td class="number">32.</td>
            <td>Dióxido de silicio</td>
            <td class="number">50.</td>
            <td>Dicromato de plata</td>
        </tr>
        <tr>
            <td class="number">33.</td>
            <td>Sulfito férrico</td>
            <td class="number">51.</td>
            <td>Manganato de litio</td>
        </tr>
        <tr>
            <td class="number">34.</td>
            <td>Trioxidomanganato (2-) de estaño</td>
            <td class="number">52.</td>
            <td>Hidrosulfito de cobre (I)</td>
        </tr>
        <tr>
            <td class="number">35.</td>
            <td>Peróxido de cadmio</td>
            <td class="number">53.</td>
            <td>Metafofato de hierro (II)</td>
        </tr>
        <tr>
            <td class="number">36.</td>
            <td>Fosfato de plata</td>
            <td class="number">54.</td>
            <td>Hidrógeno(trioxosulfato) de potasio</td>
        </tr>
        <tr>
            <td class="number">37.</td>
            <td>Dióxido (2-) de platino (2+)</td>
            <td class="number">55.</td>
            <td>Ácido selenhídrico</td>
        </tr>
        <tr>
            <td class="number">38.</td>
            <td>Dicromato de sodio</td>
            <td class="number">56.</td>
            <td>Hidroxidotrioxoselenio de plomo</td>
        </tr>
        <tr>
            <td class="number">39.</td>
            <td>Hiponitrito de plata</td>
            <td class="number">57.</td>
            <td>Hidróxido de calcio</td>
        </tr>
        <tr>
            <td class="number">40.</td>
            <td>Metafosfato de rubidio</td>
            <td class="number">58.</td>
            <td>Heptaóxido de dibromo</td>
        </tr>
        <tr>
            <td class="number">41.</td>
            <td>Perclorato cobalto (III)</td>
            <td class="number">59.</td>
            <td>Pentaóxido de dinitrógeno</td>
        </tr>
        <tr>
            <td class="number">42.</td>
            <td>Hidróxido de estaño (II)</td>
            <td class="number">60.</td>
            <td>Peróxido de sodio</td>
        </tr>
        <tr>
            <td class="number">43.</td>
            <td>Dicromato de níquel (III)</td>
            <td class="number">61.</td>
            <td>Tiohiposulfito de berilio</td>
        </tr>
        <tr>
            <td class="number">44.</td>
            <td>Cloruro de estaño (IV)</td>
            <td class="number">62.</td>
            <td>Triclururo de níquel</td>
        </tr>
        <tr>
            <td class="number">45.</td>
            <td>Hipoclorito de rubidio</td>
            <td class="number">63.</td>
            <td>Hidrogenosulfato de mercurio (II)</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="number">64.</td>
            <td>Dicromato de potasio</td>
        </tr>
    </tbody>
</table>
<br>

<table border="1">
    <thead>
        <tr>
            <td class="number">66.</td>
            <td>Hipoclorito de cinc</td>
            <td class="number">86.</td>
            <td>Ácido ditiarsénico</td>
        </tr>
        <tr>
            <td class="number">67.</td>
            <td>Peróxido de cesio</td>
            <td class="number">87.</td>
            <td>Dióxido de nitrógeno</td>
        </tr>
        <tr>
            <td class="number">68.</td>
            <td>Ácido nitroso</td>
            <td class="number">88.</td>
            <td>Cianuro de amonio</td>
        </tr>
        <tr>
            <td class="number">69.</td>
            <td>Hidrogenofosfato de plata</td>
            <td class="number">89.</td>
            <td>Ácido perclórico</td>
        </tr>
        <tr>
            <td class="number">70.</td>
            <td>Dihidroxidomonoxido de carbono</td>
            <td class="number">90.</td>
            <td>Clorato de aluminio</td>
        </tr>
        <tr>
            <td class="number">71.</td>
            <td>Ácido arsenioso</td>
            <td class="number">91.</td>
            <td>Nitruro de calcio</td>
        </tr>
        <tr>
            <td class="number">72.</td>
            <td>Sulfuro de carbono (IV)</td>
            <td class="number">92.</td>
            <td>Cloruro de berilio</td>
        </tr>
        <tr>
            <td class="number">73.</td>
            <td>Pentaóxido difosfato (4-) de sodio</td>
            <td class="number">93.</td>
            <td>Hidrogenocarbonato de vanadio (V)</td>
        </tr>
        <tr>
            <td class="number">74.</td>
            <td>Carbonato de oro (III)</td>
            <td class="number">94.</td>
            <td>Pentaoxisilicato (2-) de estaño (II)</td>
        </tr>
        <tr>
            <td class="number">75.</td>
            <td>Fosfina</td>
            <td class="number">95.</td>
            <td>Dihidroxidotrioxido de telurio</td>
        </tr>
        <tr>
            <td class="number">76.</td>
            <td>Silicato de calcio</td>
            <td class="number">96.</td>
            <td>Silicato de aluminio</td>
        </tr>
        <tr>
            <td class="number">77.</td>
            <td>Carbonato de estroncio</td>
            <td class="number">97.</td>
            <td>Arseninuro de calcio y potasio</td>
        </tr>
        <tr>
            <td class="number">78.</td>
            <td>Trihidruro de boro</td>
            <td class="number">98.</td>
            <td>Antimoniuro de cobalto (III)</td>
        </tr>
        <tr>
            <td class="number">79.</td>
            <td>Ácido fluorhídrico</td>
            <td class="number">99.</td>
            <td>Cromato de oro (III)</td>
        </tr>
        <tr>
            <td class="number">80.</td>
            <td>Trioxido de difósforo</td>
            <td class="number">100.</td>
            <td>Nitrito de litio</td>
        </tr>
        <tr>
            <td class="number">81.</td>
            <td>Trioxinitrato (1-) de amonio</td>
            <td class="number">101.</td>
            <td>Trioxidocarbonato de dipotasio</td>
        </tr>
        <tr>
            <td class="number">82.</td>
            <td>Dióxido de nitrógeno</td>
            <td class="number">102.</td>
            <td>Heptaóxido difosfato de platino</td>
        </tr>
        <tr>
            <td class="number">83.</td>
            <td>Peróxido de magnesio</td>
            <td class="number">103.</td>
            <td>Tris(trioxidocarbonato) de dincuquel</td>
        </tr>
        <tr>
            <td class="number">84.</td>
            <td>Silano</td>
            <td class="number">104.</td>
            <td>Ácido permangánico</td>
        </tr>
        <tr>
            <td class="number">85.</td>
            <td>Trihidroxitetróxido de fósforo</td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
<br>

<h2 id="EJERCICIOS">6. EJERCICIOS</h2>
<p><trong>Nombra los siguientes compuestos utilizando diversas nomenclaturas</trong></p>

<table border="1">
    <thead>
        <tr>
            <td>1. HCl</td>
            <td>10. HF</td>
            <td>19. SO<sub>2</sub></td>
        </tr>
        <tr>
            <td>2. H<sub>2</sub>S</td>
            <td>11. Ag<sub>2</sub>O</td>
            <td>20. B<sub>2</sub>O<sub>3</sub></td>
        </tr>
        <tr>
            <td>3. HBr</td>
            <td>12. P<sub>2</sub>O<sub>3</sub></td>
            <td>21. Br<sub>2</sub>O</td>
        </tr>
        <tr>
            <td>4. H<sub>2</sub>Te</td>
            <td>13. Fe<sub>2</sub>O<sub>3</sub></td>
            <td>22. K<sub>2</sub>O</td>
        </tr>
        <tr>
            <td>5. RbH</td>
            <td>14. N<sub>2</sub>O</td>
            <td>23. Br<sub>2</sub>O<sub>7</sub></td>
        </tr>
        <tr>
            <td>6. NaHS</td>
            <td>15. PbO</td>
            <td>24. Al<sub>2</sub>Te<sub>3</sub></td>
        </tr>
        <tr>
            <td>7. GeH<sub>4</sub></td>
            <td>16. Co<sub>2</sub>O<sub>3</sub></td>
            <td>25. HgBr<sub>2</sub></td>
        </tr>
        <tr>
            <td>8. H<sub>2</sub>Te</td>
            <td>17. CaO</td>
            <td>26. FeTe</td>
        </tr>
        <tr>
            <td>9. HI</td>
            <td>18. Ni<sub>2</sub>O<sub>3</sub></td>
            <td>27. KBr</td>
        </tr>

    </tbody>
</table>
<br>

<table border="1">
    <thead>
        <tr>
            <td>28. SnI<sub>4</sub></td>
            <td>83. CuN</td>
        </tr>
        <tr>
            <td>29. FeSe</td>
            <td>84. FeI<sub>2</sub></td>
        </tr>
        <tr>
            <td>30. HClO<sub>4</sub></td>
            <td>85. PbS</td>
        </tr>
        <tr>
            <td>31. HNO<sub>2</sub></td>
            <td>86. AsI<sub>3</sub></td>
        </tr>
        <tr>
            <td>32. H<sub>2</sub>SO<sub>4</sub></td>
            <td>87. HgCl</td>
        </tr>
        <tr>
            <td>33. H<sub>2</sub>SO<sub>3</sub></td>
            <td>88. KOH</td>
        </tr>
        <tr>
            <td>34. H<sub>3</sub>BO<sub>3</sub></td>
            <td>89. Al(OH)<sub>3</sub></td>
        </tr>
        <tr>
            <td>35. HMnO<sub>4</sub></td>
            <td>90. Mg(OH)<sub>2</sub></td>
        </tr>
        <tr>
            <td>36. H<sub>3</sub>PO<sub>4</sub></td>
            <td>91. Sr(OH)<sub>2</sub></td>
        </tr>
        <tr>
            <td>37. H<sub>3</sub>AsO<sub>3</sub></td>
            <td>92. Ba(OH)<sub>2</sub></td>
        </tr>
        <tr>
            <td>38. HBrO<sub>3</sub></td>
            <td>93. H<sub>2</sub>O</td>
        </tr>
        <tr>
            <td>39. HI</td>
            <td>94. H<sub>2</sub>SO<sub>2</sub></td>
        </tr>
        <tr>
            <td>40. Cu(NO<sub>3</sub>)<sub>2</sub></td>
            <td>95. H<sub>2</sub>SO<sub>5</sub></td>
        </tr>
        <tr>
            <td>41. Zn(OH)<sub>2</sub></td>
            <td>96. HIO</td>
        </tr>
        <tr>
            <td>42. Pb(OH)<sub>2</sub></td>
            <td>97. FePO<sub>4</sub></td>
        </tr>
        <tr>
            <td>43. HPO<sub>3</sub></td>
            <td>98. Cr<sub>2</sub>O<sub>7</sub></td>
        </tr>
        <tr>
            <td>44. Na<sub>3</sub>CO<sub>3</sub></td>
            <td>99. MnSO<sub>4</sub></td>
        </tr>
        <tr>
            <td>45. K<sub>2</sub>SO<sub>4</sub></td>
            <td>100. Al<sub>2</sub>O<sub>3</sub></td>
        </tr>
    </tbody>
</table>
<br>
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
    window.location.href = 'http://chemitry-experiments-simulation.vercel.app/experiment3';
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