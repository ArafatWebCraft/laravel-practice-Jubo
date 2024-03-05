<?php
include 'connection.php';
$id =  $_GET['id'];
$sql = "DELETE FROM registration WHERE id='$id' ";
$result = $connection->query($sql);

if($result){
    echo 'Delete Succesfully';
}

?>