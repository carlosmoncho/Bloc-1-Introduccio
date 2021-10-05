<?php
namespace App;
class Trainer extends Member{
    private $Charge;

    public function __construct($name, $birthDay, $country, $yellowCard,$redCard,$Charge )
    {
        parent::__construct($name, $birthDay, $country, $yellowCard, $redCard);
        $this->Charge = $Charge;
    }

    public function Render(){
        $trainer= $this;
        require_once('../views/trainer.view.php');
    }

    public function getCharge()
    {
        return $this->Charge;
    }

}
