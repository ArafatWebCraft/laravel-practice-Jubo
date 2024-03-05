<?php
if (isset($_POST['register'])) {
    // Retrieve form data
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s_username = $_POST['s_username'];
    $phone = $_POST['phone'];
    $c_password = $_POST['c_password'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    // Database connection parameters
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "user";

    // Create a connection to the database
    $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the form data into the database
    $data = "INSERT INTO registration (fname, email, password, s_username, phone, c_password, gender, country) 
            VALUES ('$fname', '$email', '$password', '$s_username', '$phone', '$c_password', '$gender', '$country')";

    if (mysqli_query($conn, $data)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $data . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
