<?php
function calculoDeCostoChocolates(int $numeroDeChocolate): float{
    return $costeChocolate = 1 * $numeroDeChocolate;
}
function calculoDeCostoChiclos(int $numeroDeChiclos): float{
    return $costeChiclos = 0.5 * $numeroDeChiclos;
}
function calculoDeCostoCaramelo(int $numeroDeCaramelo): float{
    return $costeCaramelo = 1.5 * $numeroDeCaramelo;
}
function sumaDeChuches(float $chocolate = 0,float $chiclos = 0,float $caramelo = 0): float{
    return $sumaDetodo = $chocolate + $chiclos + $caramelo;
}
$chocolate = calculoDeCostoChocolates(0);
$chiclos = calculoDeCostoChiclos(3);
$caramelo = calculoDeCostoCaramelo(4);

echo "El subtotal es :  Chocolates " . $chocolate . "€  +  Chiclos " . $chiclos . "€  +  Caramelo " . $caramelo . "€";
echo "<br/>";
echo "El total es : " . sumaDeChuches($chocolate,$chiclos,$caramelo) . "€"   


?>