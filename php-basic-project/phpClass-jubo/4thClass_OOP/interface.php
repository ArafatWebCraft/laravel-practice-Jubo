<?php
interface Man{
    public function message();
}
class myInfo implements Man{
    public function message()
    {
        return "Hello JU";
    }
}
$test = new myInfo();
echo $test->message();