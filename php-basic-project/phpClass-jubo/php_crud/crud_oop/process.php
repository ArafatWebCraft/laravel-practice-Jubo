<?php

class crud_connect {
    public $username;
    public $host_name;
    public $password;
    public $connection;
    public $db_name;
    public $fb_fname;
    public $fb_lname;
    public $fb_email;
    public $fb_bdate;
    public $fb_p_number;
    public $fb_f_password;
    public $fb_c_password;

    public function __construct($host_name, $user_name, $password, $db_name) {
        $this->host_name = $host_name;
        $this->username = $user_name;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->connection = new mysqli($this->host_name, $this->username, $this->password, $this->db_name);

        // Initialize properties with values from $_POST
        $this->fb_fname = isset($_POST['fname']) ? $_POST['fname'] : '';
        $this->fb_lname = isset($_POST['lname']) ? $_POST['lname'] : '';
        $this->fb_email = isset($_POST['f_email']) ? $_POST['f_email'] : '';
        $this->fb_bdate = isset($_POST['bdate']) ? $_POST['bdate'] : '';
        $this->fb_p_number = isset($_POST['p_number']) ? $_POST['p_number'] : '';
        $this->fb_f_password = isset($_POST['f_password']) ? $_POST['f_password'] : '';
        $this->fb_c_password = isset($_POST['c_password']) ? $_POST['c_password'] : '';
    }

    public function insert_data($db_fname, $db_lname, $db_email, $db_bdate, $db_p_number, $db_f_password, $db_c_password) {
        
        
        $sql = "INSERT INTO oop_connet($db_fname, $db_lname, $db_email, $db_bdate, $db_p_number, $db_f_password, $db_c_password) VALUES ('$this->fb_fname', '$this->fb_lname', '$this->fb_email', '$this->fb_bdate', '$this->fb_p_number', '$this->fb_f_password', '$this->fb_c_password') ";
        
        
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(empty($this->fb_fname)){
                echo 'please enter Your name';
            }else if(empty($this->fb_lname)){
                echo 'please enter Your lname';
            }else if(empty($this->fb_email)){
                echo 'please enter Your email';
            }else if(!filter_var($this->fb_email,FILTER_VALIDATE_EMAIL)){
                echo 'please enter Your right email';
            }else if(empty($this->fb_bdate)){
                echo 'please enter Your birth date';
            }else if(empty($this->fb_p_number)){
                echo 'please enter Your phone number';
            }else if(empty($this->fb_f_password)){
                echo 'please enter Your password';
            }else if(empty($this->fb_c_password)){
                echo 'please enter Your con passowrd';
            }else if(!($this->fb_f_password === $this->fb_c_password)){
                echo 'please enter Your right password';
             }
            // else if($this->connection->query($sql)){
            //     echo 'Data inserted';
            // }else{
            //     echo 'Data not inserted';
            // }
        }
        
    }
    
}

// class Displlay extends crud_connect{
//     public function display_data(){
//         $sql = "SELECT * FROM oop_connet";
//         $result = mysqli_query($this->connection,$sql);
//         $data_result  = $result->fetch_all(MYSQLI_ASSOC);
//     }
//}

// Example usage
$test = new Displlay('localhost', 'root', '', 'crud_connect');
$test->insert_data('first_name', 'last_name', 'email', 'birth_date', 'phone_number', 'f_password', 'c_password');

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        thead,tr,th,td{
            border:1px solid black;
        }
        th,tr,td{
            text-align: center;
        }
    </style>
</head>
<body>



<div class="container d-flex justify-content-center align-items-center " style="height:100vh;">
    <div class="row w-100 ">
        <div class="col m-auto ">

        <table border="1px" class="table">
  <thead>
    
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">email</th>
      <th scope="col">birth date</th>
      <th scope="col">phone number</th>
      <th scope="col">password</th>
      <th scope="col">c password</th>
      <th scope="col">All btn</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    class Displlay extends crud_connect{
        public function display_data(){
            $sql = "SELECT * FROM oop_connet";
            $result = mysqli_query($this->connection,$sql);
            $data_result  = $result->fetch_all(MYSQLI_ASSOC);
            foreach($data_result as $data){?>
            
    <tr>
        <th scope="row"><?php echo $data['id'] ?></th>
        <td><?php echo $data['first_name'] ?></td>
        <td><?php echo $data['last_name'] ?></td>
        <td><?php echo $data['email'] ?></td>
        <td><?php echo $data['birth_date'] ?></td>
        <td><?php echo $data['phone_number'] ?></td>
        <td><?php echo $data['f_password'] ?></td>
        <td><?php echo $data['c_password'] ?></td>
        <td>
        <a class="btn bg-danger" href="">Edit</a>
        <a class="btn bg-danger" href="">Delete</a>
        <a class="btn bg-danger" href="">Create</a>


        </td>
    </tr>
    <?php }
        }
    }
    $test->display_data();
    ?>
  </tbody>
</table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php


?>