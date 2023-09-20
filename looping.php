
<?php
// for loop
    function forlooping($start, $end, $step) {

        if ($start % 2 !== 0) {
            $start++;
        }
        echo "With for loop: ";
        for ($i = $start; $i <= $end; $i += $step) {
            echo $i;
            if ($i < $end) {
                echo ", ";
            }
        }
        echo PHP_EOL;
    }
    forlooping(1, 20, 2);
    

//while
    function whileLooping($start, $end, $step) {
        
        if ($start % 2 !== 0) {
            $start++;
        }
    
        $new = $start;
        echo "With while: ";
        while ($new <= $end) {
            echo "$new, ";
            $new += $step;
        }
        echo PHP_EOL;
    }
    whileLooping(1, 20, 2);
    
    
// do while
function doWhileLooping($start, $end, $step) {
        
    if ($start % 2 !== 0) {
        $start++;
    }

    $current = $start;
    echo "With do while: ";
    do {
        echo "$current, ";
        $current += $step;

    } while ($current <= $end);
    echo PHP_EOL;
}
doWhileLooping(1, 20, 2);


    
?>
