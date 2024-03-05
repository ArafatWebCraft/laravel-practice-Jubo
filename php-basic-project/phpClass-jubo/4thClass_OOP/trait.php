<?php
trait TraitName{
    public function message(){
        return 'Hello World';
    }
}
trait TraitName2{
    public function message2(){
        return 'Hello world 2';
    }
}

class Info{
    use TraitName;
    use TraitName2;
}
$test = new Info();
echo $test->message();