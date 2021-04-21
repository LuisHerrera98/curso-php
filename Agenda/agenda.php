<?php

require_once 'config.php';

$id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute([
        'id' => $id
    ]);

    $row = $query->fetch(PDO::FETCH_ASSOC);
    $nameValue = $row['name'];
    $emailValue = $row['email'];
    $dia = $row['dia'];
    $mes = $row['mes'];
    $cinco = $row['cinco'];
    $cincoM = $row['cincoM'];
    $seis = $row['seis'];
    $seisM = $row['seisM'];
    $siete = $row['siete'];
    $sieteM = $row['sieteM'];
    $ocho = $row['ocho'];
    $ochoM = $row['ochoM'];
    $nueve = $row['nueve'];
    $nueveM = $row['nueveM'];
    $diez = $row['diez'];
    $diezM = $row['diezM'];
    $once = $row['once'];
    $onceM = $row['onceM'];
    $doce = $row['doce'];
    $doceM = $row['doceM'];
    $trece = $row['trece'];
    $treceM = $row['treceM'];
    $catorce = $row['catorce'];
    $catorceM = $row['catorceM'];
    $quince = $row['quince'];
    $quinceM = $row['quinceM'];
    $dieciseis = $row['dieciseis'];
    $dieciseisM = $row['dieciseisM'];
    $diecisiete = $row['diecisiete'];
    $diecisieteM = $row['diecisieteM'];
    $dieciocho = $row['dieciocho'];
    $dieciochoM = $row['dieciochoM'];
    $diecinueve = $row['diecinueve'];
    $diecinueveM = $row['diecinueveM'];
    $veinte = $row['veinte'];
    $veinteM = $row['veinteM'];
    $veintiuno = $row['veintiuno'];
    $veintiunoM = $row['veintiunoM'];
    $veintidos = $row['veintidos'];
    $veintidosM = $row['veintidosM'];
    $veintitres = $row['veintitres'];
    $veintitresM = $row['veintitresM'];
    $cero = $row['cero'];
    $ceroM = $row['ceroM'];
    $una = $row['una'];
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de retornado</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css.css">
</head>
<style>
    
