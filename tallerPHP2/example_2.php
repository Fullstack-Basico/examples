<?php



$myDate =[
    "12/12/1991",
    "12/07/1992",
    "12/05/1993",
    "12/04/1994",
    "12/04/1995",
    "12/03/1996",
    "12/02/1997",
    "12/01/1998",
    "12/08/1999",
    "12/09/2000",
    "12/11/2001",
    "12/12/2002"
];

$countArray = count($myDate);

echo "$countArray <br>///////<br>";



for ($i=0; $i <= $countArray - 1 ; $i++) { 
     echo "Fecha : $myDate[$i] <br>";
     echo "********************<br>";
}


$i = 0;
while ($i <= $countArray - 1) {
    echo "Fecha : $myDate[$i] <br>";
    echo "////////////////////<br>";
    $i++;
}





$i = 0;


do {
    echo "Fecha : $myDate[$i] <br>";
    echo "--------------------<br>";
    $i++;
} while ($i <= $countArray - 1);











?>