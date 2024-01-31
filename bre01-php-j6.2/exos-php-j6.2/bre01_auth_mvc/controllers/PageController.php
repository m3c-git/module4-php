
<?php

class PageController 
{
    

    public function __construct(){}

    public function espacePerso() : void
    {
        $route = "espace-perso";
        require "templates/layout.phtml";
    }

    public function erreur404() : void
    {
        $route = "404";
        require "templates/layout.phtml";
    }



}

?>