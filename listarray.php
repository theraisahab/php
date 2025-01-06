<?php

$emp = [
    [1, "Avnish", "Manager", 50000],
    [2, "kapoor", "Salesman", 40000],
    [3, "Kartik", "Computer division", 30000],
    [4, "Anjali", "Driver", 20000],

];
echo "<table border =''1px>";
foreach($emp as list($id , $name, $designation, $salary)){
    echo  "<tr><td>$id </td> <td>$name </td> <td>$designation </td> <td> $salary</td> </tr>";
}

echo "</table";

?>