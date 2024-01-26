<?php



class UserManager {

    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        $host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
        $port = "3306";
        $dbname = "eddyfrair_userbase_poo";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "root";
        $password = "";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );

    }

    /* Le getter de l'attribut users */
    public function getUsers() : array 
    {
        return $this->users;
    }

    /* Le setter de l'attribut users */
    public function setUsers(string $users) : void
    {
        $this->users = $users;
    }

    public function loadUsers() 
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $userbdd = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($userbdd);
                
    }

    public function saveUser() 
    {
        
    }

    public function deleteUser() 
    {
        
    }
}

?>