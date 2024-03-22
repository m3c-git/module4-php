<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class AuthController extends AbstractController
{
    public function login() : void
    {
/*         $um = new UserManager();
        $um = $um->findByEmail('test@test.fr');

        dump($um);
 */
        $this->render("login", []);
    }

    public function checkLogin() : void
    {
        if(isset($_POST["email"])  && isset($_POST["password"]))
        {
        /*  $unsafeCode = "<script>alert('toto');</script>";
            $safeCode = htmlspecialchars($unsafeCode); */
            $checkemail = $this->checkInput($_POST["email"]);
            $infosuser = new UserManager();
            var_dump($infosuser->findByEmail($checkemail));
            $infosuser = $infosuser->findByEmail($checkemail);

            
            $password = $this->checkInput($_POST["password"]); 
            $hash = $infosuser["password"];
            $isPasswordCorrect = password_verify($password, $hash);
            

            if(($checkemail === $infosuser["email"]) && ($isPasswordCorrect === true))
            {   
                // si le login est valide => connecter puis rediriger vers la home
                $this->redirect("index.php");
                // $route = "espace-perso";
                $_SESSION["username"] = $infosuser["username"];
                // require "templates/layout.phtml";
                
            }
            else
            {   
                // sinon rediriger vers login
                $this->redirect("index.php?route=login");
                echo $_POST['loginPassword'] ." ". $isPasswordCorrect;
                echo "<p>Email ou Password NOK !!!</p><br>";
            }
        }


        
    }

    public function register() : void
    {
/*         $um = new UserManager();
        $test = new User("test",'test@test.fr',"test");
        $um->create($test); */


        $this->render("register", []);
        //echo '$this->ac->register()<br>';

    }

    public function checkRegister() : void
    {
        
        // si le register est valide => connecter puis rediriger vers la home
        // $this->redirect("index.php");

        // sinon rediriger vers register
        // $this->redirect("index.php?route=register");
    }

    public function logout() : void
    {
        session_destroy();

        $this->redirect("index.php");
    }

    private function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}