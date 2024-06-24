<?php
    function cuentaNumeros ($numero = 10,$repe){
        for ($x = 0; $x <= $numero;$x += $repe ) {
        if ($numero == 0 ){
            $numero = 10;
            echo $x . "<br/>";
        }elseif($repe == 0){
            $repe = $numero;
            $x = $numero; 
            echo "las repeticiones no pueden ser de 0";
        }else{
            echo $x . "<br/>";
        }
        }
    }
    cuentaNumeros(20,2);
    cuentaNumeros(0,1);
    cuentaNumeros(12,0);
    
?>
