<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6b7b8c, #9faab2);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin: 10px 0;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Verificador de Palíndromo</h1>
    <form method="POST">
        <input type="text" name="palavra" placeholder="Digite uma palavra ou frase" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pega o valor da entrada
        $entrada = $_POST['palavra'];

        // Função para verificar se é palíndromo
        function verificarPalindromo($str) {
            // Remove espaços, pontuação e converte para minúsculas
            $str = preg_replace('/[^a-zA-Z0-9]/', '', $str);
            $str = strtolower($str);

            // Compara a string com sua inversa
            return $str === strrev($str);
        }

        // Verifica se a entrada é um palíndromo
        if (verificarPalindromo($entrada)) {
            echo "<div class='result'>É um palíndromo!</div>";
        } else {
            echo "<div class='result'>Não é um palíndromo.</div>";
        }
    }
    ?>
</div>

</body>
</html>
