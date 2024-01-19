<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "maridoucet_bre01_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "maridoucet";
$password = ""; // remplacer $user et $password par les bonne infos

$db = new PDO(
    $connexionString,
    $user,
    $password
);

