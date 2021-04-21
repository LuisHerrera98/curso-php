<?php

require_once 'config.php';

$dbUsers = $pdo->query("SELECT * FROM users");

$valido = false;
$usuarioEncontrado;

if(!empty($_POST)){
    while($row = $dbUsers->fetch(PDO::FETCH_ASSOC)) {

        if($row['email'] == $_POST['email']){
            header("Location:registroError.php");
        }    
    }
}
if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $cinco = $_POST['cinco'];
    $cincoM = $_POST['cincoM'];
    $seis = $_POST['seis'];
    $seisM = $_POST['seisM'];
    $siete = $_POST['siete'];
    $sieteM = $_POST['sieteM'];
    $ocho = $_POST['ocho'];
    $ochoM = $_POST['ochoM'];
    $nueve = $_POST['nueve'];
    $nueveM = $_POST['nueveM'];
    $diez = $_POST['diez'];
    $diezM = $_POST['diezM'];
    $once = $_POST['once'];
    $onceM = $_POST['onceM'];
    $doce = $_POST['doce'];
    $doceM = $_POST['doceM'];
    $trece = $_POST['trece'];
    $treceM = $_POST['treceM'];
    $catorce = $_POST['catorce'];
    $catorceM = $_POST['catorceM'];
    $quince = $_POST['quince'];
    $quinceM = $_POST['quinceM'];
    $dieciseis = $_POST['dieciseis'];
    $dieciseisM = $_POST['dieciseisM'];
    $diecisiete = $_POST['diecisiete'];
    $diecisieteM = $_POST['diecisieteM'];
    $dieciocho = $_POST['dieciocho'];
    $dieciochoM = $_POST['dieciochoM'];
    $diecinueve = $_POST['diecinueve'];
    $diecinueveM = $_POST['diecinueveM'];
    $veinte = $_POST['veinte'];
    $veinteM = $_POST['veinteM'];
    $veintiuno = $_POST['veintiuno'];
    $veintiunoM = $_POST['veintiunoM'];
    $veintidos = $_POST['veintidos'];
    $veintidosM = $_POST['veintidosM'];
    $veintitres = $_POST['veintitres'];
    $veintitresM = $_POST['veintitresM'];
    $cero = $_POST['cero'];
    $ceroM = $_POST['ceroM'];
    $una = $_POST['una'];


    $sql = "INSERT INTO users(name, email , password, dia, mes, cinco, cincoM, seis, seisM, siete, sieteM, ocho, ochoM, nueve, nueveM, diez, diezM, once, onceM, doce, doceM, trece, treceM, catorce, catorceM, quince, quinceM, dieciseis, dieciseisM, diecisiete, diecisieteM, dieciocho, dieciochoM, diecinueve, diecinueveM, veinte, veinteM, veintiuno, veintiunoM, veintidos, veintidosM, veintitres, veintitresM, cero, ceroM, una) VALUES (:name, :email, :password, :dia, :mes, :cinco, :cinco, :seis, :seisM, :siete, :sieteM, :ocho, :ochoM, :nueve, :nueveM, :diez, :diezM, :once, :onceM, :doce, :doceM, :trece, :treceM, :catorce, :catorceM, :quince, :quinceM, :dieciseis, :dieciseisM, :diecisiete, :diecisieteM, :dieciocho, :dieciochoM, :diecinueve, :diecinueveM, :veinte, :veinteM, :veintiuno, :veintiunoM, :veintidos, :veintidosM, :veintitres, :veintitresM, :cero, :ceroM, :una)";
    $query = $pdo->prepare($sql);
    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'dia' => $dia,
        'mes' => $mes,
        'cinco' => $cinco,
        'cincoM' => $cincoM,
        'seis' => $seis,
        'seisM' => $seisM,
        'siete' => $siete,
        'sieteM' => $sieteM,
        'ocho' => $ocho,
        'ochoM' => $ochoM,
        'nueve' => $nueve,
        'nueveM' => $nueveM,
        'diez' => $diez,
        'diezM' => $diezM,
        'once' => $once,
        'onceM' => $onceM,
        'doce' => $doce,
        'doceM' => $doceM,
        'trece' => $trece,
        'treceM' => $treceM,
        'catorce' => $catorce,
        'catorceM' => $catorceM,
        'quince' => $quince,
        'quinceM' => $quinceM,
        'dieciseis' => $dieciseis,
        'dieciseisM' => $dieciseisM,
        'diecisiete' => $diecisiete,
        'diecisieteM' => $diecisieteM,
        'dieciocho' => $dieciocho,
        'dieciochoM' => $dieciochoM,
        'diecinueve' => $diecinueve,
        'diecinueveM' => $diecinueveM,
        'veinte' => $veinte,
        'veinteM' => $veinteM,
        'veintiuno' => $veintiuno,
        'veintiunoM' => $veintiunoM,
        'veintidos' => $veintidos,
        'veintidosM' => $veintidosM,
        'veintitres' => $veintitres,
        'veintitresM' => $veintitresM,
        'cero' => $cero,
        'ceroM' => $ceroM,
        'una' => $una
    ]);
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <h1 class="titulo-registro">REGISTRARSE</h1>
    <hr class="hr-registro" style="color:black;">
    <form action="" method="post" class="formularioPerris" style="padding-bottom : 12px;">
        <label for="name">Ingrese su nombre :</label>
        <br>
        <input type="text" name="name" id="name" style="border-bottom: 1px solid black;" placeholder="Nombre...">
        <br>
        <label for="email">Ingrese su Email :</label>
        <br>
        <input type="email" name="email" id="email" style="border-bottom: 1px solid black;" placeholder="Email...">
        <br>
        <label for="password">Ingrese una contraseña :</label>
        <br>
        <input type="password" name="password" id="password" style="border-bottom: 1px solid black;" placeholder="Contraseña...">
        <br>
        <label for="repassword">Confirmar contraseña :</label>
        <br>
        <input type="password" name="repassword" id="repassword" style="border-bottom: 1px solid black;" placeholder="Repetir contraseña...">
        <br>
        <input type="hidden" name="dia" value="libre">
        <input type="hidden" name="mes" value="libre">
        <input type="hidden" name="cinco" value="libre">
        <input type="hidden" name="cincoM" value="libre">
        <input type="hidden" name="seis" value="libre">
        <input type="hidden" name="seisM" value="libre">
        <input type="hidden" name="siete" value="libre">
        <input type="hidden" name="sieteM" value="libre">
        <input type="hidden" name="ocho" value="libre">
        <input type="hidden" name="ochoM" value="libre">
        <input type="hidden" name="nueve" value="libre">
        <input type="hidden" name="nueveM" value="libre">
        <input type="hidden" name="diez" value="libre">
        <input type="hidden" name="diezM" value="libre">
        <input type="hidden" name="once" value="libre">
        <input type="hidden" name="onceM" value="libre">
        <input type="hidden" name="doce" value="libre">
        <input type="hidden" name="doceM" value="libre">
        <input type="hidden" name="trece" value="libre">
        <input type="hidden" name="treceM" value="libre">
        <input type="hidden" name="catorce" value="libre">
        <input type="hidden" name="catorceM" value="libre">
        <input type="hidden" name="quince" value="libre">
        <input type="hidden" name="quinceM" value="libre">
        <input type="hidden" name="dieciseis" value="libre">
        <input type="hidden" name="dieciseisM" value="libre">
        <input type="hidden" name="diecisiete" value="libre">
        <input type="hidden" name="diecisieteM" value="libre">
        <input type="hidden" name="dieciocho" value="libre">
        <input type="hidden" name="dieciochoM" value="libre">
        <input type="hidden" name="diecinueve" value="libre">
        <input type="hidden" name="diecinueveM" value="libre">
        <input type="hidden" name="veinte" value="libre">
        <input type="hidden" name="veinteM" value="libre">
        <input type="hidden" name="veintiuno" value="libre">
        <input type="hidden" name="veintiunoM" value="libre">
        <input type="hidden" name="veintidos" value="libre">
        <input type="hidden" name="veintidosM" value="A ESTA HORA ESTOY ATR">
        <input type="hidden" name="veintitres" value="ATR PERRITO MALVADO">
        <input type="hidden" name="veintitresM" value="SIGO ATR">
        <input type="hidden" name="cero" value="A MIMIR">
        <input type="hidden" name="ceroM" value="F">
        <input type="hidden" name="una" value="F">
        <button type=submit>Registrarme</button>
    </form>
</body>
</html>