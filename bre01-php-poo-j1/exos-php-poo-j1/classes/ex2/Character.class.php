<?php

class Character
{
    private string $firstname  = "Jane";
    private string $lastname  = "Doe";
    

    public function __construct(private string $id)
    {
        
    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function setid(string $id) : void
    {
        $this->id = $id;
    }

    public function getFirstName() : string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname) : void 
    {
        $this->firstname = $firstname;
    }

    public function getLastName() : string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname) : void 
    {
        $this->lastname = $lastname;
    }

    public function getgetFullName() : string 
    {
        return $this->firstname ." " . $this->lastname;
    }
}

?>