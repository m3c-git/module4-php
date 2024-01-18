<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "maridoucet_bre01_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "maridoucet";
$password = "61ab3719de839ac5e5c9b57377e5e2d5";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

