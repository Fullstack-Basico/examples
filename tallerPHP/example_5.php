<?php

/**
class Persona {

    public $nombre;
    public $edad;
    public $profesion;

}



$user = new Persona();


$user->nombre = "Stiv";
$user->edad = 31;
$user->profesion  = "Ingenieria";


echo "Nombre: $user->nombre<br>";
echo "Edad: $user->edad<br>";
echo "Profesión: $user->profesion<br>";

 */

 class Persona {

    private $nombre;
    private $edad;
    private $profesion;

    public function setPerson($nombreData, $edadData,$profesionData){
        $this->nombre =$nombreData;
        $this->edad = $edadData;
        $this->profesion  = $profesionData;
        return true;
    }

    public function viewInformation (){
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        echo "Profesión: $this->profesion<br>";
        return true;
    }

}

$user = new Persona();

$user->setPerson("Stiv",31,"Ingenieria");

$user->viewInformation();


?>