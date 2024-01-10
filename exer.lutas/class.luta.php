<?php 
class Luta{
    private $desafiador;
    private $desafiante;
    private $rounds;
    private $aprovada;
     //metodos/funcões//
    public function __construct()
    {
        
    }
    public function marcarLuta(){

    }
    public function Lutar(){

    }
    //getter e setters//

    public function getDesafiador(){
        return $this->desafiador;
        
    }
    public function setDesafiador($desafiador){
        $this->desafiador = $desafiador;
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