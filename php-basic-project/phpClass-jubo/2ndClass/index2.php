<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // $_SESSION["animal"] = "cow";
    // //$_SESSION["color"] = "red";
    // session_unset();
    // //session_destroy();
    // print_r($_SESSION);


    $file = fopen("test.txt","r") or die("File not open");
    echo fgets($file)."<br>";
    fclose($file);


    $_SESSION["name"] = "Arafat Hossain";
    $_SESSION["roll"] = 24;
    //session_unset();
    print_r($_SESSION);
?>
</body>
</html>