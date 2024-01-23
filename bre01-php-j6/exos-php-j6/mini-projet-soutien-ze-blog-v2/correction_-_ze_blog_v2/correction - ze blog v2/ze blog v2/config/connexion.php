<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "huguesfroger_ze_blog_v2";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "huguesfroger";
$password = "c01d1a4c38e40c8cc82b4ad0267338e2";

$db = new PDO(
    $connexionString,
    $user,
    $password
);