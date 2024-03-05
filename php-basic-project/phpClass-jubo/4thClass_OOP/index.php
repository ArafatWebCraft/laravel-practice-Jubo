<?php
// class Man{
//     public $name;
//     function message($fullName){
//         $this->name = $fullName;
//         return "Hello I am " .$this->name;
//     }
// }

// $test = new Man();
// echo $test->message("Arafat hossain");

class Man{
    // public $test;
    function message($age){
        // $this->test = $age;
        return "I am ".$age." Years old.";
    }
}

$test = new Man();
echo $test->message(25);


?>