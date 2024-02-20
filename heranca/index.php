<?php

class humano{
    public $idade = 29;
    public function falar(){
        echo "Olá mundo! <br>";
    }
}


// com o extends podemos usar os atributos da em outra class
class programador extends humano {

}
$matheus = new programador;
$matheus->idade = 20;
echo $matheus->idade. "<br>";
$matheus->falar();
