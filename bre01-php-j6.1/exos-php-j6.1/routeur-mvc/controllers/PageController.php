
<?php

class PageController 
{
    

    public function __construct(){}

    public function home() : void
    {
        $route = "home";
        require "templates/layout.phtml";
 
    }

    public function about() : void
    {
        $route = "a-propos";
        require "templates/layout.phtml";
    }

    public function contact() : void
    {
        $route = "contact";
        require "templates/layout.phtml";
    }


    public function erreur404() : void
    {
        $route = "404";
        require "templates/layout.phtml";
    }



}

?>