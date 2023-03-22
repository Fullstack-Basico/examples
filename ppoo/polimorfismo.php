<?php
echo "Hello !!";


abstract class Animal {
abstract public function hablar();
}


class Perro extends Animal {

    public function hablar(){
        echo "Ladrar!";
    }
}



class Gato extends Animal {

    public function hablar(){
        echo "Maullar!";
    }
}



function hacerHablar(Animal $animal){
    echo "<br>";
    $animal->hablar();
}



$miPerro = new Perro();
$miGato = new Gato();


hacerHablar($miPerro);
hacerHablar($miGato);





?>