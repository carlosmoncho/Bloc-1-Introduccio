<?php
require_once("../kernel.php");
$jugadores[] = [];
$arxiu = fopen("EjemploPlantillas.csv", "r");

while (($datos = fgetcsv($arxiu)) !== FALSE) {
    if (filtrarPorEquipo($datos[1])){
        array_push($jugadores,$datos);
    }
}
fclose($arxiu);
unset($jugadores[0]);
ordenarArrayPor($jugadores,11, SORT_ASC);

require_once($route_views . "fitxers.view.php");

function filtrarPorEquipo($equipo){
    return $equipo == "Atlético de Madrid";
}

function ordenarArrayPor(&$arrayJugadores, $columnas, $order) {
    $arrayAuxiliar = array();
    foreach ($arrayJugadores as $key => $fila) {
        $arrayAuxiliar[$key] = is_object($fila) ? $arrayAuxiliar[$key] = $fila->$columnas : $fila[$columnas];
    }
    array_multisort($arrayAuxiliar, $order, $arrayJugadores);
}
