<?php
// Cadastro de Clientes
$clientes = [
    ['id' => 1, 'nome' => 'Carlos Silva', 'email' => 'carlos@exemplo.com', 'telefone' => '1234-5678'],
    ['id' => 2, 'nome' => 'Ana Oliveira', 'email' => 'ana@exemplo.com', 'telefone' => '2345-6789'],
    ['id' => 3, 'nome' => 'Paulo Santos', 'email' => 'paulo@exemplo.com', 'telefone' => '3456-7890'],
    ['id' => 4, 'nome' => 'Juliana Costa', 'email' => 'juliana@exemplo.com', 'telefone' => '4567-8901'],
    ['id' => 5, 'nome' => 'Ricardo Lima', 'email' => 'ricardo@exemplo.com', 'telefone' => '5678-9012'],
    ['id' => 6, 'nome' => 'Lucia Pereira', 'email' => 'lucia@exemplo.com', 'telefone' => '6789-0123'],
    ['id' => 7, 'nome' => 'Fernando Almeida', 'email' => 'fernando@exemplo.com', 'telefone' => '7890-1234'],
    ['id' => 8, 'nome' => 'Gustavo Rocha', 'email' => 'gustavo@exemplo.com', 'telefone' => '8901-2345'],
    ['id' => 9, 'nome' => 'Beatriz Martins', 'email' => 'beatriz@exemplo.com', 'telefone' => '9012-3456'],
    ['id' => 10, 'nome' => 'Sérgio Gomes', 'email' => 'sergio@exemplo.com', 'telefone' => '0123-4567'],
];

// Cadastro de Funcionários
$funcionarios = [
    ['id' => 1, 'nome' => 'Marcos Oliveira', 'cargo' => 'Gerente', 'salario' => 4000],
    ['id' => 2, 'nome' => 'Fernanda Costa', 'cargo' => 'Assistente', 'salario' => 2500],
    ['id' => 3, 'nome' => 'Ricardo Silva', 'cargo' => 'Supervisor', 'salario' => 3500],
    ['id' => 4, 'nome' => 'Juliana Souza', 'cargo' => 'Analista', 'salario' => 3000],
    ['id' => 5, 'nome' => 'Lucas Ferreira', 'cargo' => 'Estagiário', 'salario' => 1500],
    ['id' => 6, 'nome' => 'Roberta Lima', 'cargo' => 'Coordenadora', 'salario' => 5000],
    ['id' => 7, 'nome' => 'Gustavo Rocha', 'cargo' => 'Assistente', 'salario' => 2200],
    ['id' => 8, 'nome' => 'Lucia Almeida', 'cargo' => 'Analista', 'salario' => 2700],
    ['id' => 9, 'nome' => 'Sérgio Martins', 'cargo' => 'Gerente', 'salario' => 4500],
    ['id' => 10, 'nome' => 'Ana Beatriz', 'cargo' => 'Recepcionista', 'salario' => 1800],
];

// Cadastro de Vendedores
$vendedores = [
    ['id' => 1, 'nome' => 'Carlos Lima', 'vendas' => 120],
    ['id' => 2, 'nome' => 'Renata Souza', 'vendas' => 150],
    ['id' => 3, 'nome' => 'Felipe Oliveira', 'vendas' => 90],
    ['id' => 4, 'nome' => 'Mariana Rocha', 'vendas' => 200],
    ['id' => 5, 'nome' => 'Ricardo Costa', 'vendas' => 250],
    ['id' => 6, 'nome' => 'Patricia Silva', 'vendas' => 180],
    ['id' => 7, 'nome' => 'Eduardo Pereira', 'vendas' => 130],
    ['id' => 8, 'nome' => 'Gabriela Martins', 'vendas' => 220],
    ['id' => 9, 'nome' => 'João Oliveira', 'vendas' => 160],
    ['id' => 10, 'nome' => 'Beatriz Gomes', 'vendas' => 140],
];

// Cadastro de Sócios
$socios = [
    ['id' => 1, 'nome' => 'José Alves', 'percentual' => 30],
    ['id' => 2, 'nome' => 'Ana Costa', 'percentual' => 20],
    ['id' => 3, 'nome' => 'Carlos Pereira', 'percentual' => 25],
    ['id' => 4, 'nome' => 'Ricardo Gomes', 'percentual' => 10],
    ['id' => 5, 'nome' => 'Lucia Oliveira', 'percentual' => 15],
    ['id' => 6, 'nome' => 'Sérgio Lima', 'percentual' => 10],
    ['id' => 7, 'nome' => 'Patricia Rocha', 'percentual' => 5],
    ['id' => 8, 'nome' => 'Fernanda Almeida', 'percentual' => 35],
    ['id' => 9, 'nome' => 'João Santos', 'percentual' => 25],
    ['id' => 10, 'nome' => 'Ricardo Santos', 'percentual' => 40],
];

// Cadastro de Patrocinadores
$patrocinadores = [
    ['id' => 1, 'nome' => 'Empresa X', 'valor' => 10000],
    ['id' => 2, 'nome' => 'Loja Y', 'valor' => 5000],
    ['id' => 3, 'nome' => 'Corporation Z', 'valor' => 15000],
    ['id' => 4, 'nome' => 'Indústria A', 'valor' => 20000],
    ['id' => 5, 'nome' => 'Comércio B', 'valor' => 7000],
    ['id' => 6, 'nome' => 'Grupo C', 'valor' => 11000],
    ['id' => 7, 'nome' => 'Sistemas D', 'valor' => 13000],
    ['id' => 8, 'nome' => 'Tech E', 'valor' => 18000],
    ['id' => 9, 'nome' => 'Indústria F', 'valor' => 9000],
    ['id' => 10, 'nome' => 'Empresas G', 'valor' => 16000],
];

// Função para exibir os dados
function exibirDados($array, $tipo) {
    echo "<h2 style='color: #ff0000; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);'>$tipo</h2>";
    echo "<table class='tabela'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Informações</th>
            </tr>";
    foreach ($array as $registro) {
        echo "<tr>";
        echo "<td>" . $registro['id'] . "</td>";
        echo "<td>" . $registro['nome'] . "</td>";
        echo "<td>";
        foreach ($registro as $campo => $valor) {
            if ($campo != 'id' && $campo != 'nome') {
                echo "<strong>$campo:</strong> $valor<br>";
            }
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}

// Exibindo todos os cadastros
exibirDados($clientes, 'Clientes');
exibirDados($funcionarios, 'Funcionários');
exibirDados($vendedores, 'Vendedores');
exibirDados($socios, 'Sócios');
exibirDados($patrocinadores, 'Patrocinadores');

?>

<style>
    body {
        background: linear-gradient(45deg, #ff, #ff0000);
        font-family: Arial, sans-serif;
        color: #333;
        padding: 20px;
    }
    h2 {
        color: #ff0000;
        text-align: center;
        font-size: 24px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #000;
    }
    th {
        background-color: <div id="FF000"></div>
