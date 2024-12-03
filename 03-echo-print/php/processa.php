<?php

function calcularIdadedetalhadadatade($dataNascimentoNascimento) {
//Criando objeto DateTime com a data de nascimento
$dn = new DateTime($dn);

//Criando data e hora atual:
$hoje = new DateTime();

//Calcular diferença entre as datas:
    $diferenca = $hoje-->diff($dn);

    //Retornar anos, meses e dias:
    return "Você tem" .$diferenca-->y . "anos," .$diferenca-->m .
meses e " .$diferenca-->d . " dias.";




}


//exemplo de uso de função 
$dataNascimento = "07-08-1993"; //Data de nascimento no formato AAAA-MM-DD
echo calcularIdadeDetalhada($dataNascimento);
?>