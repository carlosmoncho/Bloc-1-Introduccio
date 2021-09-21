<?php
$contrasenya=$_GET['contrasenya'];

$traduccions=array(
    "Monkey" => 'Mono',
    "Car" => 'coche',
    "Apple" => 'manzana',
    "White" => 'Blanco',
    "Night" => 'Noche',
    "Arrow" => 'Flecha',
    "Hand" => 'Mano',
    "Foot" => 'Pie',
    "Face" => 'Cara',
    "Hello" => 'Hola');

print_r(insert('taula1',$traduccions));

if (contrasenyaSegura($contrasenya)){
    echo 'si esta be';
}else{
    echo 'no esta be';
}

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
    if (!preg_match('`[/_=+*$@]`',$contrasenya)){
        return false;
    }
    return true;
}

function insert($nomTaula, $array){
    $formato = 'insert into %s ("%s") values ("%s")';
    $arrayKeySeparadoPorComas = implode("\",\"", array_keys($array));
    $arraySeparadoPorComas = implode("\",\"", $array);
    return sprintf($formato,$nomTaula,$arrayKeySeparadoPorComas,$arraySeparadoPorComas);
}

