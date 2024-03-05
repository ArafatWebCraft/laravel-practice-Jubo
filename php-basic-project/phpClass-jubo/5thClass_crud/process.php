<?php

    include 'connection.php';

    $sql = "INSERT INTO registration (name, email, home_adress,r_password)
    VALUES ('$name', '$email_Adress','$home_adress','$password')";

    if($connection->query($sql)){
        echo 'Data Insearted';
    }
?>

