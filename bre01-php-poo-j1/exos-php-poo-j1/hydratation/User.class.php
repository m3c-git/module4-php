<?php 

/*
Pour afficher une instance de classe pour voir ce qu'il y a dedans :
echo "<pre>";
var_dump($votreInstance);
echo "</pre>";

*/

class User {

    private ? int $id = null;
    

    public function __construct(private string $firstname, private string $lastname, private string $email)
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

     /* Le getter de l'attribut firstName */
     public function getFirstName() : string 
     {
         return $this->firstname;
     }
 
     /* Le setter de l'attribut firstName */
     public function setFirstName(string $firstname) : void
     {
         $this->firstname = $firstname;
     }

     /* Le getter de l'attribut lastname */
    public function getLastName() : string 
    {
        return $this->lastname;
    }

    /* Le setter de l'attribut lastname */
    public function setLastName(string $lastname) : void
    {
        $this->lastname = $lastname;
    }

         /* Le getter de l'attribut email */
         public function getPassword() : string 
         {
             return $this->email;
         }
     
         /* Le setter de l'attribut email */
         public function setPassword(string $email) : void
         {
             $this->email = $email;
         }
}


?>