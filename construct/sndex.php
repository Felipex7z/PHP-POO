<?php

class carro{
    public $portas;
    public $cor;
    public $marca;
    function __construct($portas, $cor, $marca)
    {
        $this->portas =$portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}
$ferrari = new carro(4, "vermelha", "jaguar");