
<?php

class AuthController extends AbtractManager
{
    

    public function __construct(){parent::__construct();}

    public function connexion() : void
    {
        $route = "connexion";
        require "templates/layout.phtml";
 
    }

    public function checkConnexion() : void
    {
        
        if(isset($_POST["loginEmail"])  && isset($_POST["loginPassword"]))
        {
            $check = new UserManager();
            $check = $check->findEmail();
            $password = $_POST["loginPassword"];
            $hash = $check["password"];
            $isPasswordCorrect = password_verify($password, $hash);

            if(($_POST["loginEmail"] === $check["email"]) && ($isPasswordCorrect === true))
            {   
                
                $route = "espace-perso";
                $_SESSION["username"] = $check["username"];
                require "templates/layout.phtml";
                
            }
            else
            {   
                echo $_POST['loginPassword'] ." ". $isPasswordCorrect;
                echo "<p>Email ou Password NOK !!!</p><br>";
            }
            
            
            
        }

    }

    public function inscription() : void
    {
        $route = "inscription";
        require "templates/layout.phtml";
    }

    public function checkInscription() : void
    {
        $route = "check-inscription";
        require "templates/layout.phtml";
    }


}

?>