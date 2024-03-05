<?php

$name = array("Rose","Sunflower","Tulip");
foreach($name as $key => $value){
    echo $value."<br>";
}

echo "Date " . date("Y.m.d") . "<br>";

date_default_timezone_set("Asia/Dhaka");
echo "Current Time: " . date("h:i:sa") ;

?>