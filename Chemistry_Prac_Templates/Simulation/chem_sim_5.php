<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación Integral de Experimentos de Química</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        select, input, button, .slider-container {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .translate-btn {
            background: #ff9800;
            margin-bottom: 20px;
        }
        .translate-btn:hover {
            background: #e68900;
        }
        .result {
            padding: 10px;
            margin-top: 20px;
            border: 1px solid #b6e0b6;
            border-radius: 4px;
            background: #e7f4e8;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="translate-btn" id="translateBtn" onclick="toggleLanguage()">Cambiar a Inglés</button>

        <h1 id="title">Simulación Integral de Experimentos de Química</h1>
        <p id="description">Seleccione un experimento y proporcione los parámetros necesarios para observar los resultados.</p>

        <form method="POST" action="">
            <label for="experiment" id="experiment_label">Seleccione un Experimento</label>
            <select id="experiment" name="experiment" required>
                <option value="Density Calculation">Cálculo de Densidad</option>
                <option value="Iodine Sublimation">Sublimación de Yodo</option>
                <option value="Change Identification">Identificación de Cambios</option>
            </select>

            <label for="mass" id="mass_label">Masa (g)</label>
            <input type="number" id="mass" name="mass" value="0" step="any" required>

            <label for="volume" id="volume_label">Volumen (cm³)</label>
            <input type="number" id="volume" name="volume" value="0" step="any" required>

            <label for="temperature" id="temperature_label">Temperatura (°C)</label>
            <input type="range" id="temperature" name="temperature" min="20" max="150" value="25" oninput="updateSliderValue(this.value)">
            <span id="slider_value">25</span>°C

            <label id="change_label">Tipo de Cambio</label>
            <div>
                <input type="radio" id="physical" name="change_type" value="Physical" checked>
                <label for="physical" id="physical_label">Físico</label>
                <input type="radio" id="chemical" name="change_type" value="Chemical">
                <label for="chemical" id="chemical_label">Químico</label>
            </div>

            <button type="submit" name="simulate" id="simulateBtn">Simular</button>
        </form>

        <?php
        function calculate_density($mass, $volume) {
            if ($volume <= 0) {
                return "Error: El volumen debe ser mayor que cero.";
            }
            $density = $mass / $volume;
            return "Densidad: " . number_format($density, 3) . " g/cm³";
        }

        function iodine_state($temperature) {
            $sublimation_point = 113;
            if ($temperature >= $sublimation_point) {
                return "A $temperature,°C el yodo está en estado Gaseoso (sublimado).";
            } else {
                return "A $temperature,°C el yodo está en estado Sólido.";
            }
        }

        function identify_change($type_of_change) {
            if ($type_of_change == "Physical") {
                return "No se forman nuevas sustancias (p.ej., sublimación de yodo).";
            } elseif ($type_of_change == "Chemical") {
                return "Se forman nuevas sustancias (p.ej., reacción del magnesio con HCl).";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simulate'])) {
            $experiment = $_POST['experiment'];
            $mass = $_POST['mass'];
            $volume = $_POST['volume'];
            $temperature = $_POST['temperature'];
            $change_type = $_POST['change_type'];

            if ($experiment == "Density Calculation") {
                $result = calculate_density($mass, $volume);
            } elseif ($experiment == "Iodine Sublimation") {
                $result = iodine_state($temperature);
            } elseif ($experiment == "Change Identification") {
                $result = identify_change($change_type);
            } else {
                $result = "Por favor, seleccione un experimento válido.";
            }

            echo "<div class='result'><strong>Resultado:</strong> $result</div>";
        }
        ?>
    </div>

    <script>
        function updateSliderValue(value) {
            document.getElementById('slider_value').textContent = value;
        }

        let isSpanish = true;

        function toggleLanguage() {
            isSpanish = !isSpanish;

            document.getElementById('translateBtn').textContent = isSpanish ? "Cambiar a Inglés" : "Switch to Spanish";
            document.getElementById('title').textContent = isSpanish 
                ? "Simulación Integral de Experimentos de Química" 
                : "Comprehensive Chemistry Experiments Simulation";
            document.getElementById('experiment_label').textContent = isSpanish
                ? "Seleccione un Experimento"
                : "Select an Experiment";
            document.getElementById('mass_label').textContent = isSpanish
                ? "Masa (g)"
                : "Mass (g)";
            document.getElementById('volume_label').textContent = isSpanish
                ? "Volumen (cm³)"
                : "Volume (cm³)";
            document.getElementById('temperature_label').textContent = isSpanish
                ? "Temperatura (°C)"
                : "Temperature (°C)";
            document.getElementById('change_label').textContent = isSpanish
                ? "Tipo de Cambio"
                : "Type of Change";
            document.getElementById('physical_label').textContent = isSpanish
                ? "Físico"
                : "Physical";
            document.getElementById('chemical_label').textContent = isSpanish
                ? "Químico"
                : "Chemical";
            document.getElementById('simulateBtn').textContent = isSpanish
                ? "Simular"
                : "Simulate";

            const experimentDropdown = document.getElementById('experiment');
            experimentDropdown.options[0].text = isSpanish ? "Cálculo de Densidad" : "Density Calculation";
            experimentDropdown.options[1].text = isSpanish ? "Sublimación de Yodo" : "Iodine Sublimation";
            experimentDropdown.options[2].text = isSpanish ? "Identificación de Cambios" : "Change Identification";
        }
    </script>
</body>
</html>
