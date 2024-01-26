<?php
require "connexion.php";
require "User.class.php";

$superman = [
	"first_name" => "Clark",
	"last_name" => "Kent",
	"email" => "clark.kent@test.fr"
];

// New instance 1 user
$user = new User($superman["first_name"], $superman["last_name"], $superman["email"]);

//DB requête 1
$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$userbdd = $query->fetch(PDO::FETCH_ASSOC);
var_dump($userbdd);

// New instance 2 user
$user = new User($userbdd["first_name"], $userbdd["last_name"], $userbdd["email"]);
var_dump($user);

//DB requête 2
$query = $db->prepare('SELECT * FROM users');
$query->execute();
$usersbdd = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($usersbdd);

foreach($usersbdd AS $key => $userbdd)
{var_dump($userbdd["first_name"]);
    // New instance 3 user
    $user = new User($userbdd["first_name"], $userbdd["last_name"], $userbdd["email"]);
    var_dump($user);
    
}

// New instance 4 user
$user = new User($superman["first_name"], $superman["last_name"], $superman["email"]);

/* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
N pas mettre les valeurs du VALUE entre backquote*/
$query = $db->prepare("INSERT INTO users (email, first_name, last_name) VALUES (:email, :first_name, :last_name)");
$parameters = [
    'email' => $superman["email"],'first_name' => $superman["first_name"], 'last_name' => $superman["last_name"]
    ];
$query->execute($parameters);
$lastId = $db->lastInsertId();
var_dump($lastId);
$user->setId($lastId);
var_dump($user);

?>