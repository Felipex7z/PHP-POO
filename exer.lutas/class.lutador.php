<?php 
class Lutador{
    //atributos//
    private $nome,$nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //metodos//

        public function __construct($no, $na, $id,$pe,$vi,$de,$em){
            $this->nome = $no;
            $this->nacionalidade= $na;           
            $this->idade = $id;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;

        
            


        }
    

    
        
    
     function apresentar(){
        echo "<p>-------------------</p>";
        echo" lutador " . $this->getNome();
        echo " diretamente de " .$this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso();
        echo"<br> ele tem " . $this->getvitorias() . " vitorias";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates(). " empates ";

    }
   function Status(){
    echo "<p>-------------------</p>";
    echo "<p>" . $this->getNome() . " um peso" . $this->getCategoria();
    echo " e ja ganhou " . $this->getVitorias() . " vezes ";
    echo " e perdeu " . $this->getDerrotas() . " vezes ";

    }
   function ganhaLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        

    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);

    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+ 1);

    }

    //getters e setters meu bhoter//

    public function getNome(){
        return $this->nome;

    }
    public function setNome($no){
        $this->nome = $no;

    }

    public function getNacionalidade(){
        return $this->nacionalidade;

    }
    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }

    public function getIdade(){
        return $this->idade;

    }
    public function setIdade($id){
        $this->idade = $id;
        
    }

    public function getAltura(){
        return $this->altura;

    }
    public function setAltura($al){
        $this->altura = $al;
        
    }

    public function getPeso(){
        return $this->peso;
        

    }
    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
        
    }

    public function getCategoria(){
        return $this->categoria;


    }
    private function setCategoria(){
        
        if($this->peso < 52.2){
            $this->categoria = " invalido";
        }elseif($this->peso <= 70.5){
            $this->categoria = " leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = " medio";

        }elseif($this->peso <= 120.2){
            $this->categoria = " pesado";

        }else{
            $this->categoria = " invalido";
        }
        
    }

    public function getVitorias(){
        return $this->vitorias;

    }
    public function setVitorias($vi){
        $this->vitorias = $vi;        
    }

    public function getDerrotas(){
        return $this->derrotas;

    }
    public function setDerrotas($de){
        $this->derrotas = $de;
        
    }

    public function getEmpates(){
        return $this->empates;

    }
    public function setEmpates($em){
        $this->empates = $em;

        
    }


}


?>