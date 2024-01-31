<?php
$host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
$port = "3306"; //port de défaut pour MySQL. FAIRE ATTENTTION A TOUJOURS METTRE LE PORT CORRESPONDANT EN FONCTION DU SERVEUR (VOIR LES ADMINS SYS)
$dbname = "eddyfrair_ze-blog-v2";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

