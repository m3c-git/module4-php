<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "prenomnom_phpj5";
$connexionString = "mysql:host=$host$;port=$port;dbname=$dbname";

$user = "votre_username";
$password = "votre_password";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

