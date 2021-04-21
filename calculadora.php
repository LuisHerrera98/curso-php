<style>
    .resultado{
        color:#0C3;
    }
</style>

<?php
    function calcular($calculo){

      if(!strcmp("Suma",$calculo)){
        global $numero1;
        global $numero2;
        $resultado = $numero1+$numero2;
        echo "<p class='resultado'>El resultado de la suma es :$resultado</p>";
      }elseif(!strcmp("Resta",$calculo)){
        global $numero1;
        global $numero2;
        $resultado = $numero1-$numero2;
        echo "<p class='resultado'>El resultado de la Resta es :$resultado </p>";
      }elseif(!strcmp("Multiplicación",$calculo)){
        global $numero1;
        global $numero2;
        $resultado = $numero1*$numero2;
        echo "<p class='resultado'>El resultado de la Multiplicación es :$resultado </p>";
      }elseif(!strcmp("División",$calculo)){
        global $numero1;
        global $numero2;
        $resultado = $numero1/$numero2;
        echo "<p class='resultado'>El resultado de la Division es :$resultado </p>";
      }elseif(!strcmp("Módulo",$calculo)){
        global $numero1;
        global $numero2;
        $resultado = $numero1%$numero2;
        echo "<p class='resultado'>El resultado del modulo es :$resultado </p>";
      }elseif(!strcmp("Incremento",$calculo)){
        global $numero1;
        $numero1++;
        $resultado = $numero1;
        echo "<p class='resultado'>El resultado del modulo es :$resultado </p>";
      }elseif(!strcmp("Decremento",$calculo)){
        global $numero1;
        $numero1--;
        $resultado = $numero1;
        echo "<p class='resultado'>El resultado del modulo es :$resultado </p>";
      }
    }
?>