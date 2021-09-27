<?php
require_once ("../kernel.php");
$hobbies = array('musica', 'baloncesto', 'futbol','informatica','nadar');
$errors = [];
if (isPost() && cfsr()){
    $nom = isRequired('nom', $errors);
    $data = isAfter('data',$errors);
    $genero = isRequired('sexo', $errors);
    if (!empty($errors[0])) {
        foreach ($errors as $error):
            echo $error."<br>";
        endforeach;
    }else{
        $name = basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'],"imagen/$name" );
        echo "<br>Formulario Rellenado <br>";
        echo  "Nombre: " . $_POST['nom'] ."<br>";
        echo  "Cumpleaños: " . $_POST['data'] ."<br>";
        echo  "Genero: " . $_POST['sexo'] ."<br>";
        echo  "Hobbies: " . $_POST['hobbies'] ."<br>";
        echo  "<img src='imagen/$name' alt='imagen' width=\"300\" height=\"290\">" ;
    }
}else{
    require_once($route_views."formulario.view.php");
}


function isAfter($nomCamp,  &$errors){
    $now = strtotime(date("d-m-Y H:i:00",time()));
    $fecha_entrada = strtotime($_POST[$nomCamp]);
    if ($now < $fecha_entrada){
        $errors[] = "La data te que ser anetrior";
    }
    return null;
}
function isRequired($nomCamp, &$errors){
    if (empty($_POST[$nomCamp]) || $nomCamp === ""){
        $errors[] = "El $nomCamp es necesario";
        return null;
    }else{
        return trim(htmlspecialchars($_POST[$nomCamp]));
    }
}
function isPost(){
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

function cfsr(){
    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != $_SERVER['HTTP_HOST']) die('Anti-CSRF');
    else return true;
}