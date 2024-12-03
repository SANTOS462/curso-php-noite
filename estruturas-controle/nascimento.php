<?php
// Função para calcular a idade
function calcularIdade($anoNascimento, $mesNascimento, $diaNascimento) {
    $dataAtual = new DateTime(); // Data atual
    $dataNascimento = new DateTime("$anoNascimento-$mesNascimento-$diaNascimento"); // Data de nascimento
    $idade = $dataAtual->diff($dataNascimento); // Diferença entre as datas
    return $idade->y; // Retorna a idade em anos
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anoNascimento = $_POST['anoNascimento'];
    $mesNascimento = $_POST['mesNascimento'];
    $diaNascimento = $_POST['diaNascimento'];
    $idade = calcularIdade($anoNascimento, $mesNascimento, $diaNascimento);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <style>
        /* Estilos para a página com gradiente */
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 300px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type="number"], input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #2575fc;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #6a11cb;
        }

        .resultado {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calcule sua Idade</h1>
    <form method="post">
        <label for="anoNascimento">Ano de Nascimento:</label>
        <input type="number" id="anoNascimento" name="anoNascimento" required>

        <label for="mesNascimento">Mês de Nascimento:</label>
        <input type="number" id="mesNascimento" name="mesNascimento" required>

        <label for="diaNascimento">Dia de Nascimento:</label>
        <input type="number" id="diaNascimento" name="diaNascimento" required>

        <button type="submit">Calcular Idade</button>
    </form>

    <?php if (isset($idade)): ?>
        <div class="resultado">
            Você tem <?php echo $idade; ?> anos.
        </div>
    <?php endif; ?>
</div>

</body>
</html>
