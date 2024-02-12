<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {

        parent::__construct();

    }

    public function findByEmail(string $email) : ? User
    {



        if(isset($_POST["email"])) 
        {
            $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
            $parameters = [
                'email' => $email
                ];
                $query->execute($parameters);
                $useremail = $query->fetch(PDO::FETCH_ASSOC);
                
                if($useremail === false)
                {
                    return null;
                }
                
                    
        }
        return $useremail;
        

    }

    public function create(User $user) : void
    {
        $username = CheckInput($_POST['username']);
        $email = CheckInput($_POST['email']); // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
        $password = CheckInput($_POST['password']);
        $role = CheckInput($_POST['role']);
        $created_at = CheckInput($_POST['created_at']);
        

        if(isset($username) && isset($email) && isset($password) && isset($role) && isset($created_at))
        {
        
            /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
            Ne pas mettre les valeurs du VALUE entre backquote*/

            $query = $this->db->prepare("INSERT INTO users (username, email, password, role, created_at) VALUES (username, :email, :password, :role, :created_at)");
            $parameters = [
                'username' => $username, 'email' => $email, 'password' => $password, 'role' => $role, 'created_at' => $created_at
                ];
            $query->execute($parameters);


                
    
        }

    }

}