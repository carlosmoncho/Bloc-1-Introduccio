<?php
namespace App;
class Player{
    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard)
    {
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function age(){
        $hoy = new DateTime();
        $edad = $this->birthDay ->diff($hoy);
        return $edad->y;
    }

    public function score(){
        $this->goals += 1;
    }

    public function addCard($colour){
        if ($colour === 'Amarillo'){
            $this->yellowCard += 1;
        }
        if ($colour === 'Roja'){
            $this->redCard += 1;
        }
    }

    public function playMinutes($minutes){
        $this->minutes += $minutes;
    }

    public function Render(){
        $jugador= $this;
        require_once('../views/jugador.view.php');
    }


    public function getMinutes()
    {
        return $this->minutes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getDorsal()
    {
        return $this->dorsal;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getGoals()
    {
        return $this->goals;
    }

    public function getMatches()
    {
        return $this->matches;
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