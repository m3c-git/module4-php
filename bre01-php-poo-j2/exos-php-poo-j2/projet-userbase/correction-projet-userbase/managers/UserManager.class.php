<?php

class UserManager
{
    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "maridoucet_bre01_userbase_poo";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "maridoucet";
        $password = "61ab3719de839ac5e5c9b57377e5e2d5";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    public function loadUsers() : void
    {
        $query = $this->db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        $userList = [];

        foreach($users as $user)
        {
            $item = new User($user["username"], $user["email"], $user["password"], $user["role"]);
            $item->setId($user["id"]);

            $userList[] = $item;
        }

        $this->users = $userList;
    }

    public function saveUser(User $user) : void
    {
        $currentDateTime = date('Y-m-d H:i:s');

        $query = $this->db->prepare('INSERT INTO users (id, username, email, password, role, created_at) VALUES (NULL, :username, :email, :password, :role, :created_at)');
        $parameters = [
            "username" => $user->getUsername(),
            "password" => $user->getPassword(),
            "email" => $user->getEmail(),
            "role" => $user->getRole(),
            "created_at" => $currentDateTime,
        ];

        $query->execute($parameters);

        $user->setId($this->db->lastInsertId());

        $this->users[] = $user;
    }

    public function deleteUser(User $user) : void
    {
        $query = $this->db->prepare('DELETE FROM users WHERE id=:id');
        $parameters = [
            "id" => $user->getId(),
        ];
        $query->execute($parameters);

        foreach($this->users as $key => $item)
        {
            if($item->getId() === $user->getId())
            {
                unset($this->users[$key]);
            }
        }
    }
}