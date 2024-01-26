<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

$host = "db.3wa.io";
$port = "3306";
$dbname = "maridoucet_bre01_pooj1";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "maridoucet"; // Remplacer par ses infos
$password = ""; // Remplacer par ses infos

$db = new PDO(
    $connexionString,
    $user,
    $password
);