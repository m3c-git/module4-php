
<?php

class Router 
{
    

    public function __construct(){}

    public function handleRequest(array $get) : void
    {
        if(isset($get["route"]) && $get["route"] === "connexion") 
        {
            $page = new AuthController();
            $page->connexion();

        }
        else if(isset($get["route"]) && $get["route"] === "check-connexion")
        {
            if(isset($_POST["loginEmail"])  && isset($_POST["loginPassword"]))
            {
                $page = new AuthController();
                $page->checkConnexion();
            }


        }
        else if(isset($get["route"]) && $get["route"] === "inscription")
        {
            $page = new AuthController();
            $page->inscription();
        }
        else if(isset($get["route"]) && $get["route"] === "check-inscription")
        {

        }
        else if(isset($get["route"]) && $get["route"] === "espace-perso")
        {
            $page = new PageController();
            $page->espacePerso();
        }
        else if(!isset($get["route"]))
        {
            $page = new AuthController();
            $page->connexion();
        }
        else
        {
            $page = new PageController();
            $page->erreur404();

        }
    }



}

?>