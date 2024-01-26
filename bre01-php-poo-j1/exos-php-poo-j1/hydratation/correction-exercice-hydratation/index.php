<?php
require "connexion.php";
require "User.class.php";

echo "<h1>Exercice hydratation</h1>";

echo "<h2>Étape 2 : Hydrater depuis un tableau associatif</h2>";

$superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];

$userfromTab = new User($superman["first_name"], $superman["last_name"], $superman["email"]);

echo "<pre>";
var_dump($userfromTab);
echo "</pre>";

echo "<br><br><br>";

echo "<h2>Étape 3 : Hydrater une instance depuis la BDD</h2>";

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$userDb = $query->fetch(PDO::FETCH_ASSOC);

$userFromDb = new User($userDb["first_name"], $userDb["last_name"], $userDb["email"]);
$userFromDb->setId($userDb["id"]);

echo "<pre>";
var_dump($userFromDb);
echo "</pre>";

echo "<br><br><br>";

echo "<h2>Étape 4 : Hydrater un tableau d'instances depuis la BDD</h2>";

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$usersDb = $query->fetchAll(PDO::FETCH_ASSOC);

$usersFromDb = [];

foreach($usersDb as $userDb)
{
    $userFromDb = new User($userDb["first_name"], $userDb["last_name"], $userDb["email"]);
    $userFromDb->setId($userDb["id"]);
    $usersFromDb[] = $userFromDb;
}

echo "<pre>";
var_dump($usersFromDb);
echo "</pre>";

echo "<br><br><br>";

echo "<h2>Étape 5 : Sauvegarder dans la BDD</h2>";

$clark = new User("Clark", "Kent", "clark.kent@test.fr");

$query = $db->prepare('INSERT INTO users (id, first_name, last_name, email) VALUES (NULL, :first_name, :last_name, :email)');
$parameters = [
    "first_name" => $clark->getFirstName(),
    "last_name" => $clark->getLastName(),
    "email" => $clark->getEmail(),
];

$query->execute($parameters);
$clark->setId($db->lastInsertId());

echo "<pre>";
var_dump($clark);
echo "</pre>";

echo "<br><br><br>";