<?php

class pessoa{
    public $nome;
    public $idade;

    function andar($m, ){
        echo"  andou $m metros";
    }
}

$jorge = new pessoa;
$jorge->nome = "fernando";
$jorge->idade = 12;
$jorge->andar(100);

print_r($jorge);