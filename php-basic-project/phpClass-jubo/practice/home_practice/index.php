<?php

//session_start();

//date_default_timezone_set("Asia/Dhaka");
//echo "Date: " .date("Y-m-d")." Time: ". date("H:i:sa");

//$d = mktime(10,15,39,2,5,2000);
//echo "Date: " .date("Y-m-d:h:i:sa",$d);

//$d = strtotime("+60 days");
//echo "Date: " .date("Y-m-d:h:i:sa",$d);

// $stardate = strtotime("Saturday");
// $end_date = strtotime("+3 months",$stardate);
// while($stardate < $end_date){
//     echo date("M d",$stardate);
//     $stardate = strtotime("+1 weeks",$stardate);
// }


// $sum = 0;
// $array  = [38,93,94,92];
// for($i=0;$i < count($array);$i++){
//     $sum = $sum + $array[$i];
// }
// echo $sum."<br>";
// $array[1] = 64;
// var_dump($array);
// $slice = 4;
// $end = 7;

// $name = "I am arafat hossain.";
// echo str_replace($name,"am","is");

// $arr = array("Red","Green","Blue","Orangw");
// print_r(str_replace("Red","blue",$arr,$i));
// echo "<br>"."Replacement: ".$i;



// $b = "Arafat";
// $a = array("Red","Green","Blue");
// echo is_array($b) ? "This is array":"This is not array";

// $count = 1000000;
// $test3 = "I am not arrray";
// $test = array("Am","an","Array");
// $object_arr = (object) array('im'=>'not','going'=>'To','Be'=>'Array');
// $test4 = 42;


// $i = $start_time = $end_time = 0;

// $start_time= microtime(true);
// for($i = 0;$i < $count;$i++){
//     if(!is_array($test) || is_array($object_arr) || is_array($test4) || is_array($test3)){
//         echo "error";
//         break;
//     }
// }
// $end_time = microtime(true);

// echo 'is Array: '.($end_time - $start_time)."\n";



//$_SESSION["animal"] = "Elephant";
// $test = array('39','39','83');
// echo is_array($test) ? "Is the array" : "Is not array";


// $name = "Arafat hossain";
// echo substr($name,3,5)

// $name = "This, is Arafat, Hossain.";
// print_r(explode(",",$name,3));


// $phase = "Your should Fruits, Vegetable, Fiber every day.";
// $fruits = ["Fruits","Vegetable","Fiber"];
// $Yoummy = ["Pizza","Burger","Ice cream"];

// echo str_replace($fruits,$Yoummy,$phase);
// $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
// $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
// echo $onlyconsonants;


// $address = ["Brahhmanbaria","Banchharampur",39,'name'=>'Arafat'];
// $arr = ["Abdul Addod","Rahima Begum"];
// $sum = array_merge($address,$arr);
// print_r($sum);

// $begganing = "Foo";
//$end = array(1=>"Bar");
//// $sum = array_merge((array)$begganing,$end);
//// print_r($sum);
//
// $arr = "This is arafat";
// $total = array_merge(array($arr),$end);
// print_r($total);

//$arr = [83,39,39,92];
//$arr_name = ["Arafat","Rifat","Rony","shiblu","Shafat"];
////$arr_func = array_slice($arr_name,-3,2);
////print_r($arr_func);
//$arr_search = ar($arr);
//print_r($arr_search);


//$a = 20;
//$B = 5.56;
//$c = null;
//$e = true;
//$f = "";
//$a = (string) $a;
//$B = (string) $B;
//$c = (int) $c;
//$e = (string) $e;
//$f = (bool) $f;
//var_dump($f);
//var_dump($e);
//var_dump($c);
//var_dump($a);
//var_dump($B);

// class man{
//     public $name;
//     public function __construct($name)
//     {
//      $this->name = $name;
//     }
//     public function message(){
//         return $this->name;
//     }

// }
// $test  = new man('arafat');
// echo $test->message();


// class Employee {
//     public $name;
//     public $age;
//     public $salary;

//     public function __construct($name, $age, $salary) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->salary = $salary;
//     }

//     public function Info($ta = 0, $td = 0) {
//         echo '<h1>Employee Information</h1>';
//         echo '<h2>Employee name:' . $this->name . '</h2>';
//         echo '<h2>Employee age:' . $this->age . '</h2>';
//         echo '<h2>Employee salary:' . $this->salary . '</h2>';
//     }
// }

// class Manager extends Employee {
//     public $ta;
//     public $td;
//     public $totalSalary;

//     public function Info($ta = 0, $td = 0) {
//         // Call the parent class Info method
//         $this->ta = $ta;
//         $this->td = $td;
//         $this->totalSalary = $this->salary + $this->ta + $this->td;
//         echo '<h1>Manager Information</h1>';
//         echo '<h2>Manager name:' . $this->name . '</h2>';
//         echo '<h2>Manager age:' . $this->age . '</h2>';
//         echo '<h2>Manager salary:' . $this->totalSalary . '</h2>';
//     }
// }

//  // Call the manager's Info method with dynamic $ta and $td values

