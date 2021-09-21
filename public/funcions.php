<?php
require_once ("../kernel.php");
$contrasenya=$_GET['contrasenya'];
$nomTaula=$_GET['taula'];
$traduccions=array(
    "coche" => 'coche 1',
    "Marca" => 'Honda',
    "Modelo" => 'Civic',
    "Matricula" => '0959 HTJ');

function contrasenyaSegura($contrasenya){
    if (strlen($contrasenya) < 8){
        return false;
    }
    if (!preg_match('`[a-z]`',$contrasenya)){
        return false;
    }
    if (!preg_match('`[A-Z]`',$contrasenya)){
        return false;
    }
    if (!preg_match('`[0-9]`',$contrasenya)){
        return false;
    }
    if (!preg_match('`[/_=+*$@.]`',$contrasenya)){
        return false;
    }
    return true;
}

function insert($nomTaula, $array){
    if (!$nomTaula){
        return 'tens que insertar un nom de taula';
    }
    $formato = 'insert into %s (%s) values ("%s")';
    $arrayKeySeparadoPorComas = implode(",", array_keys($array));
    $arraySeparadoPorComas = implode("\",\"", $array);
    return sprintf($formato,$nomTaula,$arrayKeySeparadoPorComas,$arraySeparadoPorComas);
}
require($route_views."funcions.view.php");

