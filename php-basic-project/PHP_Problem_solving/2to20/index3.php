<?php
$twoDArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

for($row = 0; $row < count($twoDArray);$row++){
    for($col = 0;$col < count($twoDArray[$row]);$col++){
        echo $twoDArray[$row][$col]." ";
    }
    echo '<br>';
}

$newArray = [13,14,15];
$twoDArray[] = $newArray;
