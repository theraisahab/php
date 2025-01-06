<?php

// function name(){
//     echo "Avnish";
// }

// name();

// function sum($a, $b){
//     echo $a + $b;
// }

// sum(1, 2);

function sum ( $math, $eng, $sc){
    $s = $math + $eng + $sc;
    return $s;
}

function percentage($st){
    $per = $st / 3;
    echo $per;
}

$total = sum(10,20,35);



percentage($total);


 ?>


