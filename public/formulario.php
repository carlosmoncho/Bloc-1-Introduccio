<?php

if (isPost() && cfsr()){
    $data = isAfter('data');
}
require_once("formulario.view.php");

function isAfter($nomCamp){
    $now = strtotime(date("d-m-Y H:i:00",time()));
    $fecha_entrada = strtotime($_POST[$nomCamp]);
    if ($now < $fecha_entrada){
        return "La data te que ser anetrior";
    }else{
        return null;
    }
}
function isPost(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}