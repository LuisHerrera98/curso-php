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
    //FORMAS DE CREAR ARRAYS EN PHP
       /* $semana[]="lunes";

        $semana[]="martes";

        $semana[]="miercoles";

        $semana[]="jueves"; 

        $semana=array("lunes","martes","miercoles","jueves");

        echo $semana[1];
       
**Verificar si es un array o no

        if(is_array($datos)){
            echo "es un array";
        }else{
            echo"No es un array";
        }

        $datos=array("Nombre"=>"lucho","apellido"=>"herrera","edad"=>21);

        foreach($datos as $clave=>$valor){
            echo "a $clave le corresponte el valor : $valor <br>";
        }
        
        $semana[]="lunes";

        $semana[]="martes";

        $semana[]="miercoles";

        $semana[]="jueves";

        for($i=0;$i<count($semana);$i++){

            echo $semana[$i] . "<br>";

        }

        $semana[]="viernes";

        for($i=0;$i<count($semana);$i++){

            echo $semana[$i] . "<br>";

        }

        $datos=array("Nombre"=>"lucho","apellido"=>"herrera","edad"=>21);
        
        $datos["pais"]="españa";

        foreach($datos as $clave=>$valor){
            echo "a $clave le corresponte el valor : $valor <br>";
        }

         */

        //$datos="martin";

        $semana=array("lunes","martes","miercoles","jueves");

        sort($semana); // ordena array alfabeticamente

        for($i=0;$i<count($semana);$i++){

            echo $semana[$i] . "<br>";


        }
        

    ?>
</body>
</html>