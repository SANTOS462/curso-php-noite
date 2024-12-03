<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformar em Anime/Mangá</title>
    <style>
        /* Resetando margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            margin: 0;
        }

        /* Container centralizado */
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        /* Título principal */
        h1 {
            font-size: 30px;
            margin-bottom: 25px;
            color: #333;
        }

        /* Estilo do formulário */
        .form-container {
            margin-bottom: 30px;
        }

        label {
            font-size: 18px;
            display: block;
            margin-bottom: 10px;
        }

        input[type="file"] {
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            width: 100%;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button {
            padding: 12px 25px;
            font-size: 16px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1d5bb5;
        }

        /* Estilo do container da imagem */
        .image-container {
            position: relative;
            display: inline-block;
            width: 100%;
            margin-top: 20px;
        }

        /* Gradiente sobre a imagem */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, rgba(255, 0, 0, 0.6), rgba(0, 0, 255, 0.6));
            border-radius: 10px;
            pointer-events: none;
        }

        /* Estilo da imagem */
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        /* Mensagens de erro ou sucesso */
        p {
            font-weight: bold;
            margin-top: 10px;
        }

        .error-message {
            color: #ff4d4d;
        }

        .success-message {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Transforme Sua Foto em Anime/Mangá</h1>

        <form action="" method="POST" enctype="multipart/form-data" class="form-container">
            <label for="image">Escolha uma imagem:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
            <button type="submit" name="submit">Transformar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
            // Processa o upload da imagem
            $image = $_FILES['image'];
            $upload_dir = 'uploads/';
            $upload_file = $upload_dir . basename($image['name']);

            // Verifica se o arquivo é uma imagem
            if (getimagesize($image['tmp_name'])) {
                // Move o arquivo para o diretório de uploads
                if (move_uploaded_file($image['tmp_name'], $upload_file)) {
                    // Sucesso
                } else {
                    // Captura o erro
                    echo "Erro ao mover o arquivo: " . $_FILES['image']['error'];
                }
                
                    // Exibe a imagem com o efeito de gradiente
                    echo '<div class="image-container">';
                    echo '<img src="' . $upload_file . '" alt="Imagem transformada">';
                    echo '<div class="gradient-overlay"></div>';
                    echo '</div>';
                    echo '<p class="success-message">Imagem transformada com sucesso!</p>';
                } else {
                    echo '<p class="error-message">Erro ao fazer upload da imagem. Tente novamente.</p>';
                }
            } else {
                echo '<p class="error-message">Por favor, envie um arquivo de imagem válido.</p>';
            }
        
        ?>
    </div>
</body>
</html>
