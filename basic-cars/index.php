<?php 
class Carros{
    private $cor;
     private $cambio ;
     private $ano;



     function Acelerar(){
        echo "pisando fundo";
     }



    public function getCor(){
        return $this->cor;

    }
    public function setCor($cor){
        $this->cor = $cor;
        
    }
    public function getCambio(){
        return $this->cambio;

    }
    public function setCambio($cambio){
        $this->cambio = $cambio;

    }
    public function getAno(){
        return $this->ano;

    }
    public function setAno($ano){
        $this->ano = $ano;

    }
   



}

$corola = new Carros;
$corola->setCor('yellow');
$corola->setCambio('manual');
$corola->setAno(2022);
print_r($corola);
echo "<br>";
$civic = new Carros;
$civic->setCor('blue');
$civic->setCambio('automatic');
$civic->setAno(2020);
print_r($civic);
