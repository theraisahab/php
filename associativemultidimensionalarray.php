<?php

$marks = [
    "krishna" => ["Physics" => 85, "Chemistry" => 90, "Maths" => 59],
    "Sukesh" => ["Physics" => 53, "Chemistry" => 25, "Maths" => 59],
    "Anjali" => ["Physics" => 55, "Chemistry" => 43, "Maths" => 26],
];
echo "<pre>";
print_r($marks);
echo "</pre>";

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
<tr>
    <th> Student Name </th>
    <th> Physics</th>
    <th> Chemistry </th>
    <th> Maths </th>

";


foreach($marks as $key => $v1){
    echo "<tr>
                <td>$key</td>";

    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}
?>