<?php
$a = ['orange', 'banana', 'grapes', 'apple'];

$b = ['carrot', 'potato'];

$newArray = array_replace($a, $b);


echo "<pre>";
print_r($newArray);
echo "</pre>";

?>