<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Nomenclatura Química</title>
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
        .tab {
            margin-bottom: 20px;
        }
        .tab button {
            background: #f4f4f4;
            border: 1px solid #ccc;
            cursor: pointer;
            padding: 10px;
            font-size: 16px;
        }
        .tab button:hover {
            background: #ddd;
        }
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="translate-btn" id="translateBtn" onclick="toggleLanguage()">Cambiar a Inglés</button>

        <h1 id="title">Simulador de Nomenclatura Química</h1>
        <p id="description">Seleccione opciones para nombrar compuestos, derivar fórmulas o aprender el proceso paso a paso.</p>

        <!-- Tabs -->
        <div class="tab">
            <button onclick="showTab('nameCompoundTab')">Nombrar Compuesto</button>
            <button onclick="showTab('deriveFormulaTab')">Derivar Fórmula</button>
            <button onclick="showTab('stepByStepTab')">Nombrar Paso a Paso</button>
        </div>

        <!-- Name Compound Tab -->
        <div id="nameCompoundTab" class="tab-content active">
            <form method="POST" action="">
                <label id="cation_label">Seleccione el Catión</label>
                <select id="cation" name="cation" required>
                    <option value="Li">Li</option>
                    <option value="Na">Na</option>
                    <option value="K">K</option>
                    <option value="Mg">Mg</option>
                    <option value="Ca">Ca</option>
                    <option value="Fe">Fe</option>
                    <option value="Cu">Cu</option>
                    <option value="Zn">Zn</option>
                    <option value="Pb">Pb</option>
                </select>

                <label id="oxidation_state_label">Seleccione el Estado de Oxidación</label>
                <select id="oxidation_state" name="oxidation_state" required>
                    <option value="+1">+1</option>
                    <option value="+2">+2</option>
                    <option value="+3">+3</option>
                    <option value="+4">+4</option>
                </select>

                <label id="anion_label">Seleccione el Anión</label>
                <select id="anion" name="anion" required>
                    <option value="Cl">Cl</option>
                    <option value="O">O</option>
                    <option value="S">S</option>
                    <option value="Br">Br</option>
                    <option value="I">I</option>
                </select>

                <button type="submit" name="nameCompound" id="nameCompoundBtn">Obtener Nombre del Compuesto</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nameCompound'])) {
                $cation = $_POST['cation'];
                $oxidation_state = $_POST['oxidation_state'];
                $anion = $_POST['anion'];

                // Database for cations and anions
                $ion_data = [
                    "Cations" => [
                        "Li" => ["+1" => "litio"],
                        "Na" => ["+1" => "sodio"],
                        "K" => ["+1" => "potasio"],
                        "Mg" => ["+2" => "magnesio"],
                        "Ca" => ["+2" => "calcio"],
                        "Fe" => ["+2" => "hierro(II)", "+3" => "hierro(III)"],
                        "Cu" => ["+1" => "cobre(I)", "+2" => "cobre(II)"],
                        "Zn" => ["+2" => "zinc"],
                        "Pb" => ["+2" => "plomo(II)", "+4" => "plomo(IV)"]
                    ],
                    "Anions" => [
                        "Cl" => ["-1" => "cloruro"],
                        "O" => ["-2" => "óxido"],
                        "S" => ["-2" => "sulfuro"],
                        "Br" => ["-1" => "bromuro"],
                        "I" => ["-1" => "yoduro"]
                    ]
                ];

                $cation_name = $ion_data["Cations"][$cation][$oxidation_state] ?? null;
                $anion_name = $ion_data["Anions"][$anion]["-1"] ?? null;

                if ($cation_name && $anion_name) {
                    echo "<div class='result'><strong>Resultado:</strong> El nombre del compuesto es $cation_name $anion_name.</div>";
                } else {
                    echo "<div class='result'><strong>Error:</strong> Selección inválida.</div>";
                }
            }
            ?>
        </div>
