<?php

// class man{
//     public $name;
//     function message($name){
        
//         $this -> name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
// }


// $test = new man();
// $banana = new man();
// $test->message('apple');
// $banana->message('banana');
// echo $test->get_name()."<br>";
// echo $banana->get_name();

// class Man{
//     public $name;
//     function get_name($name){
//         $this->name = $name;
//     }
// }
// $test = new Man();
// $test->get_name('Arafat');
// echo $test->name;

// class car{
//     public $name;
//     public $country;
//     function __construct($name)
//     {
//         $this->name = $name;
//     }
//     function get_name($country){
//         $this->country = $country;
//         return $this->name.$this->country;
//     }
// }
// $test = new car('I am form bangladesh.');
// echo $test->get_name('Bangladesh');

// class Car{
//     public $color;
//     public $name;
//     function __construct($name,$color)
//     {
//         $this->color = $color;
//         $this->name = $name;
//     }
//     function get_name(){
//         return $this->name;
//     }
//     function get_color(){
//         return $this->color;
//     }
// }

// $test = new Car('Toyta','red');
// echo $test->get_name();


// class Car{
//         public $color;
//         public $name;
//         function __construct($name,$color)
//         {
//             $this->color = $color;
//             $this->name = $name;
//         }
//         function __destruct()
//         {
//             echo "Car color is: ".$this->color." Car name ".$this->name;
//         }
// }
// $test = new Car('Toyta','red');


// class Fruits{
//     public $name;
//     public $color;
//     public $weight;
//     function get_name($n){
//         $this->name = $n;
//     }
//      function f_color($n){
//         $this->color = $n;
//     }
//      function f_weight($n){
//         $this->weight = $n;
//     }
// }

// $fruit = new Fruits();
// $fruit->get_name('Orange');
// $fruit->f_color('red');
// $fruit->f_weight("38");

class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($name,$age,$salary)
    {
        
    }
}


    

