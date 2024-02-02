<?php

abstract class AbstractManager 
{

    public function getDatabaseInfo() : array
    {
        $handle = fopen("config/database.txt", "r");
        $lineNbr = 0;
        $info = [];

        if ($handle) {

            while (($line = fgets($handle)) !== false) {

                if($lineNbr === 0)
                {
                    $info["user"] = trim($line);
                }
                else if($lineNbr === 1)
                {
                    $info["password"] = trim($line);
                }
                else if($lineNbr === 2)
                {
                    $info["host"] = trim($line);
                }
                else if($lineNbr === 3)
                {
                    $info["db_name"] = trim($line);
                }

                $lineNbr++;
            }

            fclose($handle);
        }
        return $info;
    }
    
   

    protected PDO $db;
    public function __construct(){
         
       $dbinfo = $this->getDatabaseInfo();
       $host = $dbinfo["host"];
       $port = "3306";
       $dbname = $dbinfo["db_name"];
       $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
       $user = $dbinfo["user"];
       $password = $dbinfo["password"];

       $this->db = new PDO(
        $connexionString,
        $user,
        $password
    );

    }

   

}

?>








<!-- protected PDO $db;
    public function __construct(){
        
        $host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
        $port = "3306";
        $dbname = "eddyfrair_soutien_bre01_mvc";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = $info["user"];
        $password = "";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );

    } -->