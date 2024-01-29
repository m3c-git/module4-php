<?php

class User
{

    private ? int $id = null; 

    public function __construct(private string $username, private string $email, private string $password, private string $role, private string $createdat){

    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }

    public function getUserName() : string 
    {
        return $this->username;
    }

    public function setUserName(string $username) : void
    {
        $this->username = $username;
    }

    public function getEmail() : string 
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
   
    public function getPassword() : string 
    {
        return $this->password;
    }

    public function setPassword(string $password) : void
    {
        $this->password = $password;
    }

    public function getRole() : string 
    {
        return $this->role;
    }

    public function setRole(string $role) : void
    {
        $this->role = $role;
    }
   
    public function getCreatedat() : string 
    {
        return $this->createdat;
    }

    public function setCreatedat(string $createdat) : void
    {
        $this->createdat = $createdat;
    }
   

}

?>