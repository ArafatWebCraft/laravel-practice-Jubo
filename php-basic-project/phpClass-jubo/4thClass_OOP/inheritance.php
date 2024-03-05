<?php
// class Man{
//     public function message($fullname){
//         return 'Hello World'.$fullname;
//     }
// }
// class Child extends Man{
//     public $n_age;
//     public $old_func;
//     public function test($age){
//         $this->n_age = $age;
//         $this->old_func = $this->message('Arafat');
//         //return $this->message('Arafat')."Age is".$this->n_age;
//         return 'Name is'. $this->old_func."Age is ".$this->n_age;
//     }
// }

// $name = new Child();
// echo $name->test(39);

// class Man{
//     public function message(){
//         return "Arafat";
//     }
// }


class Man{
    const TEST_MESSAGE = 'Hello world';
}
echo Man::TEST_MESSAGE;