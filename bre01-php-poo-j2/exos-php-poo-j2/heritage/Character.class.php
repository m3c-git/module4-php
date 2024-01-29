<?php

class Character 
{
    protected int $life = 0;
    protected string $name = "hello";

    public function __construct(){

    }

    public function getLife() : int 
    {
        return $this->life;
    }

    public function setLife(string $life) : void
    {
        $this->life = $life;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void 
    {
        $this->name = $name;
    }

    public function introduce() : string {
    	return "Bonjour je m'appelle $this->name";
    }
}

?>

