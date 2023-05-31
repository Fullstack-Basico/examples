<?php

$myArray = [
    "nombres" =>"Juan Alonso",
    "apellidos" => "Rodriguez",
    "tipoIdentificacion" =>"CC",
    "numeroIdentificacion" => 10252625335,
    "telefono"=>3165306534,
    "email"=> "juan@gmail.com",
    "profesion"=> "Ingenieria",
    "rol" => "Administrador"
];



foreach ($myArray as $key => $value) {
    
    echo "$key : $value <br>";
    echo "$key <br>";
    echo "$value <br>";

    echo "------------------------------------- <br>";

}

foreach ($myArray as $value) {
    
    echo " $value <br>";
    echo "------------------------------------- <br>";

}


$myArrayNext = array(
    "nombres" =>"Juan Alonso",
    "apellidos" => "Rodriguez",
    "tipoIdentificacion" =>"CC",
    "numeroIdentificacion" => 10252625335,
    "telefono"=>3165306534,
    "email"=> "juan@gmail.com",
    "profesion"=> "Ingenieria",
    "rol" => "Administrador"
);


foreach ($myArrayNext as $data => $info) {
    
    
    echo "$data : $info <br>";
    echo "******************<br>";
}



foreach ($myArrayNext as $info) {
    
    echo "$info <br>";
    echo "/////////////////////////<br>";
}









?>

