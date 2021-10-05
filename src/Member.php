<?php
namespace App;
abstract class Member{
    protected $name;
    protected $birthDay;
    protected $country;
    protected $yellowCard;
    protected $redCard;

    public function __construct($name, $birthDay, $country, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }


    public function age(){
        $dias = explode("/", $this->birthDay, 3);
        $dias = mktime(0,0,0,$dias[1],$dias[0],$dias[2]);
        $edad = (int)((time()-$dias)/31556926 );
        return $edad;

    }

    public function addCard($colour){
        if ($colour === 'Amarillo'){
            $this->yellowCard += 1;
        }
        if ($colour === 'Roja'){
            $this->redCard += 1;
        }
    }

    abstract public function render();

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }
    public function getYellowCard()
    {
        return $this->yellowCard;
    }

    public function getRedCard()
    {
        return $this->redCard;
    }
}

