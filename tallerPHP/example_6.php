<?php 


function calcularAreaTr ($base, $altura){

    $area = ($base * $altura) / 2;

    return $area;

}

$areaTriangulo= calcularAreaTr(2,2);

echo "El area del triangulo es: $areaTriangulo metros";

?>