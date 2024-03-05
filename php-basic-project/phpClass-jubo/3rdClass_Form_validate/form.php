<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<form class="bg-danger text-white " style="width:500px;position:absolute;left:50%;top:50%;transform:translate(-46%,-16%)" class="form-row bg-danger "  action="process.php" method="post">
    <h1 class="text-center">Login Form</h1>
    <div class="col-10 mb-3 p-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" name="fullname" id="validationDefault01" placeholder="First name" required>
    </div>

    <div class="col-10 mb-3 p-3">
      <label for="fname">Father Name</label>
      <input type="text" class="form-control" name="fatherName" id="fname" placeholder="First name" required>
    </div>


    <div class="col-10 mb-3 p-3">
      <label for="mname">Mother Name</label>
      <input type="text" class="form-control" name="motherName" id="mname" placeholder="First name">
    </div>

    <div class="col-10 mb-3 p-3 ">
      <label for="validationDefaultUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="email" class="form-control" id="validationDefaultUsername" name="email" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="col-10 mb-3 p-3">
      <label for="passowrd">Number</label>
      <input type="number" class="form-control" name ="password" id="passowrd" placeholder="Enter You password" value="Mark" required>
    </div>
  </div>

  <div class="col-10 mb-3 p-3">
      <label for="adress">Adress</label>
      <textarea id="w3review" name="adress" id="adress" rows="4" cols="50">
    </textarea>
    </div>
  </div>


  <button class="btn btn-primary" type="submit">Submit form</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>