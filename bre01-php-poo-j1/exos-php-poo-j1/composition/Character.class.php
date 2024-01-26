<?php
require "Weapon.class.php";

class Character {

    private Weapon $weapon;
    public function __construct(private string $name)
    {
        $this->weapon = new Weapon("", 0);
    }

    /* Le getter de l'attribut name */
    public function getName() : string 
    {
        return $this->name;
    }

    /* Le setter de l'attribut name */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

        /* Le getter de l'attribut weapon */
        public function getWeapon() : Weapon 
        {
            return $this->weapon;
        }
    
        /* Le setter de l'attribut weapon */
        public function setWeapon(Weapon $weapon) : void
        {
            $this->weapon = $weapon;
        }

        public function fight() : string
        {
            return $this->weapon->strike();
        }

    
}

?>