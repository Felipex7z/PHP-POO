<?php 
interface Controlador{
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
    public function maisVolume();
    public function menosVolume();
}

?>