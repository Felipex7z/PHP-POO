<?php 
class Caneta{
    public $modelo;
    private $ponta;
    private $cor;

    public function __construct(){
        $this->cor = 'verde';


    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
       $this->modelo = $m;
    }

    public function getponta(){
       return $this->ponta;
    }
    public function setPonta($p){
       $this->ponta = $p;

    }

        
    }
 
     





     
    
    


?>