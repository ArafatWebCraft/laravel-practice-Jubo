<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'crud_connect';
$connection = new mysqli($hostname,$username,$password,$db_name);



if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['fullname'];
    $email_Adress = $_POST['email'];
    $home_adress = $_POST['homeAdress'];
    $password= $_POST['password'];
    if(empty($name)){
        echo 'Enter you name';
    }
    if(!filter_var($email_Adress,FILTER_VALIDATE_EMAIL)){
        echo 'Enter Your valid email';
    }
    if(empty($home_adress)){
        echo 'Enter Your home adresss';
    }
    if(empty($password)){
        echo 'Enter Your password';
     }
}
?>