<?php
include '../header.php';
$practical_number = "A1"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 1:Planos y posiciones anatómicas</title>
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
                <li><a href="#objectives">Objetivos</a></li>
                <li><a href="#position">Posición</a></li>
                <li><a href="#planes">Aviones</a></li>
                <li><a href="#terms">Términos anatómicos</a></li>
                <li><a href="#Movements">Movimientos</a></li>
                <li><a href="#Regions">Regiones</a></li>
                <li><a href="#Anatomical Positions">Posiciones anatómicas</a></li>
                <li><a href="#Fowler Position">Posición de Fowler</a></li>
                <li><a href="#Semifowler">Posición de semifowler</a></li>
                <li><a href="#Dorsal">Dorsal con patas elevadas</a></li>
                <li><a href="#Supine Decubitus">Decúbito dorsal o supino</a></li>
                <li><a href="#Questionnaire">Cuestionario</a></li>
                <li><a href="#Reference">Referencia</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>            Práctica 1: Planos y posiciones anatómicas</h1>
                <h2 id="objectives">1. Objetivoss</h2>
                <ul>
                    <li>Conocer las posiciones y planos anatómicos del cuerpo humano.</li>
                    <li>Relacionar el uso de posiciones anatómicas con las diferentes patologías o exámenes físicos correspondientes.</li>
                </ul>
                
                <h2 id="position">Posición  </h2>
                <p><strong>Posición de referencia en anatomía:</strong> El individuo se encuentra de pie, con las extremidades extendidas a los lados del tronco, 
                las palmas de las manos hacia adelante y los pulgares apuntando hacia arriba.
                 Los pies están paralelos entre sí y los dedos de los pies están orientados hacia adelante.</p>
                
                <h2 id="planes">Aviones</h2>
                <p><strong>Planos imaginarios que intersecan el cuerpo generando cortes de varios órganos y estructuras. Los principales planos anatómicos incluyen:</strong></p>
                <ul>
                    
                    <li><strong>Plano medio sagital/medio o medio vertical:</strong> recorre el centro del cuerpo (línea media o mediana) y corta verticalmente el cuerpo en mitades simétricas, una derecha y otra izquierda.</li>
                    <li><strong>Plano sagital:</strong> Cualquier plano vertical arbitrario paralelo al plano sagital medio, que corta el cuerpo en mitades derecha e izquierda asimétricas.</li>
                    <li><strong>Plano frontal (coronal):</strong> Cualquier plano vertical dispuesto perpendicularmente al plano sagital, dividiendo el cuerpo en una mitad anterior (ventral) y una mitad posterior (dorsal).</li>
                    <li><strong>Plano transversal o transversal (axial):</strong>Plano horizontal perpendicular a los anteriores, que divide el cuerpo en una mitad superior (craneal) y una inferior (caudal).</li>
                </ul>
                
                <h2 id="terms">Términos anatómicos</h2>
                <p><strong>Términos anatómicos utilizados para describir la posición y la relación entre estructuras. Los principales términos de dirección y comparación incluyen:</strong></p>
                <ul>
                    <li><strong>Anterior:</strong>  Delante de o delante de.</li>
                    <li><strong>Posterior:</strong>Detrás o posterior.</li>
                    <li><strong>Ventral:</strong>Hacia la parte frontal del cuerpo.</li>
                    <li><strong>Dorsal:</strong>  Hacia la parte posterior del cuerpo.</li>
                    <li><strong>Proximal:</strong>Cercano al sitio de origen de una parte del cuerpo.</li>
                    <li><strong>Distal:</strong> Lejos del sitio de origen de una parte del cuerpo.</li>
                    <li><strong>Medial:</strong> Hacia la línea media.</li>
                    <li><strong>Lateral:</strong>Lejos de la línea media.</li>
                    <li><strong>Superior:</strong> Hacia la parte superior de la cabeza.</li>
                    <li><strong>Inferior:</strong> Hacia los pies.</li>
                    <li><strong>Craneal:</strong>  Hacia la cabeza.</li>
                    <li><strong>Caudal:</strong>Hacia la cola.</li>
                    <li><strong>Superficial:</strong> Más cerca de la superficie.</li>
                    <li><strong>Profundo: </strong> Lejos de la superficie.</li>
                    <li><strong>Palmar:</strong>Parte delantera o palma de la mano.</li>
                    <li><strong>Dorsal (mano):</strong> Superficie posterior o dorso de la mano.</li>
                    <li><strong>Plantar:</strong> Parte inferior del pie (planta).</li>
                    <li><strong>Dorsal (pie):</strong> Parte superior del pie (dorso o empeine).</li>
                </ul>

                <h2 id="Movements">Movimientos</h2>
                <p><strong>Cambios en la posición de un segmento corporal alrededor de un eje determinado y en uno de los planos anatómicos. Los principales movimientos incluyen:</strong></p>
                <ul>
                    <li>Flexión</li>
                    <li>Extensión</li>
                    <li>Secuestro</li>
                    <li>Aducción</li>
                    <li>Rotación lateral</li>
                    <li>Rotación medial</li>
                    <li>Circunducción</li>
                    <li>Pronación</li>
                    <li>Supinación</li>
                    <li>Inversión</li>
                    <li>Eversión</li>
                </ul>
                
                <h2 id="Regions">Regiones</h2>
                <p><strong>Áreas del cuerpo definidas por estructuras anatómicas que son claramente visibles o palpables en la superficie. Las regiones principales incluyen:</strong></p>
                <ul>
                    <li>Cabeza</li>
                    <li>Cuello</li>
                    <li>Tórax</li>
                    <li>Abdomen</li>
                    <li>Pelvis</li>
                    <li>Extremidad superior</li>
                    <li>Extremidad inferior</li>
                </ul>
    
                <h2 id="Anatomical Positions">Posiciones anatómicas</h2>
                <p>Anatómicamente hay cuatro planos principales:</p>
                <ul>
                    <li><strong>Plano medio sagital/medio o medio vertical:</strong>recorre el centro del 
                    cuerpo y lo corta verticalmente en mitades simétricas, una derecha y otra izquierda.</li>
                    <li><strong>Plano sagital:</strong> Cualquier plano vertical arbitrario paralelo al plano sagital medio.</li>
                    <li><strong>Plano frontal (coronal):</strong> Cualquier plano vertical dispuesto perpendicularmente al plano
                     sagital, dividiendo el cuerpo en una mitad anterior y otra posterior.</li>
                    <li><strong>Plano transversal o transversal (axial):</strong> Plano horizontal perpendicular a los anteriores,
                     que divide el cuerpo en una mitad superior (craneal) y una inferior (caudal).</li>
                </ul>
    
                <h2>2. Posiciones anatómicas</h2>
                <h3>Posición erecta o anatómica</h3>
                <p><strong>Concepto:</strong>Alineación de los segmentos corporales en dirección vertical con los miembros superiores a los costados del cuerpo, las manos en pronación, la cabeza recta y los
                 pies apuntando hacia adelante. Los pies pueden tener diferentes separaciones, según el caso.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Definición de planos corporales.</li>
                    <li>Reducción del estrés excesivo en las articulaciones que soportan peso.</li>
                </ul>
    
                <h3 id="Fowler Position">Posición de Fowler</h3>
                <div class="image-container">
                    <img src="Anatomy images\Prac_1\fowler.jpg" alt="Fowler position" class="Fowler image">
                </div>
                <p><strong>Concepto: </strong> Paciente sentado en la cama con la cabecera de la cama elevada a 45° y ligera flexión de los miembros inferiores.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Examen físico de la región anterior del cuerpo.</li>
                    <li>Alimentación.</li>
                    <li>Reduce la tensión muscular abdominal y lumbar.</li>
                    <li>Aplicación de algunos tratamientos o intervenciones quirúrgicas en la cabeza o la cara.</li>
                    <li>Descansar.</li>
                    <li>Promover la respiración.</li>
                </ul>
                <h3 id="Semifowler">Posición de semifowler</h3>
                <div class="image-container">
                    <img src="Anatomy images\Prac_1\semifowler.jpg" alt="semiFowler position" class="Semi-fowler image">
                </div>
                <p><strong>Concepto:</strong> Paciente sentado en la cama con la cabecera de la cama elevada a 30° y ligera flexión de los miembros inferiores.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Examen físico de la región anterior del cuerpo.</li>
                    <li>Alimento.</li>
                    <li>Reduce la tensión muscular abdominal y lumbar.</li>
                    <li>Aplicación de algunos tratamientos o intervenciones quirúrgicas en la cabeza o la cara.</li>
                    <li>Descansar.</li>
                    <li>Promover la respiración.</li>
                </ul>
    
                <h3 id="Dorsal">Dorsal con patas elevadas</h3>
                <div class="images"> </div>
                    <img src="Anatomy images\Prac_1\dorcel_with_raised_leg.jpg" alt="dorcel_with_raised_leg" class="Dorsal">
                </div>
                <p><strong>Descripción:</strong>Paciente en posición dorsal o supina con extremidades inferiores elevadas sobre almohadas o al pie de la cama.</p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Favorece la relajación muscular.</li>
                    <li>Reducir el edema de las extremidades inferiores.</li>
                </ul>
    
                <h3 id="Supine Decubitus">Decúbito dorsal o supino</h3>
                <div class="images"> 
                    <img src="Anatomy images\Prac_1\dorcel_or_supine.png" alt="dorcel_or_supine" class="Dorsal">
                </div>
                <p><strong>Descripción: </strong> Paciente acostado boca arriba, miembros superiores a los lados del cuerpo y miembros inferiores ligeramente flexionados.  </p>
                <p><strong>Indicaciones:</strong></p>
                <ul>
                    <li>Examen físico de la región anterior del cuerpo.</li>
                    <li>Relajación muscular.</li>
                    <li>Aplicación de tratamientos específicos en la región anterior del cuerpo.</li>
                    <li>En laparotomía.</li>
                </ul>
    
                <h2 id="Questionnaire">Cuestionario</h2>
                
                <div>
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
                <ol>
                    <li>Complete según corresponda: ¿Qué puesto corresponde?</li>
                    <div class="image-container">
                        <img src="Anatomy images\Prac_1\questionarie.png" alt="Anatomical planes" class="anatomical-image">
                    </div>
                </ol>
    
                <h2 id="Reference">Referencia</h2>
                <p>Fuente: <a href="https://www.kenhub.com/es/library/anatomia-es/terminologia-anatomica-es"> Kenhub - Anatomical Terminology</a></p>
                
            </div>
        </section>
    </div>
</body>
</html>
