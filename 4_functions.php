<?php
    /* We use function to enhance the code reusability */ 
    
    function tableGenerate($num){
        for($i = 1; $i <= 10; $i++){
            $res = $num * $i;
            echo "$num X $i = $res <br>";
        }
    }

    $number = 5;
    tableGenerate($number);

?>