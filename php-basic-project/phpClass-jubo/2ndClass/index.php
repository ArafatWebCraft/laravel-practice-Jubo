<?php

// $name = array("Rose","Sunflower","Tulip");
// foreach($name as $key => $value){
//     echo $value."<br>";
// }

// echo "Date " . date("Y.m.d") . "<br>";

// date_default_timezone_set("Asia/Dhaka");
// echo "Current Time: " . date("h:i:sa") ;

// string slice
// $str = "I am Good";
// echo substr($str,1,3)."<br>";

// echo strtolower($str)."<br>";
// echo strtoupper($str)."<br>";
// echo str_replace("Good","am",$str);

// $num = 3.7;
// echo round($num);
// date_default_timezone_set("Asia/Dhaka");
// echo "Date: " . date("Y.m.d") . "Time: " . date("h.i.sa")."<br>";
// $str = "Hello Young Tech people.";
// echo strlen($str)."<br>";
// $std = "Hello World";
// echo "The charcter is " .substr($std,0,5)."<br>";

// echo "Range is: ".rand(100,500);

// // Generating and printing 10 random numbers
// for ($i = 0; $i < 10; $i++) {
//     $randomNumber = rand(1,10); // Generates a random number
//     echo $randomNumber . "<br>"; // Prints the random number
// }



// $file = fopen('test.txt','r') or die("Unable to open");
// echo fgets($file);
// fclose($file);
// $file = fopen("test.txt","r") or die("Unable to open file");
// while(!feof($file)){
//     echo fgets($file)."<br>";
// }
// fclose($file);


// echo abs(-3.789);



// $file = fopen("testt.txt","a") or die("Unable to open!");

// $txt = "I love Bangaldesh\n";
// fwrite($file,$txt);
// fclose($file);


// $file = fopen("testt.txt","r") or die("Unable to open!");
// echo fgets($file);
// fclose($file);

// error_reporting(E_ALL);
// ini_get('display_errors',1);
// echo $variable;


// try {
//     $file = fopen("test2.txt","r") or die("Unable to open!");
//     if(!$file){
//         throw new Exception('Failed to open the file');
//     }
// }catch(Exception $e){
//         echo 'Error: ' . $e->getMessage();
//     }

$a = array(30,92,93,49,29);
function second_largest($a){
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
echo second_largest($a);


?>