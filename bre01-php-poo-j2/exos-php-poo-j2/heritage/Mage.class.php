<?php

class Mage extends Character
{


    public function __construct(int $life, string $name, private int $mana ){
    	$this->life = $life;
    	$this->name = $name;
        $this->mana = $mana;
    }

    public function getMana() : int 
    {
        return $this->mana;
    }

    public function setMana(string $mana) : void
    {
        $this->mana = $mana;
    }



}

?>