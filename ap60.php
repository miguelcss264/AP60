<?php
//DEFINICIÓN DE LA CLASE
class Coche{
    private $marca;
    private $modelo;
    
    public function mostrarInfo(){
        echo "Coche: " . $this->marca . " " . $this->modelo;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo(){
        $this->modelo = $modelo;
    }
}

class CuentaBancaria{
    private $titular;
    private $saldo;

    function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    
}
//PROGRAMA PRINCIPAL.
$coche = new Coche("Toyota", "Corolla");
$coche1=new Coche();
$coche1->setMarca("Ferrari");
?>