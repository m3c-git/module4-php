<?php

class Category
{

    private ? int $id = null; 

    public function __construct(private string $name){

    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }

    public function getName() : string 
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }


}

?>