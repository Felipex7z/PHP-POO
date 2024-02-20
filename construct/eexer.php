<?php

class dog{
    public $nome;
    public $raca;
    public $idade; 

function __construct($nome, $raca, $idade){
    $this->nome = $nome;
    $this->raca = $raca;
    $this->idade = $idade;

   

}

function exibir(){
    echo "o cachorro $this->nome da raça $this->raca tem $this->idade anos";
}
}
$pitoco = new dog("pitoco", "vira lata", 11);


$pitoco->exibir();