<?php

// $color = ["red", "green", "blue", "yellow"];

$color = [
    'a' => 'red',
    'b' => 'blue',
    'c' => 'green',
    'd' => 'yellow'
];


$newColor = array_slice($color, 1,3);
echo "<pre>";
print_r($newColor);
echo "<pre>";   
?>