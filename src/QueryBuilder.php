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


    public function findById($table, $dni){
        $stpdo = $this->connexio->prepare("SELECT * FROM `$table` WHERE `dni` = '$dni'");
        $stpdo->execute();
        return $stpdo->fetchAll(\PDO::FETCH_OBJ);
    }

    public function insert($nomtaula, $camps){
        $arrayKeySeparadoPorComas = implode("`,`", array_keys($camps));
        $campsInsertar = implode("','", $camps);
        $stpdo = $this->connexio->prepare(" insert into $nomtaula (`$arrayKeySeparadoPorComas`) values ('$campsInsertar')");
        $stpdo->execute();
    }
}