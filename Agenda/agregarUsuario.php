<?php
require_once 'config.php';

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