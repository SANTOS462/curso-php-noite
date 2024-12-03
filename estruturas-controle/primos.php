<?php
// Função para verificar se um número é primo
function isPrime($num) {
    // Números menores ou iguais a 1 não são primos
    if ($num <= 1) {
        return false;
    }

    // Verifica se o número é divisível por qualquer número entre 2 e a raiz quadrada de $num
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Se encontrar um divisor, não é primo
        }
    }
    return true; // Se não encontrar divisores, é primo
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe a lista de números digitados pelo usuário
    $numbers = explode(",", $_POST['numbers']);
    $results = [];

    // Verifica a primalidade de cada número
    foreach ($numbers as $number) {
        $number = trim($number); // Remove espaços extras ao redor do número
        if (is_numeric($number)) {
            $results[$number] = isPrime($number) ? 'Primo' : 'Não é primo';
        } else {
            $results[$number] = 'Entrada inválida'; // Caso o valor não seja numérico
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números Primos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff); /* Gradiente bonito */
            color: #fff;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            font-size: 2.5em;
        }

        p {
            text-align: center;
            font-size: 1.2em;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 30px;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 1em;
            margin-bottom: 20px;
            width: 80%;
            max-width: 500px;
            border-radius: 5px;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #0072ff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #00c6ff;
        }

        h2 {
            text-align: center;
            margin-top: 30px;
            font-size: 2em;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        li {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Teste de Números Primos</h1>
    <p>Um número primo é um número natural maior que 1 que não pode ser dividido por nenhum número além de 1 e ele mesmo.</p>
    <p>Para entender melhor o conceito de números primos, veja este vídeo: <a href="https://www.youtube.com/watch?v=ZNeknBtu9PE" target="_blank">O que é um número primo?</a></p>

    <form method="POST">
        <label for="numbers">Digite uma lista de números separados por vírgula:</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    // Exibe os resultados após o envio do formulário
    if (isset($results)) {
        echo "<h2>Resultados:</h2>";
        echo "<ul>";
        foreach ($results as $number => $result) {
            echo "<li><strong>$number</strong>: $result</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
