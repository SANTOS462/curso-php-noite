<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Palavras Únicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, `rgb(0, 0, 0)` ,  RGB(255, 165, 0));
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        input, button {
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .output {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Contador de Palavras Únicas</h1>
    <label for="inputText">Digite uma frase:</label><br>
    <input type="text" id="inputText" placeholder="Exemplo: O PHP é incrível e o PHP é poderoso"><br>
    <button onclick="contarPalavras()">Contar Palavras Únicas</button>

    <div class="output" id="output"></div>
</div>

<script>
    function contarPalavras() {
        // Pega o texto inserido pelo usuário
        const texto = document.getElementById("inputText").value;

        // Converte o texto para minúsculas e divide em palavras
        const palavras = texto.toLowerCase().split(/\s+/);

        // Cria um conjunto (set) para armazenar palavras únicas
        const palavrasUnicas = new Set(palavras);

        // Exibe a quantidade de palavras únicas
        document.getElementById("output").innerHTML = `Número de palavras únicas: ${palavrasUnicas.size}`;
    }
</script>

</body>
</html>
