<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Reacciones Químicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
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
        select, textarea, button {
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

        <h1 id="title">Simulador de Reacciones Químicas</h1>
        <p id="description">Seleccione un tipo de reacción química para simularla y ver los detalles de la ecuación, descripción y observaciones.</p>

        <form method="POST" action="">
            <label for="reaction_type" id="reaction_label">Seleccione un Tipo de Reacción</label>
            <select id="reaction_type" name="reaction_type" required>
                <option value="Combination Reaction (Synthesis)">Reacción de Combinación (Síntesis)</option>
                <option value="Decomposition Reaction">Reacción de Descomposición</option>
                <option value="Displacement Reaction">Reacción de Desplazamiento</option>
                <option value="Double Displacement Reaction (Precipitation)">Reacción de Doble Desplazamiento (Precipitación)</option>
                <option value="Oxidation-Reduction Reaction (Redox)">Reacción de Oxidación-Reducción (Redox)</option>
            </select>

            <button type="submit" name="simulate" id="simulateBtn">Simular Reacción</button>
        </form>

        <?php
        // Database for chemical reactions
        $reactions_data = [
            "Combination Reaction (Synthesis)" => [
                "equation" => "2Mg + O₂ → 2MgO",
                "description" => "El magnesio reacciona con oxígeno para formar óxido de magnesio. Esta es una reacción de combinación donde dos sustancias se combinan para formar un nuevo compuesto.",
                "observations" => "Luz blanca brillante, formación de un polvo blanco (óxido de magnesio)."
            ],
            "Decomposition Reaction" => [
                "equation" => "2KClO₃ → 2KCl + 3O₂",
                "description" => "El clorato de potasio se descompone al calentarse para formar cloruro de potasio y gas oxígeno. Esta es una reacción de descomposición donde un compuesto se descompone en sustancias más simples.",
                "observations" => "Burbujeo, liberación de gas oxígeno."
            ],
            "Displacement Reaction" => [
                "equation" => "Zn + 2HCl → ZnCl₂ + H₂",
                "description" => "El zinc reacciona con ácido clorhídrico para formar cloruro de zinc y gas hidrógeno. Esta es una reacción de desplazamiento donde el zinc reemplaza al hidrógeno.",
                "observations" => "Efervescencia, liberación de gas hidrógeno, el zinc se disuelve."
            ],
            "Double Displacement Reaction (Precipitation)" => [
                "equation" => "Pb(NO₃)₂ + 2KI → PbI₂ + 2KNO₃",
                "description" => "El nitrato de plomo reacciona con yoduro de potasio para formar yoduro de plomo (un precipitado) y nitrato de potasio. Esta es una reacción de doble desplazamiento.",
                "observations" => "Formación de un precipitado amarillo (yoduro de plomo)."
            ],
            "Oxidation-Reduction Reaction (Redox)" => [
                "equation" => "Zn + CuSO₄ → ZnSO₄ + Cu",
                "description" => "El zinc reacciona con sulfato de cobre(II) en una reacción redox. El zinc se oxida y el cobre se reduce.",
                "observations" => "Formación de metal de cobre, el zinc se disuelve."
            ]
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['simulate'])) {
            $reaction_type = $_POST['reaction_type'];

            $reaction = $reactions_data[$reaction_type] ?? null;

            if ($reaction) {
                echo "<div class='result'><strong>Ecuación de la Reacción:</strong> {$reaction['equation']}<br><br>
                      <strong>Descripción:</strong> {$reaction['description']}<br><br>
                      <strong>Observaciones:</strong> {$reaction['observations']}</div>";
            } else {
                echo "<div class='result'><strong>Error:</strong> Tipo de reacción inválido seleccionado.</div>";
            }
        }
        ?>
    </div>

    <script>
        let isSpanish = true;

        function toggleLanguage() {
            isSpanish = !isSpanish;

            document.getElementById('translateBtn').textContent = isSpanish ? "Cambiar a Inglés" : "Switch to Spanish";
            document.getElementById('title').textContent = isSpanish
                ? "Simulador de Reacciones Químicas"
                : "Chemical Reaction Simulator";
            document.getElementById('description').textContent = isSpanish
                ? "Seleccione un tipo de reacción química para simularla y ver los detalles de la ecuación, descripción y observaciones."
                : "Select a chemical reaction type to simulate it and see the equation, description, and observations.";
            document.getElementById('reaction_label').textContent = isSpanish
                ? "Seleccione un Tipo de Reacción"
                : "Select a Reaction Type";
            document.getElementById('simulateBtn').textContent = isSpanish
                ? "Simular Reacción"
                : "Simulate Reaction";

            const reactionDropdown = document.getElementById('reaction_type');
            reactionDropdown.options[0].text = isSpanish ? "Reacción de Combinación (Síntesis)" : "Combination Reaction (Synthesis)";
            reactionDropdown.options[1].text = isSpanish ? "Reacción de Descomposición" : "Decomposition Reaction";
            reactionDropdown.options[2].text = isSpanish ? "Reacción de Desplazamiento" : "Displacement Reaction";
            reactionDropdown.options[3].text = isSpanish ? "Reacción de Doble Desplazamiento (Precipitación)" : "Double Displacement Reaction (Precipitation)";
            reactionDropdown.options[4].text = isSpanish ? "Reacción de Oxidación-Reducción (Redox)" : "Oxidation-Reduction Reaction (Redox)";
        }
    </script>
</body>
</html>
