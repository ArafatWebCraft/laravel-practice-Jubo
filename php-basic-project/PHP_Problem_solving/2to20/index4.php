<?php
function rotateLeft($d, $arr) {
    $n = count($arr);
    $rotations = $d % $n;
    $rotated_arr = array_merge(array_slice($arr, $rotations), array_slice($arr, 0, $rotations));
    return $rotated_arr;
}

// Example usage:
$input = explode(" ", readline());
$n = (int)$input[0] ?? 0;
$d = (int)$input[1] ?? 0;

$arr = explode(" ", readline());
$arr = array_map('intval', $arr);

$result = rotateLeft($d, $arr);
echo implode(" ", $result);
