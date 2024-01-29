<?php

class Warrior extends Character
{


    public function __construct(int $life, string $name, private int $energy ){
    	$this->life = $life;
    	$this->name = $name;
        $this->energy = $energy;
    }

    public function getEnergy() : int 
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : void
    {
        $this->energy = $energy;
    }



}

?>