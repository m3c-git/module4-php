<?php 

class User {


    public function __construct(private int $id, private string $username, private string $password)
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

     /* Le getter de l'attribut username */
     public function getUserName() : string 
     {
         return $this->username;
     }
 
     /* Le setter de l'attribut username */
     public function setUserName(string $username) : void
     {
         $this->username = $username;
     }

     /* Le getter de l'attribut password */
    public function getPassword() : string 
    {
        return $this->password;
    }

    /* Le setter de l'attribut password */
    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }
}


?>