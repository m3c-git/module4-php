<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

 require "../config/connexion.php";

 if(isset($_POST))
 {

    $userId = intval($_POST['userId']) ;
    $email = CheckInput($_POST['email']); // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
    $password = CheckInput($_POST['password']);
    $firstname = CheckInput($_POST['firstName']);
    $lastname = CheckInput($_POST['lastName']);
var_dump($userId);


    
   /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
    N pas mettre les valeurs du VALUE entre backquote*/
    $query = $db->prepare("UPDATE users SET email = :email, password = :password, firstname = :firstname, lastname = :lastname WHERE id = :id");
    $parameters = [
        'id' => $userId, 'email' => $email, 'password' => $password, 'firstname' => $firstname, 'lastname' => $lastname
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