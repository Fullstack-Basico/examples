<?php



require("encapsulamiento.php");




$ferrari = new carro();


echo $ferrari->llave."<br>";
$ferrari->encender();

$ferrari->nombrePropietario = "Carlos Perez";
$ferrari->emitirMulta("$530.000");

$ferrari->mostrarMulta();

?>