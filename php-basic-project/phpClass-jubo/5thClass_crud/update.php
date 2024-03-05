<?php

include 'connection.php';
$id =  $_GET['id'];
$sql = "SELECT * FROM registration WHERE id='$id' ";
$result =mysqli_query($connection,$sql);
$details = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">PHP Form UPDATE</h1>

<div class="container">
    <div class="row">
        <div class="col-6">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Your name</label>
    <input type="text" class="form-control" value="<?php echo $details['name']; ?>" id="exampleInputEmail1" name="fullname" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Adress</label>
    <input type="email" class="form-control" value="<?php echo $details['email']; ?>" name="email" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Home Adress</label>
    <input type="text" class="form-control" value="<?php echo $details['home_adress']; ?>" name="homeAdress" name="homeAdress" id="exampleInputPassword2">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" value="<?php echo $details['r_password']; ?>" name="password" name="homeAdress" id="password">
  </div>

  <button type="submit" name="register" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>

    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<?php


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
   $sql = "UPDATE registration SET name='$name',email='$email_Adress',home_adress='$home_adress',r_password='$password' WHERE id='$id'   ";

    if($connection->query($sql)){
        echo 'Data updated';
    }
}




?>