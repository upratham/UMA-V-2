<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Reacción Química</title>
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
        select, input, textarea, button, .radio-group {
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

        <h1 id="title">Simulador de Reacción Química</h1>
        <p id="description">Simule las reacciones de combustión de magnesio en oxígeno y su disolución en agua con los valores de entrada proporcionados.</p>

        <form method="POST" action="">
            <label id="step_label">Seleccione un Paso para Simular</label>
            <div class="radio-group">
                <input type="radio" id="step1" name="step" value="Burn Magnesium" checked>
                <label for="step1" id="step1_label">Quemar Magnesio</label><br>
                <input type="radio" id="step2" name="step" value="Dissolve in Water">
                <label for="step2" id="step2_label">Disolver en Agua</label><br>
                <input type="radio" id="step3" name="step" value="Test with Phenolphthalein">
                <label for="step3" id="step3_label">Probar con Fenolftaleína</label>
            </div>

            <label for="magnesium_mass" id="magnesium_mass_label">Masa de Magnesio (en gramos)</label>
            <input type="number" id="magnesium_mass" name="magnesium_mass" value="1.0" step="any" required>

            <label for="water_volume" id="water_volume_label">Volumen de Agua (en mL)</label>
            <input type="number" id="water_volume" name="water_volume" value="10.0" step="any" required>

            <button type="submit" name="simulate" id="simulateBtn">Simular Reacción</button>
        </form>

        <?php
        function simulate_reaction($step, $magnesium_mass, $water_volume) {
            if ($step == "Burn Magnesium") {
                $magnesium_oxide_mass = ($magnesium_mass * 40.3) / 24.3;
                return "Paso 1: Quemar Magnesio<br>
                        El magnesio (Mg) se quema en oxígeno (O₂) para formar óxido de magnesio (MgO).<br>
                        Reacción: 2Mg + O₂ → 2MgO<br>
                        Magnesio usado: {$magnesium_mass} g<br>
                        Óxido de magnesio formado: " . number_format($magnesium_oxide_mass, 2) . " g";
            } elseif ($step == "Dissolve in Water") {
                $magnesium_oxide_mass = ($magnesium_mass * 40.3) / 24.3;
                $magnesium_hydroxide_mass = $magnesium_oxide_mass + ($water_volume * 0.018);
                return "Paso 2: Disolver Óxido de Magnesio en Agua<br>
                        El óxido de magnesio (MgO) reacciona con agua (H₂O) para formar hidróxido de magnesio [Mg(OH)₂].<br>
                        Reacción: MgO + H₂O → Mg(OH)₂<br>
                        Agua usada: {$water_volume} ml<br>
                        Hidróxido de magnesio formado: " . number_format($magnesium_hydroxide_mass, 2) . " g";
            } elseif ($step == "Test with Phenolphthalein") {
                return "Paso 3: Probar con Fenolftaleína<br>
                        La fenolftaleína se torna rosa, indicando que la solución es básica debido a la formación de hidróxido de magnesio [Mg(OH)₂].";
            } else {
                return "Seleccione un paso válido.";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simulate'])) {
            $step = $_POST['step'];
            $magnesium_mass = floatval($_POST['magnesium_mass']);
            $water_volume = floatval($_POST['water_volume']);

            $result = simulate_reaction($step, $magnesium_mass, $water_volume);
            echo "<div class='result'><strong>Resultado:</strong><br>$result</div>";
        }
        ?>
    </div>

    <script>
        let isSpanish = true;

        function toggleLanguage() {
            isSpanish = !isSpanish;

            document.getElementById('translateBtn').textContent = isSpanish ? "Cambiar a Inglés" : "Switch to Spanish";
            document.getElementById('title').textContent = isSpanish
                ? "Simulador de Reacción Química"
                : "Chemical Reaction Simulation";
            document.getElementById('description').textContent = isSpanish
                ? "Simule las reacciones de combustión de magnesio en oxígeno y su disolución en agua con los valores de entrada proporcionados."
                : "Simulate the reactions involving Magnesium burning in oxygen and dissolving in water with input amounts.";
            document.getElementById('step_label').textContent = isSpanish
                ? "Seleccione un Paso para Simular"
                : "Select a Step to Simulate";
            document.getElementById('step1_label').textContent = isSpanish
                ? "Quemar Magnesio"
                : "Burn Magnesium";
            document.getElementById('step2_label').textContent = isSpanish
                ? "Disolver en Agua"
                : "Dissolve in Water";
            document.getElementById('step3_label').textContent = isSpanish
                ? "Probar con Fenolftaleína"
                : "Test with Phenolphthalein";
            document.getElementById('magnesium_mass_label').textContent = isSpanish
                ? "Masa de Magnesio (en gramos)"
                : "Magnesium Mass (in grams)";
            document.getElementById('water_volume_label').textContent = isSpanish
                ? "Volumen de Agua (en mL)"
                : "Water Volume (in ml)";
            document.getElementById('simulateBtn').textContent = isSpanish
                ? "Simular Reacción"
                : "Simulate Reaction";
        }
    </script>
</body>
</html>
