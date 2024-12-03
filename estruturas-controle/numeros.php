<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Bases</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            font-size: 16px;
            color: #333;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #6a11cb;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f7f7f7;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Conversor de Bases</h1>
        <form method="post">
            <div class="input-group">
                <label for="number">Número Decimal</label>
                <input type="number" id="number" name="number" required>
            </div>
            <div class="input-group">
                <label for="base">Escolha a Base</label>
                <select id="base" name="base" required>
                    <option value="binario">Binário</option>
                    <option value="octal">Octal</option>
                    <option value="hexadecimal">Hexadecimal</option>
                </select>
            </div>
            <button type="submit">Converter</button>
        </form>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $number = $_POST['number'];
                $base = $_POST['base'];
                $result = '';

                if ($base === 'binario') {
                    $result = decbin($number);
                } elseif ($base === 'octal') {
                    $result = decoct($number);
                } elseif ($base === 'hexadecimal') {
                    $result = dechex($number);
                }

                echo "<div class='result'>";
                echo "<strong>Resultado em $base:</strong> $result";
                echo "</div>";
            }
        ?>
    </div>

</body>
</html>
