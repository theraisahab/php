<?php


// $a = array(10,10,10);
// echo "<pre>";
// print_r($a);

// $colors = array("greeen", "red", "blue", "yellow");

// echo "<pre>";

// // print_r($colors);

// for($i =0; $i <4; $i++){
//     echo $colors[$i] . "<br>";
// }

$age = array(
    "Avnish" => 21,
    "Anjali" => 20,
    "Tushar" => 20.5,
    "Allen" => 30,
    "Name" => "Kapoor"
);

echo $age["Avnish"]. "<br>";
echo $age["Anjali"]. "<br>";
echo $age["Tushar"]. "<br>";
echo $age["Allen"]. "<br>";

echo "<pre>";

var_dump($age);

echo "</pre>";

echo $age['Allen']. "<br>";
echo $age['Avnish']. "<br>";
echo $age['Tushar']. "<br>";
echo $age['Name']. "<br>";

print_r($age);




?>