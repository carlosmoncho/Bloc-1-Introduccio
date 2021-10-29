<?php
require_once ("../kernel.php");
require_once ("../myHelpers/myHelpers.php");
$errors = [];
if (isPost() && cfsr()){
    try {
        $name = isRequired('user',$errors);
        $email = isRequired('email',$errors);
        $password = isRequired('password',$errors);
        $password2 = isRequired('password2',$errors);
        compararContrseñas('password','password2');
    }catch (App\Exceptions\RequiredField $e){
        $errors[$e->getField()] = $e->getMessage();
    }
    if (!count($errors)){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $query->insert('users',compact('name','email','password'));
        header('location:/login.php');
    }
}
require_once($route_views."register.view.php");


