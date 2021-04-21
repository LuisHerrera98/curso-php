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
        //ELEGIR UN NUMERO AL AZAR
        $num1 = rand(1,10);
        echo "el numero random es $num1 <br>";

        //ELEVAR UN NUMERO A POTENCIA
        $num2 = pow(5,3);
        echo "el numero elevado es $num2 <br>";

        //REDONDEAR UN NUMERO DECIMAL A ENTERO MAS CERCANO
        $num3 = 5.25;
        echo "el numero redondeado es " . round($num3);

        //  CASTING EXPLICITO
        $num4 = 5;
        $resultado = (int)$num4;
        echo "el numero es $resultado ";




    ?>
</body>
</html>