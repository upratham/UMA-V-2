<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Estequiometría Paso a Paso</title>
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

        <h1 id="title">Simulador de Reacciones Estequiométricas Paso a Paso</h1>
        <p id="description">Seleccione una reacción de precipitación y proporcione los parámetros necesarios para realizar los cálculos estequiométricos.</p>

        <form method="POST" action="">
            <label for="reaction" id="reaction_label">Seleccione una Reacción</label>
            <select id="reaction" name="reaction" required>
                <option value="K₂CrO₄ + Pb(NO₃)₂ → PbCrO₄ + 2KNO₃">K₂CrO₄ + Pb(NO₃)₂ → PbCrO₄ + 2KNO₃</option>
                <option value="NaOH + NiSO₄ → Ni(OH)₂ + Na₂SO₄">NaOH + NiSO₄ → Ni(OH)₂ + Na₂SO₄</option>
                <option value="NaOH + FeCl₃ → Fe(OH)₃ + NaCl">NaOH + FeCl₃ → Fe(OH)₃ + NaCl</option>
                <option value="KI + Pb(NO₃)₂ → PbI₂ + KNO₃">KI + Pb(NO₃)₂ → PbI₂ + KNO₃</option>
            </select>

            <label for="volume_A" id="volume_A_label">Volumen del Reactivo A (mL)</label>
            <input type="number" id="volume_A" name="volume_A" value="0" step="any" required>

            <label for="concentration_A" id="concentration_A_label">Concentración del Reactivo A (M)</label>
            <input type="number" id="concentration_A" name="concentration_A" value="0" step="any" required>

            <label for="volume_B" id="volume_B_label">Volumen del Reactivo B (mL)</label>
            <input type="number" id="volume_B" name="volume_B" value="0" step="any" required>

            <label for="concentration_B" id="concentration_B_label">Concentración del Reactivo B (M)</label>
            <input type="number" id="concentration_B" name="concentration_B" value="0" step="any" required>

            <button type="submit" name="simulate" id="simulateBtn">Calcular Estequiometría</button>
        </form>

        <?php
        $reactions_data = [
            "K₂CrO₄ + Pb(NO₃)₂ → PbCrO₄ + 2KNO₃" => [
                "reagents" => ["K₂CrO₄" => 1, "Pb(NO₃)₂" => 1],
                "products" => ["PbCrO₄" => 1, "KNO₃" => 2],
                "molar_masses" => ["K₂CrO₄" => 194.2, "Pb(NO₃)₂" => 331.2, "PbCrO₄" => 323.2]
            ],
            "NaOH + NiSO₄ → Ni(OH)₂ + Na₂SO₄" => [
                "reagents" => ["NaOH" => 2, "NiSO₄" => 1],
                "products" => ["Ni(OH)₂" => 1, "Na₂SO₄" => 1],
                "molar_masses" => ["NaOH" => 40.0, "NiSO₄" => 154.75, "Ni(OH)₂" => 92.71]
            ],
            "NaOH + FeCl₃ → Fe(OH)₃ + NaCl" => [
                "reagents" => ["NaOH" => 3, "FeCl₃" => 1],
                "products" => ["Fe(OH)₃" => 1, "NaCl" => 3],
                "molar_masses" => ["NaOH" => 40.0, "FeCl₃" => 162.2, "Fe(OH)₃" => 106.87]
            ],
            "KI + Pb(NO₃)₂ → PbI₂ + KNO₃" => [
                "reagents" => ["KI" => 2, "Pb(NO₃)₂" => 1],
                "products" => ["PbI₂" => 1, "KNO₃" => 2],
                "molar_masses" => ["KI" => 166.0, "Pb(NO₃)₂" => 331.2, "PbI₂" => 461.0]
            ]
        ];

        function calculate_stoichiometry($reaction, $volume_A, $concentration_A, $volume_B, $concentration_B) {
            global $reactions_data;

            $reaction_data = $reactions_data[$reaction] ?? null;
            if (!$reaction_data) {
                return "Reacción inválida seleccionada.";
            }

            // Moles of Reagents
            $moles_A = ($volume_A * $concentration_A) / 1000;
            $moles_B = ($volume_B * $concentration_B) / 1000;

            // Stoichiometric Coefficients
            $coef_A = $reaction_data["reagents"][array_keys($reaction_data["reagents"])[0]];
            $coef_B = $reaction_data["reagents"][array_keys($reaction_data["reagents"])[1]];

            // Limiting Reagent
            $limiting_moles = min($moles_A / $coef_A, $moles_B / $coef_B);

            // Theoretical Yield
            $product_coef = array_values($reaction_data["products"])[0];
            $molar_mass_product = array_values($reaction_data["molar_masses"])[2];
            $theoretical_yield = $limiting_moles * $product_coef * $molar_mass_product;

            return "Reactivo limitante: Reactivo " . ($moles_A / $coef_A < $moles_B / $coef_B ? "A" : "B") .
                "<br>Rendimiento Teórico: " . number_format($theoretical_yield, 2) . " g";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simulate'])) {
            $reaction = $_POST['reaction'];
            $volume_A = floatval($_POST['volume_A']);
            $concentration_A = floatval($_POST['concentration_A']);
            $volume_B = floatval($_POST['volume_B']);
            $concentration_B = floatval($_POST['concentration_B']);

            $result = calculate_stoichiometry($reaction, $volume_A, $concentration_A, $volume_B, $concentration_B);
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
                ? "Simulador de Reacciones Estequiométricas Paso a Paso" 
                : "Step-by-Step Stoichiometry Reaction Simulator";
            document.getElementById('reaction_label').textContent = isSpanish
                ? "Seleccione una Reacción"
                : "Select a Reaction";
            document.getElementById('volume_A_label').textContent = isSpanish
                ? "Volumen del Reactivo A (mL)"
                : "Volume of Reagent A (mL)";
            document.getElementById('concentration_A_label').textContent = isSpanish
                ? "Concentración del Reactivo A (M)"
                : "Concentration of Reagent A (M)";
            document.getElementById('volume_B_label').textContent = isSpanish
                ? "Volumen del Reactivo B (mL)"
                : "Volume of Reagent B (mL)";
            document.getElementById('concentration_B_label').textContent = isSpanish
                ? "Concentración del Reactivo B (M)"
                : "Concentration of Reagent B (M)";
            document.getElementById('simulateBtn').textContent = isSpanish
                ? "Calcular Estequiometría"
                : "Calculate Stoichiometry";

            const reactionDropdown = document.getElementById('reaction');
            reactionDropdown.options[0].text = isSpanish ? "K₂CrO₄ + Pb(NO₃)₂ → PbCrO₄ + 2KNO₃" : "K₂CrO₄ + Pb(NO₃)₂ → PbCrO₄ + 2KNO₃";
            reactionDropdown.options[1].text = isSpanish ? "NaOH + NiSO₄ → Ni(OH)₂ + Na₂SO₄" : "NaOH + NiSO₄ → Ni(OH)₂ + Na₂SO₄";
            reactionDropdown.options[2].text = isSpanish ? "NaOH + FeCl₃ → Fe(OH)₃ + NaCl" : "NaOH + FeCl₃ → Fe(OH)₃ + NaCl";
            reactionDropdown.options[3].text = isSpanish ? "KI + Pb(NO₃)₂ → PbI₂ + KNO₃" : "KI + Pb(NO₃)₂ → PbI₂ + KNO₃";
        }
    </script>
</body>
</html>
