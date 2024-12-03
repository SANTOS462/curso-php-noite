<?php
// listar_produtos.php

// Exemplo de array com produtos (normalmente, esses dados viriam de um banco de dados)
$produtos = [
    [
        'id' => 1,
        'nome' => 'Arroz',
        'descricao' => 'Arroz tipo 1, 5kg',
        'preco' => 19.99,
        'quantidade' => 50
    ],
    [
        'id' => 2,
        'nome' => 'Batata',
        'descricao' => 'Batata inglesa, 1kg',
        'preco' => 7.49,
        'quantidade' => 100
    ],
    [
        'id' => 3,
        'nome' => 'Carne',
        'descricao' => 'Carne bovina, 1kg',
        'preco' => 29.90,
        'quantidade' => 30
    ],
    [
        'id' => 4,
        'nome' => 'Frango',
        'descricao' => 'Frango congelado, 1kg',
        'preco' => 12.50,
        'quantidade' => 20
    ]
];

// Função auxiliar para formatar preços
function formatarPreco($preco) {
    return "R$ " . number_format($preco, 2, ',', '.');
}

// Função para calcular o valor total de um produto (quantidade * preço)
function calcularValorProduto($quantidade, $preco) {
    return $quantidade * $preco;
}

// Variável para armazenar o total geral do estoque
$totalEstoque = 0;

// Pesquisa de produtos
$pesquisa = isset($_GET['pesquisa']) ? $_GET['pesquisa'] : '';

// Filtrando os produtos conforme a pesquisa (nome ou descrição)
$produtosFiltrados = array_filter($produtos, function($produto) use ($pesquisa) {
    return stripos($produto['nome'], $pesquisa) !== false || stripos($produto['descricao'], $pesquisa) !== false;
});

// Adiciona ou atualiza um produto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['adicionarProduto'])) {
        // Recebe os dados do formulário
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];

        // Cria um novo produto com ID automático (baseado no tamanho do array)
        $novoProduto = [
            'id' => count($produtos) + 1,  // Gera um ID único com base na quantidade de produtos
            'nome' => $nome,
            'descricao' => $descricao,
            'preco' => $preco,
            'quantidade' => $quantidade
        ];

        // Adiciona o novo produto ao array
        $produtos[] = $novoProduto;
    }

    