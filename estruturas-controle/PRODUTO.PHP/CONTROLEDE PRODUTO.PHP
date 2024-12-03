<?php
// db.php
$host = 'localhost'; // Ajuste conforme seu ambiente
$dbname = 'estoque'; // Nome do banco de dados
$username = 'root'; // Seu usuário
$password = ''; // Sua senha

try {
    // Criando a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>
