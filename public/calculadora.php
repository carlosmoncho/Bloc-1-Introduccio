<?php
require_once ("../kernel.php");
$funcio=$_GET["funcio"];
$x=$_GET['x'];
$y=$_GET['y'];

function calcular($x,$y,$funcio){
    if (!$funcio){
        return "Tens que insertar una funcio per a que funcione";
    }else if ($funcio=="suma"){
        return 'El resultat es= '.suma($x,$y) ;
    }else if ($funcio=="resta"){
        return 'El resultat es= '.resta($x,$y);
    }else if ($funcio=="multiplicacio"){
        return 'El resultat es= '.multiplicacio($x,$y);
    }else if ($funcio=="divisio"){
        return 'El resultat es= '.divisio($x,$y);
    }
    return "La variable funcio que has insertat no esta disponible o no existeix.";

}

function divisio($x, $y){
    return $y?$x/$y:0;
}

function multiplicacio($x, $y){
    return $x*$y;
}

function resta($x, $y){
    return $x-$y;
}

function suma($x, $y){
    return $x+$y;
}

require($rutavistes."calculadoraview.php");