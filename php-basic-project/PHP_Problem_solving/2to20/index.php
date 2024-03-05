<?php
function  arr_count($var)
{
    $count = array_count_values($var);
    $res = 0;
    foreach ($count as $item) {
        if ($item==1){
            return -1;
        }
        $res= $res + ceil($item/3);
        return $res;
    }
}
$var = [2,1,2,2,3,3];
echo arr_count($var);