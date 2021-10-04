<?php
namespace App;
class Team{
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;

    public function __construct($name, $matches=0, $won=0, $lost=0, $tie=0, $scoreGoals=0, $concededGoals=0)
    {
        $this->name = $name;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoreGoals;
        $this->concededGoals = $concededGoals;
    }
    public function Render(){
        $jugadores = $this->players;
        $equipo = $this->name;
        require_once('../views/equipo.view.php');
    }

    public function singPlayer($player){
        $this->players[]= $player;
    }
}