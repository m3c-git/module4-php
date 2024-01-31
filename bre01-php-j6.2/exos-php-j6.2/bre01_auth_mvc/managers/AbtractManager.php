<?php

abstract class AbtractManager 
{
    protected PDO $db;
    public function __construct(){

        $host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
        $port = "3306";
        $dbname = "eddyfrair_auth_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "root";
        $password = "";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );

    }

}

?>
