<?php

namespace App;

class QueryBuilder
{
    protected $connexio;


    public function __construct($connexio)
    {
        $this->connexio = $connexio;
    }

    public function selectAll($table){
        $stpdo = $this->connexio->prepare("SELECT * FROM `$table`");
        $stpdo->execute();
        return $stpdo->fetchAll(\PDO::FETCH_OBJ);
    }


    public function findByDni($table, $dni){
        $stpdo = $this->connexio->prepare("SELECT * FROM `$table` WHERE `dni` = '$dni'");
        $stpdo->execute();
        return $stpdo->fetchAll(\PDO::FETCH_OBJ);
    }
    public function findById($table, $id){
        $stpdo = $this->connexio->prepare("SELECT * FROM `$table` WHERE `id` = '$id'");
        $stpdo->execute();
        return $stpdo->fetch(\PDO::FETCH_OBJ);
    }

    public function insert($nomtaula, $camps){
        $arrayKeySeparadoPorComas = implode("`,`", array_keys($camps));
        $campsInsertar = implode("','", $camps);
        $stpdo = $this->connexio->prepare(" insert into $nomtaula (`$arrayKeySeparadoPorComas`) values ('$campsInsertar')");
        $stpdo->execute();
    }
    public function login($table,$email,$password){
        $stpdo = $this->connexio->prepare("SELECT * FROM $table WHERE email = :email");
        $stpdo->bindValue(":email",$email);
        $stpdo->execute();
        $user = $stpdo->fetch(\PDO::FETCH_OBJ);
        if (empty($user)){
            throw new \Exception('EL nom o la contraseña no son correctes');
        }
        if (password_verify($password,$user->password))return $user;
        return null;
    }
}