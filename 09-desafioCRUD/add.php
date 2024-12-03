<?php
include 'config.php';

// Verifica a conexão com o banco de dados
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $bairro = $_POST['bairro'];

    // Usando prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO clientes (nome, email, sexo, bairro) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $email, $sexo, $bairro);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/58/c5/28/58c52820bf3885601403da06a0158da1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        /* Estilos para o formulário */
        form {
            width: 80%;
            max-width: 500px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilos para a validação */
        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: -15px;
            margin-bottom: 20px;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            form {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <h1>Adicionar Novo Cliente</h1>
    <form method="post" onsubmit="return validarFormulario()">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" required>
        
        <button type="submit">Salvar</button>
    </form>

    <script>
        function validarFormulario() {
            var nome = document.getElementById('nome').value;
            if (nome == "") {
                alert("O nome é obrigatório!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
