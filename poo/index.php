<?php

class libro {

    public int $valorLibro;
    public string $tamannio;
    public string $nombre;
    private string $isbn;

   function __construct($tamannio,$precioLibro=0,$nombre){

    $this->tamannio= $tamannio;
    $this->valorLibro = $precioLibro;
    $this->isbn = "sadwxx11";
    $this->nombre = $nombre;
    }


    function Mostrar(){

    }

    function Informar(){

        echo "<br>Ejecutando Acción o metodo Informar de la clase libro";
        $this->MostrarIsbn();
        echo "<br>".$this->isbn;

    }

    function Compartir(){

    }

    private function MostrarIsbn(){
        echo "<br>Ejecutando Acción o metodo MostrarIsbn de la clase libro";
    }
}



$libroColombiano = new libro("15cm",12000,"Cien años de Soledad"); //Instanciando clase o creado un objeto a partir de una clase

echo $libroColombiano->tamannio;
echo"<br>";
echo $libroColombiano->valorLibro;
echo"<br>";
echo $libroColombiano->nombre;

$libroColombiano->Informar();


echo"<br>";echo"<br>";echo"<br>";



$libroFrances = new libro("5cm",40000,"Diccionario"); //Instanciando clase o creado un objeto a partir de una clase

echo $libroFrances->tamannio;
echo"<br>";
echo $libroFrances->valorLibro;
echo"<br>";
echo $libroFrances->nombre;

$libroFrances->Informar();












?>