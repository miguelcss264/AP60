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
$coche = new Coche("Toyota", "Corolla");

//PROGRAMA PRINCIPAL. EJERCICIO 3
$coche1=new Coche();
$coche1->setMarca("Ferrari");
?>