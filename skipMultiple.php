
<?php
// for loop
    function skip(){

       for($i=1; $i<=50; $i++){

            if($i%5 === 0){
                continue;
            };

            if($i<=50){
                echo "$i, ";
            };
            
        }
    }
    skip();

    
?>
