
<?php
//Determine If Two Numbers Add up to a Target Value
function target_value($a,$b,$value){
    foreach($a as $one){
        foreach($b as $two){
            if($one + $two == $value){
                return true;
            }
        }
    }
    return false;
    
}
$a = array(1,2);
$b = array(4,5,6);
echo target_value($a,$b,8);



?>
