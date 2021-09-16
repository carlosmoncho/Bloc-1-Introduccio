<?php
require_once ("../kernel.php");
$x = $_GET['x'];
$y = $_GET['y'];
$suma = $x+$y;
$resta= $x-$y;
$multiplicacio = $x*$y;
$divisio= $y? $x/$y:0;
require($rutavistes."calculadoraview.php");