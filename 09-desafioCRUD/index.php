<?php 
include 'config.php';

// Obtém os clientes do banco de dados
$result = $conn->query("SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>🍞Clientes da Padaria 🥐</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        /* Estilizando o fundo da página */
        body {
            background-image: url('https://img.freepik.com/psd-premium/elemento-vetorial-de-fundo-transparente-do-pao_1279565-8809.jpg');
            background-size: cover;  /* Faz a imagem cobrir toda a tela */
            background-position: center;  /* Centraliza a imagem */
            background-repeat: no-repeat;  /* Evita que a imagem se repita */
            font-family: Arial, sans-serif; /* Fonte padrão */
            color: white; /* Cor do texto */
            margin: 0;
            padding: 0;
        }

        /* Contêiner para o título e subtítulo sobrepostos */
        .header-container {
            position: relative;
            text-align: center;
            z-index: 10;
            color: white;
        }

        /* Estilizando o título principal */
        h1 {
            font-size: 3rem;
            margin-top: 0px;
            color: #FFFFFF; /* Cor amarela para destacar */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Sombra para dar destaque */
        }

        /* Estilizando o subtítulo */
        h2 {
            font-size: 1.5rem;
            color: #000000;
            margin-top: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        /* Estilizando o link de adicionar cliente */
        a {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 100px;
            font-size: 1rem;
            background-color: #0000FF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #FF8C00; /* Cor do botão ao passar o mouse */
        }

        /* Estilo para a tabela */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: rgba(0, 0, 0, 0.5); /* Fundo semitransparente para a tabela */
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #FFB900;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #333;
        }

        tr:hover {
            background-color: #444;
        }

        td a {
            color: #FFA500;
            text-decoration: none;
        }

        td a:hover {
            color: #FF8C00;
        }

        /* Estilo para destaque nos dados pessoais */
        .highlight {
            background-color: #FFEB3B;  /* Amarelo claro para destaque */
            font-weight: bold; /* Deixa o texto mais espesso */
            color: #000; /* Cor do texto em preto para maior contraste */
            border-radius: 5px; /* Borda arredondada */
            padding: 5px; /* Espaçamento ao redor do texto */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Sombra leve para destacar mais */
        }

        /* Comandos sobrepostos no mesmo espaço */
        .overlap-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 20; /* Mais alto que outros elementos */
        }

    </style>
</head>
<body>
    <!-- Contêiner de títulos e comandos -->
    <div class="header-container">
        <h1>❤️ Lista de Clientes Padaria Toque de Arte 👌</h1>
        <h2>Confira todos os clientes cadastrados na nossa padaria maravilhosa!</h2>
    </div>

    <!-- Link para adicionar um novo cliente -->
    <div class="overlap-container">
        <a href="add.php">🥖Adicionar Novo Cliente🥯</a>
    </div>

    <!-- Tabela de clientes -->
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Bairro</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td class="highlight"><?= htmlspecialchars($row['nome']); ?></td>  <!-- Destaque no nome -->
            <td class="highlight"><?= htmlspecialchars($row['email']); ?></td>  <!-- Destaque no email -->
            <td class="highlight"><?= htmlspecialchars($row['sexo']); ?></td>   <!-- Destaque no sexo -->
            <td class="highlight"><?= htmlspecialchars($row['bairro']); ?></td>  <!-- Destaque no bairro -->
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>">Editar</a> |
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Tem certeza?')">Deletar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
