<html>
    <head>
        <?php
        function notaFinal ($nota){
            if ($nota >= 60){
                return "el estudiante es de Primera Division.";
            }
            elseif($nota >= 45 && $nota <= 59){
                return "el estudiante es de Segunda Division.";
            }
            elseif($nota >= 33 && $nota <= 44){
                return "el estudiante es de Tercera Division.";
            }
            else{
                return "el estudiante ha reprobado.";
            }
        }

        echo notaFinal (80) . "<br/>" ;
        echo notaFinal (56) . "<br/>";
        echo notaFinal (35) . "<br/>";
        echo notaFinal (20) . "<br/>";
        ?>
    </head>
</html>