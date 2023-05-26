<?php


function suma ($valorA, $valorB){
    return $valorA+ $valorB;
}

function resta ($valorA, $valorB){
    return $valorA - $valorB;
}


function multiplicacion ($valorA, $valorB){
    return $valorA * $valorB;
}


function division ($valorA, $valorB){
    return $valorA / $valorB;
}


function sumatoria ($limite) {

    $valorSumatoria = 0 ;
    $i = 1;
    while ($i <= $limite) {

        $valorSumatoria = $valorSumatoria + pow($i,2);

        $i++;
    }

    return $valorSumatoria;

}


function mostrarResultado ($operacion,$resultado) {

    echo "Resultado ".$operacion." = ". $resultado;
    return true;

}


function calculadora ($operacion = null, $parametros = []){

    switch ($operacion) {
        case 'Suma':
            mostrarResultado($operacion,suma($parametros[0],$parametros[1]));
            break;
        case 'Resta':
            mostrarResultado($operacion,resta($parametros[0],$parametros[1]));
            break;
        
        case 'Multiplicación':
            mostrarResultado($operacion,multiplicacion($parametros[0],$parametros[1]));
            break;

        case 'División':
            mostrarResultado($operacion,division($parametros[0],$parametros[1]));
            break;

        case 'Sumatoria':
            mostrarResultado($operacion,sumatoria($parametros[0]));
            break;
            
        default:
            echo "No Selecciono operacion";
            break;
    }
    return true;
}


calculadora("Sumatoria", [100]);




?>