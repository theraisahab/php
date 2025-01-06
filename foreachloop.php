<?php


//Normal array
$colors = [
    "red",
    "green",
    "blue"
];
foreach($colors as $value){

    echo $value . "<br>";

}


//associative array

$age = [
    "Avnish" => 21,
    "Anjali" => 20,
    "Annu" => 19,
];

foreach($age as $key => $value){
    echo "$key = $value <br>";
}


?>