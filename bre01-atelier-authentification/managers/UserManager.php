<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class UserManager extends AbstractManager
{
    public function __construct()
    {

        parent::__construct();

    }

    public function findByEmail(string $email) : ? User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE email=:email');

        $parameters = [
            "email" => $email
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $user = new User($result["username"], $result["email"], $result["password"]);
            $user->setId($result["id"]);

            return $user;
        }

        return null;
    }

    public function create(User $user) : void
    {


        $query = $this->db->prepare('INSERT INTO users (id, username, email, password) VALUES (NULL, :username, :email, :password)');
        $parameters = [
            "username" => $user->getUsername(),
            "password" => $user->getPassword(),
            "email" => $user->getEmail(),
        ];

        $query->execute($parameters);

        $user->setId($this->db->lastInsertId());

    }

    

}