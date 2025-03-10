<?php
include '../header.php';
$practical_number = "A4"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Anatomy Practical 4</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        h1 {
            text-align: center;
            margin-top: 50px;
        }

        ol {
            list-style-type: decimal;
            font-weight: bold;
        }

        ol li {
            font-weight: normal;
        }

        ol li::marker {
            font-weight: bold;
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
        .image-container {
            text-align: center;
            max-width: 100%;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        /* Sticky header for UMA logo */
        .practical-logo {
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 150px;
        }
        section {
            margin: 20px;
        }
        body {
            font-family: Arial, sans-serif; /* Update this if the PHP file specifies a custom font */
            margin: 0;
            padding: 0;
            background-color: #f9f9f9; /* Background color, customizable */
            color: #333;
        }
        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #f4f4f4;
            color: #fff;
            height: 100vh;
            overflow-y: auto;
            position: fixed;
            padding: 15px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }


        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #000000;
        }


        .sidebar a {
            color: #000000;
            text-decoration: none;
            display: block;
            margin: 8px 0;
            font-size: 14px;
        }
        .sidebar a:hover {
            color: #6462dc;
        }

        /* Main Content */
        .content {
            margin-left: 270px;
            padding: 20px;
        }


        .content h1 {
            font-size: 22px;
            margin-top: 20px;
        }

        .content p, .content ul {
            line-height: 1.6;
        }

        .content ul {
            padding-left: 20px;
            list-style-type: disc;
            margin-left: 20px;
        }

        .content section {
            margin-bottom: 30px;
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
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fffaf0;
        }
        .table-container {
            text-align: center;
            margin-left:2.5cm;
            margin-right: 2.5cm;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
   
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Contenido   </h2>
        <a href="#OBJETIVOS">Objetivos</a>
        <a href="#Sistema Digestivo">Sistema Digestivo</a>
        <a href="#Glándulas anexas">Glándulas anexas</a>
        <a href="#Cuestionario">Cuestionario</a>
        <a href="#SISTEMA URINARIO OBJETIVOS">Sistema Urinario Objetivos</a>
        
    </div>

    <!-- Main Content -->
    <div class="content">
        <header class="practical-header">
            <img src="../Images/logo_UMA.png" alt="UMA Logo" class="practical-logo" >
        </header>
        <section id="OBJETIVOS">
            <h1>PRÁCTICA N° 4: <br>ESTRUCTURAS DEL APARATO DIGESTIVO Y URINARIO</h1>
            <h3 id="objectives"><strong>1. OBJETIVOS</strong></h3>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema digestivo y topografía 
                    abdominal.</li>
                <li>Relacionar las regiones del cuerpo Sistema digestivo y topografía 
                    abdominal y patologías relacionadas.
                    </li><br>
            </ul>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\1.jpg" alt="1" class="1-image" style="width: 600px;">
            </div><br><br><br>
        
            <div class="image-container">
                <img src="Anatomy images\Practical 4\2.jpg" alt="2" class="2-image" style="width: 600px;">
            </div>

            <section id="example-table">
                
                <table class="table-container">
                    <tr>
                        <th>Hipocondrio Derecho</th>
                        <th>Regi&oacute;n Epig&aacute;strica</th>
                        <th>Hipocondrio Izquierdo</th>
                    </tr>
                    <tr>
                        <td>
                            H&iacute;gado <strong>(l&oacute;bulo derecho)</strong><br>
                            Ves&iacute;cula biliar<br>
                            Ri&ntilde;&oacute;n derecho<br>
                            Gl&aacute;ndula suprarrenal<br>
                            Colon<strong>(&aacute;ngulo derecho)</strong>
                        </td>
                        <td>
                            H&iacute;gado<strong> (l&oacute;bulo izquierdo)</strong><br>
                            Est&oacute;mago curvatura menor<br>
                            <strong>(cuerpo y p&iacute;loro)</strong><br>
                            P&aacute;ncreas <strong>(cabeza y cuerpo)</strong><br>
                            Duodeno <strong>(porciones 1 y 4)</strong><br>
                            Aorta abdominal<br>
                            Vena cava inferior<br>
                            Tronco cel&iacute;aco
                        </td>
                        <td>
                            Bazo<br>
                            Est&oacute;mago <strong>(fundus y cuerpo)</strong><br>
                            H&iacute;gado<strong> (l&oacute;bulo izquierdo)</strong><br>
                            P&aacute;ncreas <strong>(cola)</strong><br>
                            Ri&ntilde;&oacute;n izquierdo<br>
                            Gl&aacute;ndula suprarrenal<br>
                            Colon <strong>(&aacute;ngulo izquierdo)</strong>
                        </td>
                    </tr>
                    <tr>
                        <th>Flanco Derecho</th>
                        <th>Regi&oacute;n Umbilical</th>
                        <th>Flanco Izquierdo</th>
                    </tr>
                    <tr>
                        <td>
                            Colon ascendente<br>
                            Ri&ntilde;&oacute;n derecho <strong>(polo inferior)</strong><br>
                            Parte de Duodeno y Yeyuno
                        </td>
                        <td>
                            Colon transverso<br>
                            P&aacute;ncreas (cabeza)<br>
                            Duodeno <strong>(porciones 2, 3, 4)</strong><br>
                            Yeyuno<br>
                            Mesenterio<br>
                            Aorta abdominal<br>
                            Vena cava inferior<br>
                            Ur&eacute;teres <strong>(parte superior)</strong><br>
                            Pelvis renal
                        </td>
                        <td>
                            Colon descendente<br>
                            Ri&ntilde;&oacute;n izquierdo <strong>(polo inferior)</strong><br>
                            Yeyuno e Ileon<br>
                            Ur&eacute;teres
                        </td>
                    </tr>
                    <tr>
                        <th>Fosa Il&iacute;aca Derecha</th>
                        <th>Regi&oacute;n Hipog&aacute;strica</th>
                        <th>Fosa Il&iacute;aca Izquierda</th>
                    </tr>
                    <tr>
                        <td>
                            Ciego<br>
                            Ap&eacute;ndice<br>
                            Ileon<br>
                            Ovario derecho<br>
                            Cord&oacute;n esperm&aacute;tico derecho
                        </td>
                        <td>
                            Ur&eacute;teres <strong>(parte terminal)</strong><br>
                            Colon sigmoide<br>
                            Vejiga<br>
                            &Uacute;tero y vagina<br>
                            Pr&oacute;stata<br>
                            Recto
                        </td>
                        <td>
                            Colon sigmoideo<br>
                            Ovario izquierdo<br>
                            Cord&oacute;n esperm&aacute;tico izquierdo
                        </td>
                    </tr>
                </table>
            </section>

            <p>El aparato digestivo está formado por el tracto gastrointestinal, también 
                llamadotracto digestivo, y el hígado, el páncreas y la vesícula biliar. El tracto 
                gastrointestinal es una serie de órganos huecos unidos en un tubo largo y retorcido
                que va desde la boca hasta el ano. Los órganos huecos que componen el tracto 
                gastrointestinal son la boca, el esófago, el estómago, el intestino delgado, el 
                intestino grueso y el ano. El hígado, el páncreas y la vesícula biliar son los órganos 
                sólidos del aparato digestivo.</p>
                
            <p>El intestino delgado tiene tres partes. La primera parte se llama duodeno. El yeyuno 
                está en el medio y el íleon está al final. El intestino grueso incluye el apéndice, el
                ciego, el colon y el recto. El apéndice es una bolsita con forma de dedo unida al ciego.
                El ciego es la primera parte del intestino grueso. El colon es el siguiente. El recto es 
                el final del intestino grueso.
                </p>

            <p>Las bacterias en el tracto gastrointestinal, también llamadas flora intestinal o microbiota, ayudan con la digestión. Partes de los 
                sistemas nerviosos ycirculatorios también ayudan. Trabajando juntos, los nervios,
                las hormonas, las bacterias, la sangre y los órganos delaparato digestivo digieren 
                los alimentos y líquidos que una persona come o bebe cada día.</p><br><br>

            <div class="image-container">
                <img src="Anatomy images\Practical 4\3.jpg" alt="3" class="3-image" style="width: 600px;">
            </div><br><br>

            <p>La digestión es importante porque el cuerpo necesita los nutrientes provenientes de
                los alimentos y bebidas para funcionar correctamente y mantenerse sano. Las 
                proteínas, las grasas, los carbohidratos, las vitaminas Enlace externo del NIH, los 
                minerales Enlace externo del NIH y el agua son nutrientes. El aparato digestivo 
                descompone químicamente los nutrientes en partes lo suficientemente pequeñas 
                como para que el cuerpo pueda absorber los nutrientes y usarlos para la energía, 
                crecimiento y reparación de las células.
                </p>

            <p>Las proteínas se descomponen químicamente en aminoácidos
                Las grasas se descomponen químicamente en ácidos grasos y glicerol Los 
                carbohidratos se descomponen químicamente en azúcares simples
                </p>
            <h1 id="Sistema Digestivo">Tabla del Sistema Digestivo</h1>
            <table class="table-container">
                <thead>
                    <tr>
                        <th>&Oacute;rgano</th>
                        <th>Movimiento</th>
                        <th>Jugos digestivos que son a&ntilde;adidos</th>
                        <th>Part&iacute;culas de alimentos que son descompuestos qu&iacute;micamente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Boca</td>
                        <td>Masticar</td>
                        <td>Saliva</td>
                        <td>Almidones, un tipo de carbohidrato</td>
                    </tr>
                    <tr>
                        <td>Es&oacute;fago</td>
                        <td>Peristalsis</td>
                        <td>Ninguno</td>
                        <td>Ninguno</td>
                    </tr>
                    <tr>
                        <td>Est&oacute;mago</td>
                        <td>El m&uacute;sculo superior en el est&oacute;mago se relaja para permitir la entrada de los alimentos y el m&uacute;sculo inferior mezcla los alimentos con el jugo digestivo</td>
                        <td>&Aacute;cido estomacal y enzimas digestivas</td>
                        <td>Prote&iacute;nas</td>
                    </tr>
                    <tr>
                        <td>Intestino delgado</td>
                        <td>Peristalsis</td>
                        <td>Jugo digestivo del intestino delgado</td>
                        <td>Harinas, prote&iacute;nas y carbohidratos</td>
                    </tr>
                    <tr>
                        <td>P&aacute;ncreas</td>
                        <td>Ninguno</td>
                        <td>Jugo pancre&aacute;tico</td>
                        <td>Carbohidratos, grasas y prote&iacute;nas</td>
                    </tr>
                    <tr>
                        <td>H&iacute;gado</td>
                        <td>Ninguno</td>
                        <td>Bilis</td>
                        <td>Grasas</td>
                    </tr>
                    <tr>
                        <td>Intestino grueso</td>
                        <td>Peristalsis</td>
                        <td>Ninguno</td>
                        <td>Las bacterias en el intestino grueso tambi&eacute;n pueden descomponer qu&iacute;micamente los alimentos</td>
                    </tr>
                </tbody>
            </table><br><br>

             <div class="image-container">
                <img src="Anatomy images\Practical 4\4.jpg" alt="4" class="4-image" style="width: 600px;">
            </div><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\5.jpg" alt="5" class="5-image" style="width: 600px;">
            </div>
            <h2 id="Glándulas anexas"><strong>Glándulas anexas</strong></h2>
            <ul>
                <li><strong>ándulas salivares.</strong> Segregan la saliva a la cavidad bucal. La 
                    saliva tiene una función digestiva y de protección de la cavidad 
                    bucal. Asimismo, facilita el proceso de masticación y deglución 
                    de los alimentos.</li>
                <li><strong>Hígado.</strong> la víscera más voluminosa del organismo. Está 
                    ubicado debajo del diafragma en la parte derecha de la zona 
                    abdominal. Sus funciones principales son:
                </li><br>
            </ul>
            <p>Secretora. Producción de bilis y su evacuación hacia el intestino delgadoa través 
                del conducto hepático.</p>
            <p>Metabólica. Participa de forma directa en el metabolismo de los hidratos decarbono, 
                las grasas y las proteínas procedentes de la absorción intestinal de los alimentos 
                digeridos.</p>
            <p>De desintoxicación. Tiene la capacidad para transformar en inocuas las 
                sustancias perjudiciales o tóxicas para el organismo.</p>
            <p><strong>De depósito:</strong> Almacena sustancias de alto poder energético.</p>
            <ul>
                <li><strong>Vesícula biliar:</strong> Glándula en forma de saco, situada en la cara 
                    inferior del hígado. Actúa como depósito: almacena y concentrala bilis producida por el 
                    hígado y la mantiene dispuesta para su evacuación al duodeno en el momento 
                    necesario.</li>
                <li><strong>Páncreas:</strong> Glándula de forma alargada situada transversalmente 
                    en la parte posterior de la cavidad abdominal. Desempeña dos 
                    funciones principales:
                    <ul>
                        <li> De carácter <strong> exocrino:</strong> segrega el <strong>jugo pancreático </strong>
                            que se libera al duodeno e interviene en ladigestión de los alimentos.</li>
                        <li>De carácter<strong> endocrino:</strong> produce <strong>hormonas</strong> que se 
                            vierten directamente a la sangre, la más importante es la 
                            insulina, que regula la cantidad de glucosa dela sangre.
                        </li><br>
                    </ul>
                </li><br>
            </ul>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\6.jpg" alt="6" class="6-image" style="width: 600px;">
            </div>
            <h2 id="Cuestionario">Cuestionario</h2>
           
                
                <div>
                    <form  action="../questionnaire.php" method="GET">
                        <!-- Pass the practical number as a GET parameter -->
                        <input type="hidden" name="practical_number" value="<?php echo htmlspecialchars($practical_number); ?>">
                        <button type="submit" class="styled-button">Ir al cuestionario</button>
                    </form>
                </div>
        </section>

        <section id="SISTEMA URINARIO OBJETIVOS">
            <h1>SISTEMA URINARIO</h1>
            <h3><strong>1. OBJETIVOS</strong></h3>
            <ul>
                <li>Conocer las Regiones del cuerpo Sistema urinario.</li>
                <li>Relacionar las regiones del cuerpo Sistema urinario 
                    y patologías relacionadas.                    
                </li><br>
            </ul>
            <p>Conjunto de órganos que producen y eliminan la orina del cuerpo. El sistema urinario 
                se divide en dos partes: el sistema urinario superior incluye los riñones y los uréteres 
                (vías urinarias altas), y el sistema urinario inferior incluye la vejiga y la uretra (vías 
                urinarias bajas)</p>

            <div class="image-container">
                <img src="Anatomy images\Practical 4\7.jpg" alt="7" class="7-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\8.jpg" alt="8" class="8-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\9.jpg" alt="9" class="9-image" style="width: 600px;">
            </div><br><br><br><br>
            <div class="image-container">
                <img src="Anatomy images\Practical 4\10.jpg" alt="10" class="10-image" style="width: 600px;">
            </div>

       
            
        </section>

      
                
                
    </div>
</body>
</html>