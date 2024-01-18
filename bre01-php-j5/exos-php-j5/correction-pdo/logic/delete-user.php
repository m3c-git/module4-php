<?php

require "../config/connexion.php";

if(isset($_GET["id"]))
{
    $id = $_GET["id"];

    $query = $db->prepare('DELETE FROM users WHERE id = :id');
    $parameters = [
        'id' => $id
    ];
    $query->execute($parameters);
    $user = $query->fetch(PDO::FETCH_ASSOC);
}

header('Location: ../index.php');

