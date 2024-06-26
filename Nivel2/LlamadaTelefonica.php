<?php


$minutos;


function costeLlamada(int $minutos){
    $costeLlamada = 10;
    if($minutos > 3){
        for($i = 3; $i < $minutos;$i++){
            $costeLlamada += 5;
        }
    }
    return "el coste de la llamada es : " . $costeLlamada . "€";
}

echo costeLlamada(10);
?>