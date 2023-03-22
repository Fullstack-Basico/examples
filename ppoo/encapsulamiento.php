<?php


class carro {

    public $llave = "LLave Seguridad";
    public $nombrePropietario;
    private $multas;


    public function encender(){
        echo "Encendiendo Carro !!!<br>";
        $this->emitirGases();
    }


    public function acelerar(){
        echo "Acelerando carro a 80 Km/h !!!<br>";
    }

    private function emitirGases(){
        echo "Emitir Gases CO2!!!<br>";
    }


    public function emitirMulta($valorMulta){
        $this->multas = $valorMulta;
    }

    public function mostrarMulta(){
        echo "Nombre Propietario: ". $this->nombrePropietario."<br>";
        echo "Valor Multa : ".$this->multas."<br>";
    }

}


?>