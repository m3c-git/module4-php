<?php

class UserManager extends AbtractManager
{
    
    public function __construct()
    {

        parent::__construct();

    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        
        return $users = $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function findEmail() : ? array
    {
        if(isset($_POST["loginEmail"]))
        {
            $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
            $parameters = [
                'email' => $_POST['loginEmail']
                ];
                $query->execute($parameters);
                $loginEmail = $query->fetch(PDO::FETCH_ASSOC);
                return $loginEmail ;
    
        }

    }

    public function create() : void
    {
        $email = CheckInput($_POST['email']); // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
        $password = CheckInput($_POST['password']);
        $firstname = CheckInput($_POST['firstName']);
        $lastname = CheckInput($_POST['lastName']);
    
    
    
        
       /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
        Ne pas mettre les valeurs du VALUE entre backquote*/
        $query = $this->db->prepare("INSERT INTO users (email, password, firstname, lastname) VALUES (:email, :password, :firstname, :lastname)");
        $parameters = [
            'email' => $email, 'password' => $password, 'firstname' => $firstname, 'lastname' => $lastname
            ];
        $query->execute($parameters);



    }

    public function update() : void
    {
        if(isset($_POST))
        {
       
           $userId = intval($_POST['userId']) ;
           $email = CheckInput($_POST['email']); // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
           $password = CheckInput($_POST['password']);
           $firstname = CheckInput($_POST['firstName']);
           $lastname = CheckInput($_POST['lastName']);
       var_dump($userId);
       
       
           
          /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
           N pas mettre les valeurs du VALUE entre backquote*/
           $query = $this->db->prepare("UPDATE users SET email = :email, password = :password, firstname = :firstname, lastname = :lastname WHERE id = :id");
           $parameters = [
               'id' => $userId, 'email' => $email, 'password' => $password, 'firstname' => $firstname, 'lastname' => $lastname
               ];
           $query->execute($parameters);
       
       
        }

    }

    public function delete() : void
    {
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];

            $query = $this->db->prepare('DELETE FROM users WHERE id = :id');
            $parameters = [
                'id' => $id
            ];
            $query->execute($parameters);
            $user = $query->fetch(PDO::FETCH_ASSOC);
        }

    }

    private function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}

?>
