<?php
session_start();
use App\Ofegat;
require_once ("../kernel.php");
require_once ("../myHelpers/myHelpers.php");
$errors = [];

if (!isset($_SESSION['user'])){
    header('location:/login.php');
    die();
}

if (!isset($_SESSION['ofegat'])){
    $palabra = $query->findById('paraules',rand(1,10));
    $ofegat = new Ofegat($palabra->paraula);
    $intendInvalids = 0;
}else{
    $intendInvalids = $_SESSION['intentsInvalids'];
    $ofegat = unserialize($_SESSION['ofegat']);
}

if (isPost() && cfsr()){
    try {
        $intendInvalids += $ofegat->addLetter($_POST['letra']);
    }catch (Exception $e){
        $errors[] = $e->getMessage();
    }

    if ($intendInvalids < 6){
        $gameWin = $ofegat->render();
        if ($gameWin == 1){
            require_once($route_views."gameOver.view.php");
        }else{
            $_SESSION['intentsInvalids'] = $intendInvalids;
            $_SESSION['ofegat'] = serialize($ofegat);
            require_once($route_views."indexAct6.view.php");
        }
    }else{
        require_once($route_views."gameOver.view.php");
    }
}else{
    $ofegat->render();
    $_SESSION['intentsInvalids'] = $intendInvalids;
    $_SESSION['ofegat'] = serialize($ofegat);
    require_once($route_views."indexAct6.view.php");
}