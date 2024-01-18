<?php

require "../config/connexion.php";

if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]))
{
    $query = $db->prepare('INSERT INTO users(email, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)');
    $parameters = [
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'first_name' => $_POST["firstName"],
        'last_name' => $_POST["lastName"]
    ];
    $query->execute($parameters);
}

header('Location: ../index.php');

