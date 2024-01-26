<?php

class Weapon {

    public function __construct(private string $name, private int $damages)
    {

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

        /* Le getter de l'attribut damages */
        public function getDamages() : int 
        {
            return $this->damages;
        }
    
        /* Le setter de l'attribut damages */
        public function setdamages(string $damages) : void
        {
            $this->name = $damages;
        }

        public function strike() : string
        {
           return "Mais aïeuh! <br>";
        }
}

?>