<?php
namespace App;
use DateTime;

class Player extends Member {
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;


    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes,$yellowCard, $redCard)
    {
        parent::__construct($name, $birthDay, $country, $yellowCard, $redCard);
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
    }


    public function score(){
        $this->goals += 1;
    }


    public function playMinutes($minutes){
        $this->minutes += $minutes;
    }

    public function Render(){
        $jugador= $this;
        require('../views/jugador.view.php');
    }


    public function getMinutes()
    {
        return $this->minutes;
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


}