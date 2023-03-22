<?php


class Animal {

    public $tamanio = "20cm";

    public function correr(){
        echo "Velocidad Promedio de de una animal 10 kM/h <br>";

    }
}

class Perro extends Animal {

    public function vigilar(){
        echo "Vigilar Hogar <br>";
    }
}




class Gato extends Animal {

    public function dormir(){
        echo "Domir todo el dia <br>";
    }

}




$miPerro= new Perro();
$miGato= new Gato();

$miPerro->vigilar();
$miGato->dormir();




$miPerro->correr();


$miGato->correr();


echo $miPerro->tamanio;


?>