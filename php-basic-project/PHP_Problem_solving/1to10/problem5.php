<?php
$a = 25;
$b = 5;
function GCD($a, $b) {
    if($a == $b){
        return $a;
    }else if($a < $b){
        return GCD($b, $a);
    }else if($a > $b){
        return GCD($b,$a-$b);
    }
}
echo "Total GCD is: ".GCD($a, $b);
?>