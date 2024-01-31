<?php 
require "./config/connexion.php";

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($users as $infos => $user)
            {
                $password = $user["password"];
                $hash = password_hash($password, PASSWORD_DEFAULT);
                echo $user["firstname"] . "" . "$hash<br>";
            }

?>