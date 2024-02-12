<?php

class User
{
    private ? int $id = null;

    public function __construct( private string $email, private string $password, private string $role = "USER")
    {
        $this->role = $role;
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

     /* Le getter de l'attribut email */
    public function getEmail() : string 
    {
        return $this->email;
    }

    /* Le setter de l'attribut email */
    public function setEmail(string $email) : void
    {
        $this->email = $email;
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

    /* Le getter de l'attribut role */
    public function getRole() : string 
    {
        return $this->role;
    }

    /* Le setter de l'attribut role */
    public function setRole(string $role) : void
    {
        $this->role = $role;
    }
    

}

?>