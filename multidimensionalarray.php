<?php
$emp = [
    [1, "Avnish", "Manager", 50000],
    [2, "kapoor", "Salesman", 40000],
    [3, "Kartik", "Computer division", 30000],
    [4, "Anjali", "Driver", 20000],

];

// for($row = 0; $row <4; $row++){
//     for($col = 0; $col <4; $col++){
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }

//for each loop to print the array data
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";

echo "
    <tr>
        <th>Emp id. </th>
        <th>Emp Name </th>
        <th>Emp Designation </th>
        <th>Emp Salary </th>
    </tr>
";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>  $v2  </td> ";
    }
    echo "</tr>";
}

echo "</table";

echo "<pre>";
print_r($emp);
echo "</pre>";
?>