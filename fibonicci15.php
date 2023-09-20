<?php

function fibonicci($n){
$prev = 0;
$current = 1;


    for($i = 1; $i<= $n; $i++){
        echo "$prev";

        $new = $prev + $current;
        $prev = $current;
        $current = $new;

        if($i <= $n){
           echo ", "; 
        }

        
    }

}
fibonicci(15);

?>
