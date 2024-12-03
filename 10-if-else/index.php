<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Par ou Ímpar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #1E3A8A;
            color: #333;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        input, button {
            padding: 10px;
            font-size: 1rem;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            font-size: 1.2rem;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Verificar Par ou Ímpar</h1>
    <input type="number" id="numberInput" placeholder="Digite um número">
    <button onclick="checkNumber()">Verificar</button>
    <div id="result" class="result"></div>
</div>

<script>
    function checkNumber() {
        const number = document.getElementById('numberInput').value;
        const resultDiv = document.getElementById('result');

        if (number === '') {
            resultDiv.textContent = 'Por favor, insira um número.';
            resultDiv.style.color = 'red';
        } else {
            const parsedNumber = parseInt(number);
            if (isNaN(parsedNumber)) {
                resultDiv.textContent = 'Isso não é um número válido!';
                resultDiv.style.color = 'red';
            } else {
                if (parsedNumber % 2 === 0) {
                    resultDiv.textContent = `O número ${parsedNumber} é PAR.`;
                    resultDiv.style.color = 'green';
                } else {
                    resultDiv.textContent = `O número ${parsedNumber} é ÍMPAR.`;
                    resultDiv.style.color = 'blue';
                }
            }
        }
    }
</script>

</body>
</html>
