<html>
    <head>
        <?php
        $dedo = true;
        function isBitten($dedo){
            $morder = rand(1,2);
            if ($morder == 1){
                return $dedo = true;
                
            }else{
                return $dedo = false;
            }
            
        }
        $suerte = isBitten($dedo);
        if ($suerte == true){
            echo "charlie te ha mordido";
        }else{
            echo "te salvaste esta vez";
        }
        ?>
    </head>
</html>