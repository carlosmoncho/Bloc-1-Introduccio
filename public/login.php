<?php
session_start();
require_once ("../kernel.php");
require_once ("../myHelpers/myHelpers.php");
$errors = [];
if (isPost() && cfsr()){
    try {
        $email =  isRequired('usuarioLogin',$errors);
    }catch (App\Exceptions\RequiredField $e){
        $errors[$e->getField()] = $e->getMessage();
    }
    try {
        $password = isRequired('contraseñaLogin',$errors);
    }catch (App\Exceptions\RequiredField $e){
        $errors[$e->getField()] = $e->getMessage();
    }
    if (!count($errors)){
        try {
            $user = $query->login('users',$email,$password);
        }catch (Exception $e){
            $errors[] = $e->getMessage();
        }
        if (!count($errors)){
            $_SESSION['user'] = serialize($user);
            header('location:/IndexAct6.php');
        }else{
            require_once($route_views."login.view.php");
        }
    }
}
require_once($route_views."login.view.php");