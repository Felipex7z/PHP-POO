<?php
Class cachorro{
    function latir(){
        echo "auau<br>";
    }

    function andar($m){
        echo"o cachorro aondou $m metros <br>";
    }
}
$viralata = new cachorro;
$pastoralemao =new cachorro;

$viralata->latir();
$pastoralemao->latir();

$viralata->andar(300);
$pastoralemao->andar(200);