</style>
<body>
    <form action="editarAgenda.php" method="post">
        <div class="caja-mes-dia" style="margin-left:0px !important;">
            <label for="Mes">Mes</label> <input class="mes-dia" type="text" name="mes" value="<?php echo $mes; ?>"> 
            <label for="Dia">Dia</label> <input class="mes-dia" type="text" name="dia" value="<?php echo $dia; ?>">
            <div class="flecha">
                <a href="" style="width:90%">
                <button type="submit" style="width:100%;"><i class="fas fa-save" style="font-size:23px;"></i></button>
                </a>
            </div>
        </div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $id ?>">       
        <label for="5:00" class="label-chico">5:00</label>
        <input type="text" placeholder="libre" name="cinco" value="<?php echo $cinco; ?>"><br>
        <label for="5:30" class="label-chico">5:30 </label>
        <input type="text" placeholder="libre" name="cincoM" value="<?php echo $cincoM; ?>"><br>
        <label for="6:00" class="label-chico">6:00 </label>
        <input type="text" placeholder="libre" name="seis" value="<?php echo $seis; ?>"><br>
        <label for="6:30" class="label-chico">6:30 </label>
        <input type="text" placeholder="libre" name="seisM" value="<?php echo $seisM; ?>"><br>
        <label for="5:00" class="label-chico">7:00 </label>
        <input type="text" placeholder="libre" name="siete" value="<?php echo $siete; ?>"><br>
        <label for="5:00" class="label-chico">7:30 </label>
        <input type="text" placeholder="libre" name="sieteM" value="<?php echo $sieteM; ?>"><br>
        <label for="5:00" class="label-chico">8:00 </label>
        <input type="text" placeholder="libre" name="ocho" value="<?php echo $ocho; ?>"><br>
        <label for="5:00" class="label-chico">8:30 </label>
        <input type="text" placeholder="libre" name="ochoM" value="<?php echo $ochoM; ?>"><br>
        <label for="5:00" class="label-chico">9:00 </label>
        <input type="text" placeholder="libre" name="nueve" value="<?php echo $nueve; ?>"><br>
        <label for="5:00" class="label-chico">9:30      </label>
        <input type="text" placeholder="libre" name="nueveM" value="<?php echo $nueveM; ?>"><br>
        <label for="5:00" >10:00</label>
        <input type="text" placeholder="libre" name="diez" value="<?php echo $diez; ?>"><br>
        <label for="5:00">10:30</label>
        <input type="text" placeholder="libre" name="diezM" value="<?php echo $diezM; ?>"><br>
        <label for="5:00">11:00</label>
        <input type="text" placeholder="libre" name="once" value="<?php echo $once; ?>"><br>
        <label for="5:00">11:30</label>
        <input type="text" placeholder="libre" name="onceM" value="<?php echo $onceM; ?>"><br>
        <label for="5:00">12:00</label>
        <input type="text" placeholder="libre" name="doce" value="<?php echo $doce; ?>"><br>
        <label for="5:00" >12:30</label>
        <input type="text" placeholder="libre" name="doceM" value="<?php echo $doceM; ?>"><br>
        <label for="5:00">13:00</label>
        <input type="text" placeholder="libre" name="trece" value="<?php echo $trece; ?>"><br>
        <label for="5:00">13:30</label>
        <input type="text" placeholder="libre" name="treceM" value="<?php echo $treceM; ?>"><br>
        <label for="5:00">14:00</label>
        <input type="text" placeholder="libre" name="catorce" value="<?php echo $catorce; ?>"><br>
        <label for="5:00">14:30</label>
        <input type="text" placeholder="libre" name="catorceM" value="<?php echo $catorceM; ?>"><br>
        <label for="5:00">15:00</label>
        <input type="text" placeholder="libre" name="quince" value="<?php echo $quince; ?>"><br>
        <label for="5:00">15:30</label>
        <input type="text" placeholder="libre" name="quinceM" value="<?php echo $quinceM; ?>"><br>
        <label for="5:00">16:00</label>
        <input type="text" placeholder="libre" name="dieciseis" value="<?php echo $dieciseis; ?>"><br>
        <label for="5:00">16:30</label>
        <input type="text" placeholder="libre" name="dieciseisM" value="<?php echo $dieciseisM; ?>"><br>
        <label for="5:00">17:00</label>
        <input type="text" placeholder="libre" name="diecisiete" value="<?php echo $diecisiete; ?>"><br>
        <label for="5:00">17:30</label>
        <input type="text" placeholder="libre" name="diecisieteM" value="<?php echo $diecisieteM; ?>"><br>
        <label for="5:00">18:00</label>
        <input type="text" placeholder="libre" name="dieciocho" value="<?php echo $dieciocho; ?>"><br>
        <label for="5:00">18:30</label>
        <input type="text" placeholder="libre" name="dieciochoM" value="<?php echo $dieciochoM; ?>"><br>
        <label for="5:00" >19:00</label>
        <input type="text" placeholder="libre" name="diecinueve" value="<?php echo $diecinueve; ?>"><br>
        <label for="5:00">19:30</label>
        <input type="text" placeholder="libre" name="diecinueveM" value="<?php echo $diecinueveM; ?>"><br>
        <label for="5:00">20:00</label>
        <input type="text" placeholder="libre" name="veinte" value="<?php echo $veinte; ?>"><br>
        <label for="5:00">20:30</label>
        <input type="text" placeholder="libre" name="veinteM" value="<?php echo $veinteM; ?>"><br>
        <label for="5:00">21:00</label>
        <input type="text" placeholder="libre" name="veintiuno" value="<?php echo $veintiuno; ?>"><br>
        <label for="5:00">21:30</label>
        <input type="text" placeholder="libre" name="veintiunoM" value="<?php echo $veintiunoM; ?>"><br>
        <label for="5:00">22:00</label>
        <input type="text" placeholder="libre" name="veintidos" value="<?php echo $veintidos; ?>"><br>
        <label for="5:00">22:30</label>
        <input type="text" placeholder="libre" name="veintidosM" value="<?php echo $veintidosM; ?>"><br>
        <label for="5:00" >23:00</label>
        <input type="text" placeholder="libre" name="veintitres" value="<?php echo $veintitres; ?>"><br>
        <label for="5:00">23:30</label>
        <input type="text" placeholder="libre" name="veintitresM" value="<?php echo $veintitresM; ?>"><br>
        <label for="5:00">00:00</label>
        <input type="text" placeholder="libre" name="cero" value="<?php echo $cero; ?>"><br>
        <label for="5:00">00:30</label>
        <input type="text" placeholder="libre" name="ceroM" value="<?php echo $ceroM; ?>"><br>
        <label for="5:00" class="label-chico">1:00</label>
        <input type="text" placeholder="libre" name="una" value="<?php echo $una; ?>"><br>
        <div class="caja-guardar">
            <button type="submit" class="boton-guardar">Guardar</button>
        </div>
        
    </form>
</body>
</html>