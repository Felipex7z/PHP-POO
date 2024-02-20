<?php
class pessoa{
    public function falar(){
        echo "ola";
    }
}
$matheus = new pessoa;
// com o is_object verifico se a variavel matheus é um objeto
if(is_object($matheus)){
    echo "é um objeto<br>";
}else echo "n é um objeto <br>"; 


// com o get_class vemos a class do meu objeto
echo get_class($matheus) . "<br>";


// method_exist ei verifico se um metodo existe em uma classe ou não
if(method_exists($matheus, "falar")){
    echo "metodo existe";

}else "n exite este metodo";