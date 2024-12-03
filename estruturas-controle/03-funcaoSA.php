<?php

function login(){
    $logado = false;

    if ($logado) {
        echo "Painel de controle";
    } else {
        echo "Faça login para acessar o painel";
    }
}
echo login();