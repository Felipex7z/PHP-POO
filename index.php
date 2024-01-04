<?php 
class Car{
    public $cor;
    public $preço;

public function Andar(){
    echo $this->cor." com ".$this->preço." andou ";
}


}
$corola = new Car();
$corola->cor = "black";
$corola->preço = 90000;
$corola->Andar();