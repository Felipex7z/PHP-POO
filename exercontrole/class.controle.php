<?php   
require_once 'interface.php';
class Controleremoto implements Controlador  {
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }


    //getters e setters//

    private  function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
        
    }


    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }  


    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }
    //metodos//

    public function ligar(){
        $this->setLigado(true);
        

    }
    public function desligar(){
        $this->setLigado('nop');

    }
    public function abrirMenu(){
        echo"<br>esta ligado?:  " . $this->getLigado();
        echo"<br>esta tocando?:  " . $this->getTocando();
        echo"<br>volume:  " . $this->getVolume();
        for ($i=0; $i<= $this->getVolume(); $i+=10){
            echo"|";

        }
        echo"<br>";
        
    }
    public function fecharMenu(){
        echo "<br>fechando menu";

    }
    public function maisVolume(){
       if($this->getLigado()){
        $this->setVolume($this->getVolume() + 10);

       }

    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setLigado($this->getVolume() - 5);
        }

    }
    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }

    }
    public function desligarMudo(){
        if($this->getLigado( ) && $this->getVolume() == 0){
            $this->setVolume(50);

        }

    }
    public function play(){
        if($this->getLigado() && ! ($this->getTocando()) ){
            $this->setTocando(true);
        }

    }
    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }

    }

















}


?>