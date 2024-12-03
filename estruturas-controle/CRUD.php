<h2>Lista de Produtos</h2>
<div class="product-list">
    <?php
    // Verifica se o objeto $produtoManager é válido e se a função listarProdutos existe
    if (isset($produtoManager) && is_callable([$produtoManager, 'listarProdutos'])) {
        // Chama a função listarProdutos
        $produtos = $produtoManager->listarProdutos();
        
        // Verifica se a lista de produtos não está vazia
        if (!empty($produtos)) {
            echo "<table class='product-table'>";
            echo "<thead><tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th></tr></thead>";
            echo "<tbody>";
            
            // Itera sobre os produtos e exibe os dados
            foreach ($produtos as $produto) {
                // Verifica se o produto tem dados necessários
                if (isset($produto->id, $produto->nome, $produto->descricao, $produto->preco)) {
                    echo "<tr>";
                    // Utiliza htmlspecialchars para evitar problemas de segurança
                    echo "<td>" . htmlspecialchars($produto->id, ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($produto->nome, ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($produto->descricao, ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "<td>" . htmlspecialchars($produto->preco, ENT_QUOTES, 'UTF-8') . "</td>";
                    echo "</tr>";
                }
            }
            
            echo "</tbody>";
            echo "</table>";
        } else {
            // Mensagem caso não haja produtos
            echo "<p>Não há produtos cadastrados.</p>";
        }
    } else {
        // Caso o produtoManager não esteja disponível ou a função não exista
        echo "<p>Erro ao carregar os produtos. Tente novamente mais tarde.</p>";
    }
    ?>
</div>

<!-- Estilos -->
<style>
    .product-list {
        margin: 20px;
        font-family: Arial, sans-serif;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .product-table th, .product-table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .product-table th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    .product-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .product-table tr:hover {
        background-color: #eaeaea;
    }

    /* Responsividade */
    @media (max-width: 600px) {
        .product-table th, .product-table td {
            padding: 8px;
        }
    }
</style>
