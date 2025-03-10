
<?php
include '../header.php';
$practical_number = "A9"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy PRÁCTICA N° 9: 
REGIONES, ESTRUCTURAS Y EL PAQUETE VASCULONERVIOSAS DEL CUELLO, COLUMNA VERTEBRAL.
</title>
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

        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
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
            <h3>Contents</h3>
            <ul>
                <li><a href="#ANATOMIA DEL CUELLO">ANATOMIA DEL CUELLO</a></li>
                <li><a href="#REGIONES DEL CUELLO">REGIONES DEL CUELLO</a></li>
                <li><a href="#INERVACIÓN">INERVACIÓN</a></li>
                <li><a href="#REGIÓN HIOIDEA">REGIÓN HIOIDEA</a></li>
                <li><a href="#TRAQUEOTOMÍA">TRAQUEOTOMÍA</a></li>
                <li><a href="#Información Postoperatoria">Información Postoperatoria</a></li>
                <li><a href="#cuestionario">cuestionario</a></li>
            </ul>
        </nav>

        <!-- Right side (Main Content) -->
        <section id="practical-content">
            <div class="content">
                <h1>PRÁCTICA N° 9: 
REGIONES, ESTRUCTURAS Y EL PAQUETE VASCULONERVIOSAS DEL CUELLO, COLUMNA VERTEBRAL.
</h1>
                <h2 id = "ANATOMIA DEL CUELLO">ANATOMIA DEL CUELLO</h2>
                <p>El cuello es la región del cuerpo comprendida entre la cabeza y el tórax. Es un punto de transición entre la cabeza, el tórax y los miembros superiores. Es la vía de paso de elementos vasculares, viscerales y nerviosos. Su forma es cilíndrica. Posee un tallo osteoarticular: la columna cervical. Su morfología varía con la edad, sexo, obesidad, etc. Su longitud varia de un individuo a otro: 8 cm en el hombre y 7 cm en la mujer como término medio.</P>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\1.png" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\2.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\3.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <p>El cuello se continúa con el mediastino por su parte inferior, con la porción
anteroinferior de la cara por su parte anterosuperior y con regiones comunes a ambos como son la faringe y la región pterigomaxilar. Por esta razón sus límites profundos son poco definidos.
</P>
                <h2 id = "REGIONES DEL CUELLO">REGIONES DEL CUELLO</h2>
                <p>Topográficamente el cuello se divide en dos regiones:<br>
1-	POSTERIOR O NUCA<br>
2-	ANTERIOR: - Región Superficial o hioidea<br>
-	Región Profunda o prevertebral<br>
-	Regiones laterales
</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\4.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <p>MUSCULOS DEL CUELLO Aseguran el movimiento de la cabeza y el raquis cervical. Se clasifican en: • Músculos posteriores dorsales extensores (de la nuca) • Músculos laterales rotadores o flexores laterales • Músculos anteriores ventrales, prevertebrales o flexores (incluyen los músculos que se insertan en el hioides)</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\5.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "INERVACIÓN">INERVACIÓN</h3><br>
                <p>INERVACIÓN: cada músculo recibe una o varias ramas de las raíces posteriores de los nervios cervicales. . El plano profundo recibe el 1º y 2º nervios Cervicales (Nervio suboccipital de Arnold). El resto desde la 2º a 8º raíz cervical. VASCULARIZACION: Arteria Occipital que es rama de la Arteria Carótida Externa.</p>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\6.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\7.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\8.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\9.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <h3 id = "REGIÓN HIOIDEA"></h3>
                <p>REGIÓN HIOIDEA Región media, impar y simétrica. Ubicada en porción anterior del cuello. El hueso hioides la divide en dos regiones: la suprahioidea y la infrahioidea. REGION SUPRAHIOIDEA Región anterior y superior del cuello. Es un triángulo de base en el hioides y vértice en el mentón. Está oculto detrás de la mandíbula cuando la cabeza está en posición normal. Posee dos planos musculares, con dos músculos cada uno LIMITES DE LA REGIÓN SUPRAHIOIDEA</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\10.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\11.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <p>REGION INFRAHIOIDEA Región media e impar anterior e inferior del cuello. Es un triángulo de base en el hioides entre ambos esternocleidomastoideos y el hioides. Posee dos planos musculares, con dos músculos cada uno. Debajo de los músculos contiene: esófago cervical, faringe, laringe, tráquea cervical, glándula tiroides, glándulas paratiriodes.</p>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\12.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\13.jpg" alt="Fowler position" class="center">
                </div>
                <br>
                <div class="image-container">
                    <img src="Anatomy images\Prac9\14.jpg" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "TRAQUEOTOMÍA">TRAQUEOTOMÍA</h3>
                <p>La traqueotomía crea una nueva vía respiratoria al hacer una incisión en el cuello que llega a la tráquea. Un tubo de traqueotomía es colocado en la tráquea y el paciente respira por medio del tubo hasta que es removido. Esto se usa para crear una desviación y evitar cualquier inflamación o un bloqueo en la boca o garganta que prevendría la respiración, o si un paciente es intubado por un largo período de tiempo, o si un paciente necesita ayuda limpiando el moco de sus vías respiratorias y pulmones.
<br><br>Información Preoperatoria
</p>
                <ul>
                    <li>Todas las cirugías llevan riesgos que intentamos minimizar en la sala de cirugías. Una traqueotomía normalmente permanece en su lugar por AL MENOS 2 semanas.</li>
                    <li>El tubo de la traqueotomía que se coloca durante la cirugía normalmente tiene un "manguito", o un globo inflable que previene que el aire se mueva hacia arriba.</li>
                    <li>Los beneficios de una traqueotomía varían de acuerdo al paciente. En general, una traqueotomía permite que un paciente esté más cómodo en una máquina para respirar. Mejora la higiene de los pulmones y las vías respiratorias, previene las cicatrices en las vías respiratorias y actúa como un desvío de cualquier bloqueo en la boca o garganta que prevendría que el paciente fuera capaz de respirar.</li>
                </ul>

                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\15.png" alt="Fowler position" class="center">
                </div>
                <br>

                <h3 id = "Información Postoperatoria"></h3>

                <ul>
                    <li>Después de una traqueotomía, un paciente permanece en la Unidad de Cuidados Intensivos por al menos 24 horas para recibir monitoreo frecuente. Es importante que el aire que el paciente está respirando permanezca cálido y húmedo.</li>
                    <ul>
                        <li>SI un paciente no está usando una máquina ventiladora para la respiración, normalmente puede usar un tubo de traqueotomía sin manguito, lo que hace que hablar sea más fácil.</li>
                    </ul>
                </ul>

                <br>

                <div class="image-container">
                    <img src="Anatomy images\Prac9\16.png" alt="Fowler position" class="center">
                </div>
                <br>
                <h3 id = "cuestionario">cuestionario</h3>
                <div >
                    <form action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
                
                
            </div>
        </section>
    </div>
</body>
</html>
