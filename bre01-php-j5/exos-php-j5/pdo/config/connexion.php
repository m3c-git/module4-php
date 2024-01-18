<?php
$host = "localhost"; //host pour phpmyadmin de la 3wa =>  "db.3wa.io"
$port = "3306";
$dbname = "eddyfrair_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "root";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

