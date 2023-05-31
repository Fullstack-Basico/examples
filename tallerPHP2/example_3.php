<?php

function actividades ($actividad){

    switch ($actividad) {
        case 'Despertar':
            echo "Persona Levantada!!<br>";
            break;

        case 'Correr':
                echo "La persona esta corriendo !!<br>";
                break;

        case 'Leer':
            echo "La persona esta leyendo 100 años de soledad !!<br>";
            break;
    
        case 'Desayunar':
            echo "La persona esta desayunando huevos fritos!!<br>";
            break;
            

        case 'Dormir':
            echo "La persona esta durmiendo en el sofa!!<br>";
            break;


        case 'Trabajar':
            echo "La persona esta trabajando con la contrucción de una pagina web!!<br>";
            break;
        default:
            echo "Actividad no contemplada<br>";
            break;
    }

    return true;
}



actividades("Dormir");


actividades("Trabajar");


actividades("Desayunar");




?>