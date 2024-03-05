<?php
include 'connection.php';

$sql = "SELECT * FROM registration";
$result = $connection->query($sql);
$test = $result->fetch_all(MYSQLI_ASSOC);
$linkurl = "index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="text-center">
        List
    </header>

    <div class="container d-flex align-items-center min-vh-100">
        <div class="row w-100">
            <div class="col-10 mx-auto text-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">Address</th>
                            <th scope="col">password</th>
                            <th scope="col">Insert update delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                            foreach($test as $data){?>
                        <tr>
                            <th scope="row"><?php echo $data['id']?></th>
                            <td><?php echo $data['name']?></td>
                            <td><?php echo $data['email']?></td>
                            <td><?php echo $data['home_adress']?></td>
                            <td><?php echo $data['r_password']?></td>
                            <td>
                            <a class="btn bg-danger" href='update.php?id=<?php echo $data['id']; ?>'>Edit</a>
                                <a class="btn bg-danger" href="delete.php?id=<?php echo $data['id'];?>">Delete</a>
                                <a class="btn bg-danger" href="update.php">Create</a>

                            </td>
                        </tr>
                        <?php } ;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