// $e = new Employee('Robin',39,3983);
// $e->Info();
// $m = new Manager('Arafat',33,20000);
// $m->Info(500,1000);

// interface Man{
//     function message($name,$roll);
// }
// interface Student{
//     function result($mark,$total);
// }

// class childClass implements Man,Student{
//     public function message($name,$roll){
//         echo 'Your name is'.$name.'roll is '.$roll;
//     }
//     public function result($mark, $total)
//     {
//         echo $mark + $total;
//     }
// }

// $test = new childClass();
// $test->message('arafat',76);
// $test->result(76,78);



// trait Message{
//     public $name;
//     public function traitname($name){
//         $this->name = $name;
//         return 'Hello world.';
//     }
// }
// trait return_m{
//     public function trait_name2(){
//         return 'This is Arafat';
//     }
// }

// class MyInf{
//     use Message;
//     use return_m;
//     function get(){
//         echo 'My name is'.$this->name;
//     }
// }
// $test = new MyInf();
// echo $test->traitname('Arafat');
// echo $test->get();


// class ClassName{
//     public $name;
//     public static function message($name){
//         echo 'This is Arafat'.$name;
//     }
//     public function __construct()
//     {
//         self::message('I am form bangladesh.');
//         echo 'not doen'.$this->name;
//     }
// }
// new ClassName();

// class domain{
//     protected static function getWebsite(){
//         return 'W3Schools.com';
//     }
// }
// class domain2 extends domain{
//     public $websitename;
//     public function __construct()
//     {
//         $this->websitename = domain::getWebsite();
//     }
// }
// $test = new domain2();
// echo $test->websitename;
// interface Classname{
//     function message($name,$roll) ;
// }
// interface Classname2{
//     function message2($age,$sasary);
// }

// class ChildNode implements Classname,Classname2{
//     public function message($name, $roll)
//     {
//         echo 'Your name is $name and roll is $roll'.'<br>';
//     }
//     public function message2($age, $sasary)
//     {
//         echo 'Your age is .$age and salary is .$sasary';
//     }
// }
// $test = new ChildNode();
// $test->message('Arafat',9);
// $test->message2(38,38833);


// class Fruit{
//     public $name;
//     public $color;
//     public $total;
//     public function __construct($name,$color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function MyInfo(){
//         echo "The Fruit is {$this->name} And color is {$this->color}";
//     }
// }

// class ClassChild extends Fruit{
//     public $weigh;
//     public function __construct($name,$color,$weigh)
//     {
//         $this->name = $name;
//         $this->color = $color;
//         $this->weigh = $weigh;
//     }
//     public function message(){
//         echo "The Fruit is {$this->name}, The color is {$this->color}, The weight is {$this->weigh}.";
//         $this->MyInfo();
//     }
// }   
// $test = new ClassChild('Banana','Blue',39);
// $test->message();

// class Myclass{
//     private $myproperty = 'Arafat';
//     public function get_property(){
//         return $this->myproperty;
//     }
// }

// $obj = new Myclass();
// $value = $obj->get_property();
// echo $value;

// class Fruit {
//     public $name;
//     public $color;
//     public $total;

//     public function __construct($name, $color) {
//         $this->name = $name;
//         $this->color = $color;
//         $this->total = $name + $color;
//     }

//     public function message() {
//         echo "The fruit color is {$this->name}, color is {$this->color}, and total is {$this->total}";
//     }
// }

// class MyInfo extends Fruit {
//     public $weight;

//     public function __construct($name, $color, $weight) {
//         parent::__construct($name, $color); // Call the parent constructor
//         $this->weight = $weight;
//     }

//     public function message2() {
//         echo "The fruit color is {$this->name}, color is {$this->color}, weight is {$this->weight}, and total is {$this->total}";
//     }
// }

// $test = new MyInfo(20, 20, 20);
// $test->message2(); // Calls message2 from MyInfo
// $test->message(); // Calls message from Fruit

// $b = "Arafat";
// $a = array("Red","Green","Blue");
// echo is_array($b) ? "This is array":"This is not array";

// $b = 'Arafat';
// $a = array("Red","Green","Blue");
// $c = is_array($b) ? "This is Array" : "This in not a array";
// echo $c;
// define('araft','hossain');
// echo araft;

// $arr = [10, 20, 39, 59, 54];
// $arLength = sizeof($arr);
// $n = 500; // Assuming you want to insert 500
// $k = 2;

// // Ensure that $k is a valid index

//     // Shift elements to make space for the new element
//     for ($i = $arLength - 1; $i >= $k; $i--) {
//         $arr[$i + 1] = $arr[$i];
//     }

//     // Insert the new element at the specified index
//     $arr[$k] = $n;

// echo "<pre>";
// print_r($arr);
// $name = "This, is Arafat, Hossain.";
// print_r(explode(",",$name,3));
// $data = "foo:*:1023:1000::/home/foo:/bin/sh";
// list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

// echo "<pre>";
// print_r($gecos);

