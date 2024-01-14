<?php 
require_once 'class.lutador.php';
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
     //metodos/funcões//
   
        
    
    public function marcarLuta($l, $l1){
        if($l.getCategoria() == $l2.getCategoria()
        && ($l != $l1)){
    $this->aprovada = true;
    $this->desafiado= $l;
    $this->desafiante = $l1;



    }else{
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;

    }


    }
    public function Lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo"<p>empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empataLuta();

                       break;
                    case 1:
                        echo"<p>". $this->desafiado->getNome()."venceu</p>";

                       break;
                    case 2:
                        break;
            }

        }else{
            echo"<p> luta n pode acontecer</p>";
        }

    }
    //getter e setters//

    public function getDesafiador(){
        return $this->desafiado;
        
    }
    public function setDesafiador($desafiado){
        $this->desafiado = $desafiado;
    }



    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }



    public function getRounds(){
        return $this->rounds;
    }
    public function setRonds($rounds){
        $this->rounds = $rounds;
    }


    public function getAprovada(){
        return $this->aprovada;
    }
    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }
    //exer luta









}






?>