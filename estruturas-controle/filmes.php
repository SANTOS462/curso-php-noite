<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomende um Filme</title>
    <style>
        /* Resetando alguns estilos padrões */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo do documento */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc); /* Gradiente do fundo */
            color: #ffffff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Container da interface */
        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.6); /* Fundo transparente */
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        /* Título da página */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffffff;
            font-weight: 700;
        }

        /* Descrição ou texto secundário */
        p {
            color: #d1d1d1;
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Estilo para os botões */
        .button {
            background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Gradiente no botão */
            border: none;
            color: white;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        /* Efeito no hover do botão */
        .button:hover {
            background: linear-gradient(135deg, #feb47b, #ff7e5f);
            transform: translateY(-4px);
        }

        /* Inputs e outros campos */
        input, select, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            margin-bottom: 15px;
            font-size: 1rem;
            background-color: #333;
            color: rgb(0, 0, 0);
        }

        input::placeholder, textarea::placeholder {
            color: #bbb;
        }

        /* Estilo para as opções de filmes */
        .film-select {
            background: linear-gradient(135deg, #7b61ff, #c77bff);
            color: `#FF0000;
            font-size: 1.1rem;
            padding: 15px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .film-link {
            display: block;
            margin-top: 10px;
            color: #00bcd4;
            text-decoration: none;
            font-size: 1rem;
        }

        /* Ajuste responsivo */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Recomende um Filme</h1>
        <p>Escolha uma categoria e veja as opções de filmes</p>
        
        <select class="film-select" id="comedy">
            <option value="" disabled selected>Comédia</option>
            <option value="1">O Máskara</option>
            <option value="2">As Branquelas</option>
            <option value="3">Se Beber, Não Case</option>
            <option value="4">Todo Poderoso</option>
        </select>
        <a href="https://www.filmesonline.com/o-mascarafilme" class="film-link" target="_blank">Assistir O Máskara</a>

        <select class="film-select" id="action">
            <option value="" disabled selected>Ação</option>
            <option value="1">Vingadores: Ultimato</option>
            <option value="2">Mad Max: Estrada da Fúria</option>
            <option value="3">John Wick</option>
            <option value="4">Matrix</option>
        </select>
        <a href="https://www.filmesonline.com/vingadores-ultimato" class="film-link" target="_blank">Assistir Vingadores: Ultimato</a>

        <select class="film-select" id="suspense">
            <option value="" disabled selected>Suspense</option>
            <option value="1">Ilha do Medo</option>
            <option value="2">A Origem</option>
            <option value="3">O Sexto Sentido</option>
        </select>
        <a href="https://www.filmesonline.com/ilha-do-medo" class="film-link" target="_blank">Assistir Ilha do Medo</a>

        <select class="film-select" id="horror">
            <option value="" disabled selected>Terror</option>
            <option value="1">Invocação do Mal</option>
            <option value="2">O Exorcista</option>
            <option value="3">It: A Coisa</option>
        </select>
        <a href="https://www.filmesonline.com/invocacao-do-mal" class="film-link" target="_blank">Assistir Invocação do Mal</a>

        <select class="film-select" id="drama">
            <option value="" disabled selected>Drama</option>
            <option value="1">O Poderoso Chefão</option>
            <option value="2">Forrest Gump</option>
            <option value="3">A Espera de um Milagre</option>
            <option value="4">Cinzas</option>
        </select>
        <a href="https://www.filmesonline.com/o-poderoso-chefao" class="film-link" target="_blank">Assistir O Poderoso Chefão</a>

        <button class="button">Recomendar Filme</button>
    </div>

    <script>
        // Aqui você pode adicionar scripts para lógica de recomendação
        const button = document.querySelector('.button');
        button.addEventListener('click', function() {
            const comedy = document.getElementById('comedy').value;
            const action = document.getElementById('action').value;
            const suspense = document.getElementById('suspense').value;
            const horror = document.getElementById('horror').value;
            const drama = document.getElementById('drama').value;

            let selectedMovies = [];
            if (comedy) selectedMovies.push("Comédia: " + document.getElementById('comedy').options[comedy].text);
            if (action) selectedMovies.push("Ação: " + document.getElementById('action').options[action].text);
            if (suspense) selectedMovies.push("Suspense: " + document.getElementById('suspense').options[suspense].text);
            if (horror) selectedMovies.push("Terror: " + document.getElementById('horror').options[horror].text);
            if (drama) selectedMovies.push("Drama: " + document.getElementById('drama').options[drama].text);

            alert("Você escolheu os seguintes filmes:\n" + selectedMovies.join("\n"));
        });
    </script>
</body>
</html>
