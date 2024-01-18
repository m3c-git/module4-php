<?php

require "../config/connexion.php";

if(isset($_POST["userId"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["firstName"]) && isset($_POST["lastName"]))
{
    $query = $db->prepare('UPDATE users SET email = :email, password = :password, first_name = :first_name, last_name = :last_name WHERE id = :id');
    $parameters = [
        'id' => $_POST["userId"],
        'email' => $_POST["email"],
        'password' => $_POST["password"],
        'first_name' => $_POST["firstName"],
        'last_name' => $_POST["lastName"]
    ];

    $query->execute($parameters);
}

header('Location: ../index.php');
