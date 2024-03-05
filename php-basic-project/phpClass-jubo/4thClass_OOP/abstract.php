<?php

abstract class Man{
    abstract public function message();
}


class myInfo extends Man{
    public function message()
    {
        return 'Hello Bangladesh';
    }
}
class testInfo extends Man{
    public function message()
    {
        return 'Hello Savar';
    }
}

$test = new myInfo();
echo $test->message("Arafat");
$test = new testInfo();
echo $test->message();

?>