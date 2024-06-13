<html >
    <head>
    <?php
    function cuenta ($numero,$repe){
        for ($x = 0; $x <= $numero;$x = $x + $repe ) {
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
    cuenta(20,2);
    cuenta(0,1);
    cuenta(12,0);
    
?>
    <head>
<html>
