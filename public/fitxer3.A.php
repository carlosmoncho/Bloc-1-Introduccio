<?php
require_once("../kernel.php");
use App\Team;
use App\Player;
$arxiu = fopen("EjemploPlantillas.csv", "r");
$equipo = new Team('Atletico de madrid');
$jugadorPrueva = new Player('carlos',"21/06/1971",'spain',32,'FG',4,23,35,4,10);
while (($datos = fgetcsv($arxiu)) !== FALSE) {
    if (filtrarPorEquipo($datos[1])){
        $player = new Player($datos[4],$datos[6],$datos[9],$datos[11],$datos[10],$datos[17],$datos[12],$datos[16],$datos[18],$datos[19]);
        $equipo->singPlayer($player);
    }
}
$jugadorPrueva->Render();
$equipo->Render();

function filtrarPorEquipo($equipo){
    return $equipo == "Atlético de Madrid";
}

