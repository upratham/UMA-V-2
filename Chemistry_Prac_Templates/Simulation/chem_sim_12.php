<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Preparación de Soluciones Paso a Paso</title>
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
        select, input, textarea, button {
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

        <h1 id="title">Simulador de Preparación de Soluciones Paso a Paso</h1>
        <p id="description">Seleccione un tipo de concentración y proporcione los parámetros necesarios para calcular la solución.</p>

        <form method="POST" action="">
            <label for="concentration_type" id="concentration_label">Seleccione el Tipo de Concentración</label>
            <select id="concentration_type" name="concentration_type" required>
                <option value="Molarity (M)">Molaridad (M)</option>
                <option value="Normality (N)">Normalidad (N)</option>
                <option value="Mass/Volume Percentage (% m/v)">Porcentaje Masa/Volumen (% m/v)</option>
            </select>

            <label for="solute_mass" id="solute_mass_label">Masa del Soluto (g)</label>
            <input type="number" id="solute_mass" name="solute_mass" value="0" step="any" required>

            <label for="solution_volume" id="solution_volume_label">Volumen de la Solución (mL)</label>
            <input type="number" id="solution_volume" name="solution_volume" value="0" step="any" required>

            <label for="solute_molar_mass" id="solute_molar_mass_label">Masa Molar del Soluto (g/mol)</label>
            <input type="number" id="solute_molar_mass" name="solute_molar_mass" value="0" step="any" required>

            <button type="submit" name="calculate" id="calculateBtn">Calcular Solución</button>
        </form>

        <?php
        function calculate_solution($concentration_type, $solute_mass, $solution_volume, $solute_molar_mass) {
            $steps_history = "";

            if ($concentration_type == "Molarity (M)") {
                if ($solute_molar_mass <= 0) return "Error: Masa molar inválida.";
                $moles_of_solute = $solute_mass / $solute_molar_mass;
                $molarity = $moles_of_solute / ($solution_volume / 1000);
                $steps_history .= "Paso 1: Calcular los moles de soluto:\n";
                $steps_history .= "Moles de soluto = {$solute_mass} g / {$solute_molar_mass} g/mol = " . number_format($moles_of_solute, 4) . " mol\n";
                $steps_history .= "Paso 2: Calcular la molaridad:\n";
                $steps_history .= "Molaridad (M) = " . number_format($moles_of_solute, 4) . " mol / ({$solution_volume} mL / 1000) = " . number_format($molarity, 4) . " M\n";
                return ["La molaridad de la solución es " . number_format($molarity, 4) . " M", $steps_history];
            }

            if ($concentration_type == "Normality (N)") {
                if ($solute_molar_mass <= 0) return "Error: Masa molar inválida.";
                $eq_weight = $solute_molar_mass; // Assuming monovalent
                $equivalents = $solute_mass / $eq_weight;
                $normality = $equivalents / ($solution_volume / 1000);
                $steps_history .= "Paso 1: Calcular los equivalentes de soluto:\n";
                $steps_history .= "Equivalentes = {$solute_mass} g / {$eq_weight} g/eq = " . number_format($equivalents, 4) . " eq\n";
                $steps_history .= "Paso 2: Calcular la normalidad:\n";
                $steps_history .= "Normalidad (N) = " . number_format($equivalents, 4) . " eq / ({$solution_volume} mL / 1000) = " . number_format($normality, 4) . " N\n";
                return ["La normalidad de la solución es " . number_format($normality, 4) . " N", $steps_history];
            }

            if ($concentration_type == "Mass/Volume Percentage (% m/v)") {
                $percentage_m_v = ($solute_mass / $solution_volume) * 100;
                $steps_history .= "Paso 1: Calcular el porcentaje masa/volumen:\n";
                $steps_history .= "Porcentaje (% m/v) = ({$solute_mass} g / {$solution_volume} mL) * 100 = " . number_format($percentage_m_v, 2) . " %\n";
                return ["El porcentaje masa/volumen de la solución es " . number_format($percentage_m_v, 2) . " %", $steps_history];
            }

            return ["Tipo de concentración inválido seleccionado.", $steps_history];
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
            $concentration_type = $_POST['concentration_type'];
            $solute_mass = floatval($_POST['solute_mass']);
            $solution_volume = floatval($_POST['solution_volume']);
            $solute_molar_mass = floatval($_POST['solute_molar_mass']);

            [$result, $steps] = calculate_solution($concentration_type, $solute_mass, $solution_volume, $solute_molar_mass);
            echo "<div class='result'><strong>Resultado:</strong><br>$result</div>";
            echo "<div class='result'><strong>Paso a Paso:</strong><br><pre>$steps</pre></div>";
        }
        ?>
    </div>

    <script>
        let isSpanish = true;

        function toggleLanguage() {
            isSpanish = !isSpanish;

            document.getElementById('translateBtn').textContent = isSpanish ? "Cambiar a Inglés" : "Switch to Spanish";
            document.getElementById('title').textContent = isSpanish 
                ? "Simulador de Preparación de Soluciones Paso a Paso" 
                : "Step-by-Step Solution Preparation Simulator";
            document.getElementById('concentration_label').textContent = isSpanish
                ? "Seleccione el Tipo de Concentración"
                : "Select Concentration Type";
            document.getElementById('solute_mass_label').textContent = isSpanish
                ? "Masa del Soluto (g)"
                : "Mass of Solute (g)";
            document.getElementById('solution_volume_label').textContent = isSpanish
                ? "Volumen de la Solución (mL)"
                : "Volume of Solution (mL)";
            document.getElementById('solute_molar_mass_label').textContent = isSpanish
                ? "Masa Molar del Soluto (g/mol)"
                : "Molar Mass of Solute (g/mol)";
            document.getElementById('calculateBtn').textContent = isSpanish
                ? "Calcular Solución"
                : "Calculate Solution";

            const concentrationDropdown = document.getElementById('concentration_type');
            concentrationDropdown.options[0].text = isSpanish ? "Molaridad (M)" : "Molarity (M)";
            concentrationDropdown.options[1].text = isSpanish ? "Normalidad (N)" : "Normality (N)";
            concentrationDropdown.options[2].text = isSpanish ? "Porcentaje Masa/Volumen (% m/v)" : "Mass/Volume Percentage (% m/v)";
        }
    </script>
</body>
</html>
