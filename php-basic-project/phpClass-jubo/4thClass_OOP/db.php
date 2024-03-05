<?php
class DB{
    public $hostname;
    public $username;
    public $password;
    public $db_name;
    public $connection;
    public function __construct($hostname,$username,$password,$db_name)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->db_name);
        
        if(!$this->connection){
            echo mysqli_error();
        }else{
            echo "Conncetion Succesfully.";
        }
    }

    public function inseartation($name,$roll,$email){
            $sql = "INSERT INTO student (name,roll,email) VALUES('$name','$roll','$email')";
            if(mysqli_query($this->connection,$sql)==true){
                echo 'Data Insearted';
            }else{
                echo mysqli_error();
            }
    }


    public function update($name,$roll,$email){
        $sql = "UPDATE student SET name = '$name',roll='$roll',email='$email'";
        if(mysqli_query($this->connection,$sql)==true){
            echo 'Data Updated';
        }else{
            echo mysqli_error();
        }  
    }
    
    public function delete($id){
        $sql = "DELETE FROM student WHERE id='$id'";
        if(mysqli_query($this->connection,$sql)==true){
            echo 'Data delete';
        }else{
            echo mysqli_error();
        }  
    }
        
    


    
}

$db_connect = new DB('localhost','root','','crud_connect');
//$db_connect->inseartation('Arafat',38,'arafathossain377@gmail.com');
//$db_connect->update('Robel',34,'robial@gmail.com');
$db_connect->delete(0);