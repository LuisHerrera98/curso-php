<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include("vehiculos.php");

    $renault=new Coche();

    $mazda=new Coche();
    $camionsito = new Camion();


    echo "el mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
    echo "el auto mazda tiene un motor de : " . $mazda->get_motor() . "cc <br>";
    echo "el camionsito tiene " . $camionsito->get_ruedas() . " ruedas cuadradas <br>";
    echo "el camion tiene un motor de : " . $camionsito->get_motor() . "cc <br>";
    
    


    
    
    ?>
</body>
</html>