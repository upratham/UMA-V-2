<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación de Color de Llama Química</title>
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
        select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
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
        .flame-color-box {
            width: 100px;
            height: 100px;
            margin: 10px auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <button class="translate-btn" id="translateBtn" onclick="toggleLanguage()">Cambiar a Inglés</button>

        <h1 id="title">Simulación de Color de Llama Química</h1>
        <p id="description">Seleccione una sal química para ver cómo cambia el color de la llama.</p>

        <form method="POST" action="">
            <label for="salt" id="salt_label">Seleccione una Sal</label>
            <select id="salt" name="salt" required>
                <option value="Strontium Nitrate">Nitrato de Estroncio</option>
                <option value="Copper Sulphate">Sulfato de Cobre</option>
                <option value="Barium Nitrate">Nitrato de Bario</option>
                <option value="Sodium Chloride">Cloruro de Sodio</option>
                <option value="Calcium Nitrate">Nitrato de Calcio</option>
            </select>
            <button type="submit" name="simulate" id="simulateBtn">Simular</button>
        </form>

        <?php
        $salts = [
            "Strontium Nitrate" => ["#FF0000", "Strontium nitrate burns with a red flame.", "Nitrato de Estroncio quema con una llama roja."],
            "Copper Sulphate" => ["#008000", "Copper sulphate burns with a green flame.", "Sulfato de Cobre quema con una llama verde."],
            "Barium Nitrate" => ["#90EE90", "Barium nitrate burns with a pale green flame.", "Nitrato de Bario quema con una llama verde pálida."],
            "Sodium Chloride" => ["#FFA500", "Sodium chloride burns with an orange flame.", "Cloruro de Sodio quema con una llama naranja."],
            "Calcium Nitrate" => ["#FF4500", "Calcium nitrate burns with an orange-red flame.", "Nitrato de Calcio quema con una llama naranja-roja."]
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['simulate'])) {
            $salt = $_POST['salt'];
            if (array_key_exists($salt, $salts)) {
                $color = $salts[$salt][0];
                $description = $salts[$salt][2]; // Always use Spanish description
                echo "<div class='result'>
                        <div class='flame-color-box' style='background-color:$color;'></div>
                        <p><strong>Descripción:</strong> $description</p>
                      </div>";
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
                ? "Simulación de Color de Llama Química" 
                : "Chemical Flame Color Simulation";
            document.getElementById('salt_label').textContent = isSpanish
                ? "Seleccione una Sal"
                : "Select a Salt";
            document.getElementById('simulateBtn').textContent = isSpanish
                ? "Simular"
                : "Simulate";

            const saltsDropdown = document.getElementById('salt');
            saltsDropdown.options[0].text = isSpanish ? "Nitrato de Estroncio" : "Strontium Nitrate";
            saltsDropdown.options[1].text = isSpanish ? "Sulfato de Cobre" : "Copper Sulphate";
            saltsDropdown.options[2].text = isSpanish ? "Nitrato de Bario" : "Barium Nitrate";
            saltsDropdown.options[3].text = isSpanish ? "Cloruro de Sodio" : "Sodium Chloride";
            saltsDropdown.options[4].text = isSpanish ? "Nitrato de Calcio" : "Calcium Nitrate";
        }
    </script>
</body>
</html>
