<?php
$host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
$port = "3306";
$dbname = "eddyfrair_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
