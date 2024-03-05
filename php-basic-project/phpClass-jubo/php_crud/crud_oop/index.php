<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container d-flex align-items-center  justify-content-center sign_up" >
    
    <p></p>
    <div class="row w-100 ">
        <div class="col mx-auto ">
        <form action="process.php" method="post">
        <h2 class="text-center mb-4 ">Sign Up</h2>
  <div class="form-group">
    <input type="text" class="form-control" name='fname' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name='lname' id="exampleInputPassword1" placeholder="Last Name">
  </div>

  <div class="form-group">
    <input type="email" class="form-control" name='f_email' id="exampleInputPassword1" placeholder="Email">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name='bdate' id="exampleInputPassword1" placeholder="Birth date">
  </div>

  <div class="form-group">
    <input type="number" class="form-control" name='p_number' id="exampleInputPassword1" placeholder="Phone Number">
  </div>

  <div class="form-group">
    <input type="password" class="form-control" name='f_password' id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <input type="password" class="form-control" name='c_password' id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-primary submit w-100 text-center mt-3 ">Submit</button>
</form>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>