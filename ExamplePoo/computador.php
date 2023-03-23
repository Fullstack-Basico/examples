<?php

require("electrodomestico.php");

class Computadores extends Electrodomesticos {

    public $nombre = "Computador";
    public $marca;
    public $ram;
    public int $cpu;
    private $macAdress;

    public function conectarWifi(){

        echo "Conectando WIFI ....";
    }
    
    public function ejecutarPrograma(){

        echo "Ejecutar Programa";
    }
    public function AlmacenarInformacion(){
        echo "Almacenar Información";
    }

}






?>