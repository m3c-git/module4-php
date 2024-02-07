<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Category
{
    private ? int $id = null;

    public function __construct(private string $title, private string $description)
    {
       
    }

    /* Le getter de l'attribut id */
    public function getId() : int 
    {
        return $this->id;
    }

    /* Le setter de l'attribut id */
    public function setId(string $id) : void
    {
        $this->id = $id;
    }

     /* Le getter de l'attribut title */
     public function getTitle() : string 
     {
         return $this->title;
     }
 
     /* Le setter de l'attribut title */
     public function setTitle(string $title) : void
     {
         $this->title = $title;
     }

     /* Le getter de l'attribut description */
    public function getDescription() : string 
    {
        return $this->description;
    }

    /* Le setter de l'attribut email */
    public function setdescription(string $description) : void
    {
        $this->description = $description;
    }



}