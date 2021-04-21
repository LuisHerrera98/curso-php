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
        $nombre = "lucho";
        
        function tipoVariable(){
            
            //PARA USAR UNA VARIABLE EXTERNA , TENEMOS QUE LLAMARLA CON GLOBAL Y RECIEN PODREMOS USARLA
            
            global $nombre;
            $nombre = "el nombre es " . $nombre;
        }
        tipoVariable();

        echo $nombre;

    ?>
</body>
</html>