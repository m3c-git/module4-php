<?php
    session_start();

    require "./config/connexion.php";

    $_SESSION["email"] = null;
    $_SESSION["lastname"] = null; 
    $_SESSION["firstname"] = null;

    if(isset($_SESSION["lastname"]) && isset($_SESSION["firstname"]))
    {
        require "./logon-page.phtml";
    }
    else
    {
        require "./login-form.phtml";
    }
    
    
    


?>