// $arr = [38,3,834,30,39];
// $arr2 = ['Arafat','hossain'];
// $sum  = array_merge($arr,$arr2);
// echo '<pre>';
// print_r($sum);
// $arrw = ['39','edi'];
// $arr = [39,04,03,20,39];
// $arr_push = array_slice($arr,2);
// echo "<pre>";
// print_r($arr_push);
//
////echo $_SERVER['HTTP_CONNECTION'];
//$str = array('red','green','blue','pinaple');
//$replace = str_replace($str,'','This is bangladesh');
//print_r($replace);
//
//$phrase  = "You should eat fruits, vegetables, and fiber every day.";
//$healthy = array("fruits", "vegetables", "fiber");
//$yummy   = array("pizza", "beer", "ice cream");
//
//$newphrase = str_replace($healthy, $yummy, $phrase);
//print_r($newphrase);
//
//class Fruit{
//    private $name = 'arafat';
//    public  function  __construct()
//    {
//        echo $this->name;
//    }
//    function arafat()
//    {
//        echo "The name is ".$this->name;
//    }
//}
//$test = new Fruit();
//$test->arafat();
//
//class  A
//{
//    function foo()
//    {
//        if(isset($this)){
//            echo '$this is define';
//            echo get_class($this);
//            echo ")\n";
//        }else{
//            echo "\this is not define.\n";
//        }
//    }
//}
//
//class  B
//{
//    function  bar()
//    {
//        A::foo();
//    }
//}
//$test = new B();
//$test->bar();
//A::foo();

//class  User
//{
//    public $id;
//    public $name;
//    public function __construct(string $name,int $id)
//    {
//        $this->id = $id;
//        $this->name = $name;
//    }
//}
//$user = new User('arafat',3);
//var_dump($user->name);
//var_dump($user->id);

//class Shape
//{
//    public $numberOfSides;
//    public $name;
//    public  function  setNumberOfSide(int $numberOfSides)
//    {
//        $this->numberOfSides = $numberOfSides;
//    }
//    public function setName(string $name)
//    {
//        $this->name = $name;
//    }
//    public function getNumberOfSide(int $numberOfSides)
//    }
//
//}

//spl_autoload_register(function ($class){
//    include $class.'.php';
//});
//
//$test = new First();
//$test->runFirst();

//class Autoloader
//{
//    public static function register()
//    {
//        spl_autoload_register(function ($class){
//            $file = str_replace()
//        });
//    }
//}
//class Fruit {
//    public $name;
//    public $color;
//    public function __construct($name, $color) {
//        $this->name = $name;
//        $this->color = $color;
//    }
//    public function intro() {
//        echo "The fruit is {$this->name} and the color is {$this->color}.";
//    }
//}

// Strawberry is inherited from Fruit
//class Strawberry extends Fruit {
//    public function message() {
//        parent::intro();
//        echo "Am I a fruit or a berry? ".$this->color;
//    }
//}
//$strawberry = new Strawberry("Strawberry", "red");
//$strawberry->message();
////$strawberry->intro();
///
///
//
//class  Bankacoount
//{
//    private $banance;
//    public $testing;
//    public function __construct($amount)
//    {
//        $this->banance = $amount;
//    }
//    public function getBalance()
//    {
//        return $this->banance;
//    }
//    public function deposit($amount)
//    {
//        if ($amount > 0){
//            $this->banance+=$amount;
//        }
//        return $this;
//    }
//    public function withdraw($amount)
//    {
//        if ($amount > 0 && $amount < $this->banance){
//            $this->banance-=$amount;
//            $this->testing = true;
//        }
//        if ($this->testing===true){
//            echo "you can withdraw";
//        }else{
//            echo "You not withdrow";
//        }
//    }
//}
//class  checkingAccount extends Bankacoount
//{
//    private $minBlance;
//    public $ban;
//    public function __construct($minBlance)
//    {
//        $this->ban = $banance;
//        $this->ban = parent::__construct(10000);
//        if($this->ban > 0 && $this->ban > $minBlance){
//            $this->minBlance = $minBlance;
//        }
//    }
//    public function __construct($amount,$minBlance)
//    {
//        if ($amount > 0 && $amount > $minBlance) {
//            parent::__construct(40000);
//            $this->minBlance = $minBlance;
//        }else {
//           throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
//       }
//    }

//}
//$test = new checkingAccount(1000);
//print_r($test->deposit(500));
//$test->withdraw(10500);
//$test = new Bankacoount(10000);
//var_dump($test->deposit(200));
//var_dump($test->withdraw(1000));
//class CheckginAccount extends Bankacoount
//{
//    private $minBalance;
//
//    public function __construct($amount, $minBalance)
//    {
//        if ($amount > 0 && $amount >= $minBalance) {
//            parent::__construct(30000);
//            $this->minBalance = $minBalance;
//        } else {
//            throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
//        }
//    }
//
//    public function withdraws($amount)
//    {
//        $canWithdraw = $amount > 0 && $this->getBalance() - $amount > $this->minBalance;
//        if ($canWithdraw) {
//            parent::withdraw(200);
//            return "You can withdrow".$canWithdraw;
//        }
//        return false;
//    }
//}
//$result = new CheckginAccount(300000,3399);
//var_dump($result->withdraws(110));
//$result->deposit(1000);





?>

