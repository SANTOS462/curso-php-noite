<?php
// ProdutoManager.php
include 'db.php';

class ProdutoManager {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    // Função para listar todos os produtos
    public function listarProdutos() {
        $query = "SELECT * FROM produtos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);  // Retorna os produtos em formato de objeto
    }

    // Função para adicionar um novo produto
    public function adicionarProduto($nome, $descricao, $preco, $validade, $qualidade, $quantidade) {
        $query = "INSERT INTO produtos (nome, descricao, preco, validade, qualidade, quantidade) 
                  VALUES (:nome, :descricao, :preco, :validade, :qualidade, :quantidade)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':validade', $validade);
        $stmt->bindParam(':qualidade', $qualidade);
        $stmt->bindParam(':quantidade', $quantidade);
        return $stmt->execute();  // Retorna true se a execução for bem-sucedida
    }

    // Função para atualizar a quantidade de um produto
    public function atualizarQuantidade($idProduto, $quantidade) {
        $query = "UPDATE produtos SET quantidade = :quantidade WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':id', $idProduto);
        return $stmt->execute();  // Retorna true se a execução for bem-sucedida
    }
}
?>
