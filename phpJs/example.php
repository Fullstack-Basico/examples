<?php 

echo "<h1>Importante PHP: </h1><br>";
echo "<h2>Variables(varian su valor) Inician con el Simbolo $ </h2><br>";
echo "<h2>Finalizar sentencias de ejecución con el simbolo ; </h2><br>";
echo "Hola Mundo  PHP !!";


const miConstante =  "Información";

echo "<br>";
echo miConstante;



$miVariable = 1000;

$miVariable=300;

echo "<br>";
echo $miVariable;


$abc = true ;

if ($abc) {
    echo "<br>";
    echo "True=".$abc;
}

$abc = false ;

if ($abc) {
    echo "<br>";
    echo "True";
}else{
    echo "<br>";
    echo "False=".$abc;
}

$abc = true ;

if ($abc == true ) {
    echo "<br>";
    echo "== ".$abc;
}

$abc=false;

if ($abc) {
    echo "<br>";
    echo "True";
}else if($abc == false){
    echo "<br>";
    echo "False=".$abc;
}


for ($i=0; $i < 10; $i++) { 
    echo "<br>";
    echo $i;
}

$a=100;
while ($a <= 110) {
    echo "<br>";
    echo $a;
    $a++;
}

$b = 1000;

do {
    echo "<br>";
    echo $b;
    $b++;
} while ($b<=1010);


$cajero ="Opción 1";
$cajero ="Otra cosa";
switch ($cajero) {
    case 'Opción 1':
        echo "<br>";
        echo $cajero;
        break;
    
    default:
        echo "<br>";
        echo $cajero;
        break;
}

function mifuncion(){
    echo "<br>";
    echo "Ejecutando mifuncion()!!";
}

mifuncion();


function operacion() {
    $i=10;
    $a=10;
    $ia= $i+$a;
    echo "<br>";
    echo  $ia;
 }
 
 operacion();

?>