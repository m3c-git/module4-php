<?php



    class AbstractManager
    {
        protected PDO $db;
        
        public function __construct() {
            require_once __DIR__ . '/../vendor/autoload.php';
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../config');
            $dotenv->load();
            $dbhost = $_ENV['dbHost'];
            $dbuser = $_ENV['dbUser'];
            $dbpass = $_ENV['dbPass'];
            $dbname = $_ENV['dbName'];
            $port = $_ENV['port'];

            $connexionString = "mysql:host=$dbhost;port=$port;dbname=$dbname;charset=utf8";

            $this->db = new PDO($connexionString, $dbuser, $dbpass);
        }
    }
