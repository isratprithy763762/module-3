<?php

function addManyNumber($a, $b, ...$arr) {
    $sum = 0;

    $sum = $sum + $a;
    $sum = $sum + $b;

   

    for($i = 0; $i < count($arr); $i++) {
        $sum = $sum + $arr[$i];
    }

    return $sum;
}

$o = addManyNumber(1,5,2,7,4,8,9,10);
echo "$o";

