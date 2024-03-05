<?php
$a = array(39,49,05,53,30);
function secont_largest($a){
    $largest = 0;
    $s_large = 0;
    foreach($a as $value){
        if($value > $largest){
            $s_large = $largest;
            $largest = $value;
        }else{
            if($value > $s_large){
                $s_large = $value;
            }
        }
    }
    return $s_large;
}

echo secont_largest($a);
?>