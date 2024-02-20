<?php
class humano{
public $genero;
  
function fala(){
    echo "falei";
}
}
// com class_exists verificamos se a class existe ou não
if(class_exists("humano")){
    echo " a class existe<br>";
}
if(class_exists("passaro")){
    echo " a class não existe<br>";
}else echo "n existe<br>";



// com o get_class_vars vemos os elementos das class por um array
print_r(get_class_vars("humano"));




// com o get_class_method vemos os metodos da class
print_r(get_class_methods("humano"));