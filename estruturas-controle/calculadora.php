<?php
// Inicializando as variáveis
$resultado = null;
$erro = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados enviados pelo formulário
    $entrada1 = trim($_POST['entrada1']);
    $entrada2 = trim($_POST['entrada2']);
    $operacao = strtolower(trim($_POST['operacao']));

    // Validando os números
    if (!is_numeric($entrada1) || !is_numeric($entrada2)) {
        $erro = "Por favor, insira números válidos.";
    } else {
        // Convertendo os valores para float
        $num1 = (float) $entrada1;
        $num2 = (float) $entrada2;

        // Realizando a operação escolhida
        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtracao":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacao":
                $resultado = $num1 * $num2;
                break;
            case "divisao":
                if ($num2 == 0) {
                    $erro = "Erro: divisão por zero não é permitida.";
                } else {
                    $resultado = $num1 / $num2;
                }
                break;
            default:
                $erro = "Operação inválida. Tente novamente.";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 300px; margin: 0 auto; }
        input, select { width: 100%; padding: 8px; margin: 10px 0; }
        button { width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .resultado { font-weight: bold; margin-top: 20px; }
        .erro { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Calculadora</h1>
    
    <form method="post">
        <label for="entrada1">Digite o primeiro número:</label>
        <input type="text" id="entrada1" name="entrada1" value="<?= isset($entrada1) ? $entrada1 : '' ?>" required>

        <label for="entrada2">Digite o segundo número:</label>
        <input type="text" id="entrada2" name="entrada2" value="<?= isset($entrada2) ? $entrada2 : '' ?>" required>

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma" <?= isset($operacao) && $operacao == "soma" ? "selected" : "" ?>>Soma</option>
            <option value="subtracao" <?= isset($operacao) && $operacao == "subtracao" ? "selected" : "" ?>>Subtração</option>
            <option value="multiplicacao" <?= isset($operacao) && $operacao == "multiplicacao" ? "selected" : "" ?>>Multiplicação</option>
            <option value="divisao" <?= isset($operacao) && $operacao == "divisao" ? "selected" : "" ?>>Divisão</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($erro): ?>
        <p class="erro"><?= $erro ?></p>
    <?php elseif ($resultado !== null): ?>
        <p class="resultado">Resultado: <?= $resultado ?></p>
    <?php endif; ?>

</body>
</html>
