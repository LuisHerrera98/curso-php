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

        $var1 = "CASA";
        $var2 = "CASA";
        // el strcmp , verifica que los dos strings son exactamente iguales, importan las mayusculas
        $resultado = strcmp($var1,$var2);
        // el strcasecmp , verifica si los strings son iguales sin importar las mayusculas
        $resultado2 = strcasecmp($var1,$var2);
        //SI LOS STRINGS SON IGUALES , DEVUELVE TRUE = 0, SI SON DISTINTOS DEVUELVE FALSE = 1

        if($resultado){
            echo "no coinciden";
        }else{
            echo "coinciden";
        }
    ?>



</body>
</html>