<?php
$x = 10;
$y = 20;
function test(){
    global $x, $y; 
    $x += $y;
}
test();

echo "Variable x outside function : $x" ;



?>