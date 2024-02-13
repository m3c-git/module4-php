<?php

require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../config');
$dotenv->load();

    class AbstractManager
    {
        protected PDO $db;
        
        public function __construct() {
            $dbhost = $_ENV['dbHost'];
            $dbuser = $_ENV['dbUser'];
            $dbpass = $_ENV['dbPass'];
            $dbname = $_ENV['dbName'];
            $port = $_ENV['port'];

            $connexionString = "mysql:host=$dbhost;port=$port;dbname=$dbname;charset=utf8";

            $this->db = new PDO($connexionString, $dbuser, $dbpass);
        }
    }
