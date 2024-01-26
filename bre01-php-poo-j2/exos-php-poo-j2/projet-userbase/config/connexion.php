<?php
$host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
$port = "3306";
$dbname = "eddyfrair_userbase_poo";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$dbco = new PDO(
    $connexionString,
    $user,
    $password
);

