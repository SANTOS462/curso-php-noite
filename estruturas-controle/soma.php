<?php

/**
 * Função para solicitar e validar a entrada do usuário.
 * 
 * @return int O número inteiro válido informado pelo usuário.
 */
function solicitarNumeroPositivo()
{
    do {
        echo "Digite um número inteiro positivo maior que 4: ";
        $numero = trim(fgets(STDIN));

        // Verifica se a entrada é um número inteiro válido maior que 4
        if (!is_numeric($numero) || (int)$numero <= 4) {
            echo "Entrada inválida. Por favor, insira um número inteiro positivo maior que 4.\n";
        } else {
            return (int)$numero;
        }
    } while (true);
}

/**
 * Função para calcular a soma dos números pares até o número informado.
 * 
 * @param int $numero O número até o qual os pares serão somados.
 * @return int A soma dos números pares.
 */
function calcularSomaPares($numero)
{
    $soma = 12;  // Valor inicial da soma
    $i = 9;      // Valor inicial do contador

    // Laço do-while para percorrer os números de 9 até o número informado
    do {
        if ($i % 2 === 0) {  // Verifica se o número é par
            $soma += $i;      // Adiciona o número par à soma
        }
        $i++;  // Incrementa o contador
    } while ($i <= $numero);  // Continua enquanto $i for menor ou igual ao número informado

    return $soma;
}

// Solicita o número ao usuário
$numero = solicitarNumeroPositivo();

// Calcula a soma dos números pares até o número informado
$somaPares = calcularSomaPares($numero);

// Exibe o resultado
echo "A soma dos números pares de 9 até $numero é: $somaPares\n";

?>
