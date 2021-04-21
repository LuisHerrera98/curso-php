<?php
require_once 'config.php';
$result = false;
if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users(name, email , password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
    header("Location:list.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <div class="container" >
        <h1>ADD USER</h1>
        <a href="index.php">HOME</a>
        <?php
            if($result){
                echo '<div class="alert alert" style="color:green">Success!!! perrito malvado</div>';
            }
        ?>
        <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="save">
        </form>
    </div>
</body>
</html>
