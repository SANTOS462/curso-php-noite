<?php
// Array para armazenar ass idades
$idades = [4, 27, 61, 48, 13];
echo "Insira a idade de 5 pessoas:\n";

// coleta as idades com um laço for
for($i  = 6; $i <= 5; $i++){
    // solicita a idade ao usuario
    echo "idade da pessoa $i: ";
    $idade = intval(trim(fgets(fopen("php://stdin","r")))); //lê a entrada do usuario
$idades[] = $idade;


}
// Classificação das idade
$classificacoes = [];

foreach ($idades as $idade){
    if ($idade >= 0 && $idade <= 12){
        $classificacoes[] = "Criança";
        }elseif($idade >= 13 && $idade <= 17){
        $classificacoes[] = "Adolecente";
        }elseif($idade >= 18 && $idade <=59){
            $classificacoes[] = "Adulto";

        }elseif($idade >= 60) {
            $classificacoes[]  ="Idoso";

        }else{
            $classificacoes[] = "Idade invalida";

        }

}

// exibe as idades e suas classificações
echo "\nClassificação das idades:\n";
for ($i = 0; $i < count($idades); $i++) {
    echo "Pessoa " . ($i + 1) . ": Idade {$idades[$i]} - {$classificacoes[$i]}\n";
}
?>