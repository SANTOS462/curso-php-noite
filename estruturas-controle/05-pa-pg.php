<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Progressões</title>
    <style>
        body {
            background: linear-gradient(45deg, #FF0000,#0000FF , #0000FF, #FF0000);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
        }
        input[type="number"], input[type="submit"] {
            padding: 10px;
            margin: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #000000;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #000000;
        }
        h1 {
            color: #333;
        }
        .result {
            margin-top: 20px;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculadora de Progressões</h1>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe o número fornecido pelo usuário
        $numero = $_POST['numero'];

        // Função para calcular a Progressão Aritmética
        function calcularPA($numero) {
            $termos = [];
            for ($i = 1; $i <= 10; $i++) {
                $termos[] = $numero + ($i - 1) * 2; // PA com razão 2
            }
            return $termos;
        }

        // Função para calcular a Progressão Geométrica
        function calcularPG($numero) {
            $termos = [];
            for ($i = 1; $i <= 10; $i++) {
                $termos[] = $numero * pow(2, $i - 1); // PG com razão 2
            }
            return $termos;
        }

        // Calcula as progressões
        $pa = calcularPA($numero);
        $pg = calcularPG($numero);

        // Exibe os resultados
        echo '<div class="result">';
        echo '<h3>Progressão Aritmética (PA) com Razão 2:</h3>';
        echo '<p>' . implode(', ', $pa) . '</p>';
        echo '</div>';

        echo '<div class="result">';
        echo '<h3>Progressão Geométrica (PG) com Razão 2:</h3>';
        echo '<p>' . implode(', ', $pg) . '</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
