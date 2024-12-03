<?php
// Função para gerar a senha aleatória
function gerarSenha($comprimento) {
    // Definindo os caracteres que podem ser usados na senha
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-+=<>?';
    $senha = '';
    $max = strlen($caracteres) - 1;

    // Gerando a senha
    for ($i = 0; $i < $comprimento; $i++) {
        $senha .= $caracteres[rand(0, $max)];
    }

    return $senha;
}

// Verificando se o formulário foi enviado
$senhaGerada = '';
if (isset($_POST['comprimento'])) {
    $comprimento = (int)$_POST['comprimento'];
    $senhaGerada = gerarSenha($comprimento);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha Aleatória</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6e7dff, #00b8d4);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 1em;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
            width: 80px;
        }

        button {
            padding: 10px 20px;
            background-color: #00b8d4;
            border: none;
            color: white;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0288d1;
        }

        .senha {
            margin-top: 20px;
            font-size: 1.5em;
            word-wrap: break-word;
            padding: 10px;
            background: #333;
            border-radius: 5px;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de Senha Aleatória</h1>
        <form method="POST">
            <label for="comprimento">Comprimento da Senha:</label><br>
            <input type="number" name="comprimento" id="comprimento" min="1" required><br><br>
            <button type="submit">Gerar Senha</button>
        </form>

        <?php if ($senhaGerada): ?>
            <div class="senha">
                Senha Gerada: <strong><?php echo htmlspecialchars($senhaGerada); ?></strong>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
