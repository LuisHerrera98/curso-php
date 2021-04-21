<?php

require_once 'config.php';

$dbUsers = $pdo->query("SELECT * FROM users");

$valido = false;
$usuarioEncontrado;

if(!empty($_POST)){
    while($row = $dbUsers->fetch(PDO::FETCH_ASSOC)) {

        if($row['email'] == $_POST['email']){
            
            header("Location:agenda.php?id=" . $row['id']);

        }else{

            $valido = true;
            echo "USUARIO NO VALIDO";
            header("Location:loginError.php");
            
        }
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="stylesheets/style.css">
     <!--CSS DEL REGISTRO PERRIS-->
     <link rel="stylesheet" href="stylesheets/styleRegistro.css">
     <!--Materialize-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
     <link rel="stylesheet" href="stylesheets/inputFile.css">
     <link rel="stylesheet" href="css.css">
</head>
<body>
<style>
    ::-webkit-input-placeholder { color: #615050; }
    input{
        border-bottom: 1px solid black;
    }
    body{
        background-size: cover;
        background-repeat: no-repeat;
        height: 700px;
    }
</style>
<h1 class="titulo-registro">INGRESAR</h1>
    <hr class="hr-registro" style="color:black;">
    <form action="" method="POST" class="formularioPerris" style="padding-bottom : 12px;">
        <label for="email">Email</label>
        <br>
        <input type="email" placeholder="Email" name="email" id="email" style="border-bottom: 1px solid black;">
        <br>
        <label for="contraseña">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="password" id="password" style="border-bottom: 1px solid black;">
        <br>
        <button type="submit">Ingresar</button>
        <?php
            echo "<p style='font-size:18px; text-align:center; color:red; margin:0; margin-top:10px;'>Usuario o contraseña incorrectos</p>"
        ?>
    </form>
        <h4 class="notenes" style="color:#b13531; font-size:20px; margin:0;margin-top:15px; margin-bottom:10px; text-align:center;">¿¡No tenes cuenta!?</h3>
        <div style="display:flex; justify-content:center;">
        <a href="registro.php" style="font-size:23px; text-align:center; color:#0030bf;">--> Registrarse <--</a>
        </div>
        
</body>
</html>