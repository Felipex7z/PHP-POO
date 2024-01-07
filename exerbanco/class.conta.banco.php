<?php 
class Banco{
    //atributos//
    public $numConta;
    protected  $tipo;
    private $dono;
    private $saldo;
    private $status;
    
     //metodos//
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setstatus(false); 
        echo"conta criada";
    }
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }


    
        
    
    }
    
        
    public function fecharConta( ){
        if($this->getSaldo() > 0){
            echo"<p>erro, conta com money</p>";
        }elseif($this->getSaldo() < 0) {
            echo"<p>devendo meu mano, pague para fechar </p>";
        } else {
            $this->setStatus(false);
        }

    }
    public function Depositar($v){
        if($this->getstatus() == true){
            $this->setSaldo($this->getSaldo() + $v);
            echo"<p>deposito de $v autorizado na conta de $this->dono</p>";
            //$this->saldo = $this->saldo + $v;
        }else {
            echo"<p>faio irmao</p>";
        }

    }
    public function Sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo()- $v) ;
                echo"<p>saque de $v autorizado na conta de $this->dono";

            }else{
                echo"<p>saldo pobre</p>";
            }

        }else{
            echo"<p>conta fechada</p>";
        }
        


    }
    public function pagarMensal($v){
        if($this->getTipo() == "CC"){
            $v = 12;
        }elseif($this->getTipo() == "CP"){
            $v = 20;
        }
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo"<p>mensalidade de $v debitada na conta de $this->dono </p>";
        }else{
            echo"<p>problemas com a conta</p>";
        }
      
    }


    //getters e setter//

    public function getnumConta (){
       return $this->numConta;
    }
    public function setnumConta($numConta){
        $this->numConta = $numConta;

    }
    public function getDono (){
        return $this->dono;
     }
     public function setDono($dono){
         $this->dono = $dono;
 
     }
    public function getTipo(){
       return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;

    }
    public function getSaldo(){
       return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;

    }
    public function getStatus(){
       return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;

    }
}


?>