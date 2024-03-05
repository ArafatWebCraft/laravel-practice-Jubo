<?php

class DB_CONNECT {
    public $hostname;
    public $username;
    public $password;
    public $db_name;
    public $connection;

    public function __construct($hostname, $username, $password, $db_name) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
        $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name);
    }

    public function insert_data($name, $email, $designation, $salary, $joinging_Date) {
        $query = "INSERT INTO employees (name, email, designation, salary, joinging_Date) VALUES ($this->name, $email, $designation, $salary, $joinging_Date)";

        $stmt = mysqli_prepare($this->connection, $query);
        mysqli_stmt_bind_param($stmt, "ssdss", $name, $email, $designation, $salary, $joinging_Date);

        if (mysqli_stmt_execute($stmt)) {
            echo "Inserted Successfully";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }
}

$db_connection = new DB_CONNECT('localhost', 'root', '', 'crud_connect');
$db_connection->insert_data('mihid', 'Robi@gmail.com', 'design officer', 3843900, '1/10/2024');
?>
