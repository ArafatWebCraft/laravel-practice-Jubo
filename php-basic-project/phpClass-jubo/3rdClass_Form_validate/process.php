<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['fullname'];
    $fathername = $_POST['fatherName'];
    $mothername = $_POST['motherName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $adress = $_POST['adress'];
    
    if(empty($name)){
        echo 'Enter you name';
    }else if(empty($fathername)){
        echo 'Enter you fathername';
    }else if(empty($mothername)){
        echo 'Enter you mothername';
    }else if(empty($email)){
        echo 'Enter you email';
    }
    else if(empty($password)){
        echo 'Enter you password';
    }else if(empty($adress)){
        echo 'Enter you adress';
    }
    else{
        echo $name."<br>" . $fathername . "<br>"  . $mothername . "<br>" . $email . "<br>" .$password . "<br>" . $adress;
    }
    
}





// $name = $_GET['fullname'];
// echo $name;



echo $_SERVER['REQUEST_METHOD'];
?>