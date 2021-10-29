<?php
require_once ("../kernel.php");
require_once ("../myHelpers/myHelpers.php");
use App\Alumno;
$hobbies = array('musica', 'baloncesto', 'futbol','informatica','nadar');
$errors = [];
$alumnoBuscado = $query->findById('alumnes','21688810C');
if (isPost() && cfsr()){
    $nom = isRequired('nom', $errors);
    $data = isAfter('data',$errors);
    $genero = isRequired('sexo', $errors);
    if (!empty($errors[0])) {
        foreach ($errors as $error):
            echo $error."<br>";
        endforeach;
        require_once($route_views."formulario.view.php");
    }else{
        $camps =[];
        $dni =$_POST['dni'];
        $Nom =$_POST['nom'];
        $Data = $_POST['data'];
        $Sexe = $_POST['sexo'];
        $Hobby = $_POST['hobbies'];
        $Foto = basename($_FILES['foto']['name']);
        $camps = compact('dni','Nom','Data','Sexe','Hobby','Foto');
        $query->insert('alumnes',$camps);
        $alumnos = $query->selectAll('alumnes');
        require_once($route_views."formulario.view.php");
    }
}else{
    $alumnos = $query->selectAll('alumnes');
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

