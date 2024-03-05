<?php
function array2D($arr) {
    $maxSum = -63;
    for ($i=0;$i<4;$i++){
        for($j=0;$j < 4;$j++){
            $top = array_sum(array_slice($arr[$i],$j,3));
            $mid = $arr[$i+1][$j+1];
            $bottom = array_sum(array_slice($arr[$i+2],$j,3));
            $hourglass = $top + $mid + $bottom;
            if ($hourglass > $maxSum){
                $maxSum = $hourglass;
            }
        }
    }
    return $maxSum;
}

// Example 2D array
$sample_array = [
    [1, 1, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0],
    [1, 1, 1, 0, 0, 0],
    [0, 0, 2, 4, 4, 0],
    [0, 0, 0, 2, 0, 0],
    [0, 0, 1, 2, 4, 0]
];

$result = array2D($sample_array);
echo "Maximum hourglass sum: " . $result;

?>