<?php

$prev = 0;
$current = 1;
$count = 0;

while ($count < 10) {
    echo $prev;
    $next = $prev + $current;
    $prev = $current;
    $current = $next;

    $count++;

    if ($current > 100) {
        break;
    }
    // echo ", ";
    if ($count < 10) {
        echo ", ";
    }
}
?>