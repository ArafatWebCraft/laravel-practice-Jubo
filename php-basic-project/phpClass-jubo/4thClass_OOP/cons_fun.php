<?php

// class Man{
//     public $name;
//     function __construct($fullname)
//     {
//         $this->name = $fullname;
//     }
//     protected function __destruct()
//     {
//         echo 'Hello I am'.$this->name;
//     }
// }

// $test = new Man('Arafat');


class Car{
    public $car_b;
    public $car_m;
    function __construct($brand,$model)
    {
         $this->car_b = $brand;
        $this->car_m = $model;
    }
    function __destruct()
    {
        echo "Car brand ".$this->car_b."\n Car model",$this->car_m;
    }
}
$test = new Car("Toyta","dkk");
?>