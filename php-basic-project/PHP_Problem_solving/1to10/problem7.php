<?php
function str_count($word){
    $count = count($word);
    if ($count==1){
        return True;
    }
    
}
$words = ['Arafat','hossain','rogin'];
$output = str_count($words);
echo $output;
?>