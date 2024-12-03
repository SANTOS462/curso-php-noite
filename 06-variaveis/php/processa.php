<?php
//Usando variavel do tipo Boolean(verdadeiro ou falso):
$logado = false;

if ($logado){
    echo "É casado.";

} else {
    echo "Você não esta logado. Faça login!";

}
//==============
echo "</hr>";
//Ponto Flutuante:
$altura = 1.84;
echo "Altura: $altura m"; // Saida: altura: 1.85m
//============
echo "<hr>";
//Integer
$idade = 17.5;
echo "Idade: $idade";
// ==========
echo "<hr>";
//Array:
$filhos = [ "João ", "Maria", "Pedro", "Ana"];
echo $filhos[1];
//==========
echo "<hr>";
//Objeto:
class Pessoa {
    public $nome;
    public $idade;

    public function  __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

public function apresentar(){
    return "Olá,meu nome é $this->nome e tenho $this->idade anos.";

}


}

$pessoa = new Pessoa("Thiago", 40);
echo $pessoa->apresentar();

?>
 
 