<?php

// $rows = 5;

// // Upper part of the pattern
// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }

// // Lower part of the pattern
// for ($i = $rows - 1; $i >= 1; $i--) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "* ";
//     }
//     echo "<br>";
// }




// for($i = 0; $i <10; $i++) {
//     for($b=0; $b < 10; $b++) {
//         echo $b.",";
//     }
//     echo "<br>";
// }

// $x = "Hello World! tho yjh";
// $y = explode(" ", $x);

// //Use the print_r() function to display the result:
// print_r($y);


$list = array(2,6,4,9,9,1,5,3);
function isSpecialArray($arr) {
	foreach($arr as $k => $v){
		if($k%2 != $v%2){
			return "false";
	    }   
    }
	return "true";
}

echo isSpecialArray($list);





?>