<?php
require_once ("../kernel.php");
$nom=$_GET['nom'];
$prefix=$_GET['prefix'];
$url = 'http://username:password@hostname:9090/path?arg=value';
if (!$nom){
    $nom='Carlos Moncho Molla';
}
$nomTrim=trim($nom,"/");
$nomSesnseEspais=trim($nomTrim,' ');
$longitudNom=strlen(str_replace(' ','',$nomSesnseEspais));
$nomMayus=strtoupper($nomTrim);
$nomMinus=strtolower($nomTrim);
$nomSubstitucio=str_ireplace('o','0',$nomTrim);
$numeroA=substr_count($nomMinus,'a');
$posicionPrimeraA=stripos($nomTrim,'a');
if (!$posicionPrimeraA){
    $posicionPrimeraA='No se ha encontrado ninguna a';
}
$comparacioNomPrefix=començaPer($nomTrim,$prefix);

function començaPer($nom,$prefix){
    echo $nom;
    if ($prefix){
        $longitud=strlen($prefix);
        $comparacio=substr($nom,0,$longitud);
        if (strpos($comparacio,$prefix)!==false){
            return "Comença per el mateix prefix";
        }else{
            return "No comença per el mateix prefix";
        }
    }else{
        return 'No existeix la variable prefix';
    }
}
require($route_views."cadenes.view.php");