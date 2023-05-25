<?php 

echo "<br><b>Hola</b><br>Mundo !<br>";

const myConst =" data";

$myVar = 1000000;
$name = 'Alfonso';
$email = "alfonso@hotmail.com";


echo $myVar."<br>";

$myVar = "Stiv";

$mydata = $myVar . myConst;

echo $mydata;

echo "<br>";

if(1===2){
echo "Ingreso Condicional if";
}else{
echo "Ingreso Condicional else";
}

echo "<br>";

for ($i=0; $i < 2 ; $i++) { 
    echo "Cadena for <br>";
}

$a=0;
while ($a <= 2) {
# code...
echo "Cadena while <br>";
$a++;
}

$a= 5;
do {
# code...
echo "Cadena do while <br>";
$a++;
} while ($a <= 2);

$variable = "opcion_80";

switch ($variable) {

case 'opcion_1':
    echo "ejecución opcion 1 <br>";
    break;

case 'opcion_2':
    echo "ejecución opcion 2 <br>";
    break;

default:
    echo "ejecución default <br>";
    break;
}
//         0 1 2     3          4
$variable=[1,3,4,"miercoles","viernes"];

foreach ($variable as $key => $value) {
    echo "posición en el arreglo =>".$key. " => ". $value;
    echo "<br>";
}


function suma ($valorA = 1,$valorB = 0) {

    $result =  $valorA + $valorB; 
    return "Resultado = ".$result ."<br>";
}


$sum =  suma();

echo $sum;
//Metodo o Funcion
function saludar () {
    echo "Saludo Full Stack !!!<br>";

    return true;
}


saludar();


class persona {

    public $name;
    private $age=50;


    public function setName($nameData)
    {
       $this->name = $nameData;
    }

    public function setAge($ageData)
    {
        $this->age = $ageData;
    }

    public function viewInformation(){
        return "Nombre: ".$this->name."  Edad: ".$this->age;
    }
}

$person = new persona();

$person->setName("Maria");
$person->setAge(25);


echo $person->viewInformation();

?>