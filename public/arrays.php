<?php
require_once ("../kernel.php");
$noms=array("rafa","mar","hugo","carlos");
$numeroElementos=count($noms);
$cadenaNoms=implode(' ',$noms);
$nomsOrdenats=$noms;
asort($nomsOrdenats);
$nomsInvers=array_reverse($noms);
$posicioNom=array_search('carlos',$noms);
$alumnes=array(
    array(
        "DNI" => '21699811D',
        "NOM" => 'Rafa',
        "EDAD" => 19),
    array(
        "DNI" => '22639851D',
        "NOM" => 'Mar',
        "EDAD" => 25),
    array(
        "DNI" => '22634565f',
        "NOM" => 'Carlos',
        "EDAD" => 19),
    array(
        "DNI" => '22235851D',
        "NOM" => 'Hugo',
        "EDAD" => 17)
);
$nomAlumnes=array_column($alumnes,'NOM');
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

require($rutavistes."arrays.view.php");

function mostrar_array($array){
    foreach ($array as $nom){
        echo $nom.', ';
    }
}