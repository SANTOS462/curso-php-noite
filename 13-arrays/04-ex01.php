<?php

$cities = [

    "São Paulo", "Rio de Janeiro", "Belo Horizonte", "Brasilia", "Curitiba", 
    "Salvador", "Fortaleza", "Porto Alegre", "Manaus", "Recife", 
    "Belém", "Florianópolis", "Goiãnia", "Campo Grande", "Natal", 
    "João Pessoa", "Maceio", "Aracaju", "Vitória", "Cuibá"

];


foreach ($cities as $index => $city) {
      if ( strpos($city, "C") === 0 ) {


        echo "$city<br>";
      }


}