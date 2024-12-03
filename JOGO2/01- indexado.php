<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            /* Adicionando gradiente de arco-íris ao fundo */
            background: linear-gradient(45deg, violet, indigo, blue, green, yellow, orange, red);
            background-size: 400% 400%;
            animation: rainbow 5s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Animação para o gradiente de arco-íris */
        @keyframes rainbow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5); /* Fundo escuro semi-transparente */
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: white;
            font-size: 2rem;
        }

        .message {
            font-size: 1.2rem;
            color: white;
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 10px;
            margin-top: 20px;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            width: 60%;
            font-size: 1rem;
            text-align: center;
        }

        button {
            /* Adicionando gradiente ao botão */
            background: linear-gradient(45deg, violet, indigo, blue, green, yellow, orange, red);
            border: none;
            color: white;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #FF9800;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.8rem;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Jogo de Adivinhação</h1>
        <p>Estou pensando em um número entre 0 e 100. Tente adivinhar!</p>

        <!-- Exibir mensagem dependendo do status -->
        <div class="red">
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </div>

        <form method="post">
            <input type="number" name="guess" min="0" max="100" placeholder="Digite seu palpite" required>
            <button type="submit">Adivinhar</button>
        </form>

        <div class="black">
            <p>Desenvolvido com ❤️ por <strong>Você</strong></p>
        </div>
    </div>
</body>
</html>
