<?php



function multiple_array($name){
    $array_key = array_keys($name);
    $array_value = array_values($name);
    return [$array_key, $array_value];
}

$name = array("a"=>1, "b"=>2, "c"=>3);
$result = multiple_array($name);
print_r($result);

?>