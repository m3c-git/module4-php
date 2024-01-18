<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
require "../config/connexion.php";

 if(isset($_POST))
 {
    
    $email = CheckInput($_POST['email']); // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
    $password = CheckInput($_POST['password']);
    $firstname = CheckInput($_POST['firstName']);
    $lastname = CheckInput($_POST['lastName']);



    
   /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
    N pas mettre les valeurs du VALUE entre backquote*/
    $query = $db->prepare("INSERT INTO users (email, password, firstname, lastname) VALUES (:email, :password, :firstname, :lastname)");
    $parameters = [
        'email' => $email, 'password' => $password, 'firstname' => $firstname, 'lastname' => $lastname
        ];
    $query->execute($parameters);



 }

 function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }