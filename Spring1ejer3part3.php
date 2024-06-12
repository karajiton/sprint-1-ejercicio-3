<html>
    <head>
        <?php
        $x = 2;
        $y = 5;
        $n = 4.8;
        $m = 2.4;
        echo $x . "<br/>", $y . "<br/>";
        echo $x + $y . "<br/>";
        echo $x - $y . "<br/>";
        echo $x * $y . "<br/>";
        echo $x % $y . "<br/>";
        echo $n . "<br/>", $m . "<br/>";
        echo $n + $m . "<br/>";
        echo $n - $m . "<br/>";
        echo $n * $m . "<br/>";
        echo $n % $m . "<br/>";
        echo "el doble de cada variable" . "<br/>";
        echo $x * 2 . "<br/>";
        echo $y * 2 . "<br/>";
        echo $n * 2 . "<br/>";
        echo $m * 2 . "<br/>";
        echo "la suma de todas las variables" . "<br/>"; 
        echo $x + $y + $n + $m . "<br/>";
        echo "el producto de todas las variables" . "<br/>"; 
        echo $x * $y * $n * $m . "<br/>";
        function calculadora ($numero1, $numero2,$char){
            switch ($char) {
                case '+' :
                    return $numero1 + $numero2;
                    break;
                case '-':
                    return $numero1 - $numero2;
                    break;
                case '*':
                    return $numero1 * $numero2;
                    break;
                case '/':
                    if($numero2 == 0){
                        return "la division no puede ser con 0";
                    }else{
                        return $numero1 / $numero2;
                    }
                    break;
                default:
                    return "operacion no valida";        
            } 
        }
        
        echo calculadora (6, 12 , '+') . "<br/>";
        echo calculadora (6, 12 , '-') . "<br/>";
        echo calculadora (6, 12 , '*') . "<br/>";
        echo calculadora (6, 12 , '/') . "<br/>";
        echo calculadora (6, 0 , '/') . "<br/>"; 
        
        ?>
    </head>
</html>