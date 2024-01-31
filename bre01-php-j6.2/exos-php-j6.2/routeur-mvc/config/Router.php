
<?php

class Router 
{
    

    public function __construct(){}

    public function handleRequest(array $get) : void
    {
        if(isset($get["route"]) && $get["route"] === "a-propos") 
        {
            $page = new PageController();
            $page->about();

        }
        else if(isset($get["route"]) && $get["route"] === "contact")
        {
            $page = new PageController();
            $page->contact();
        }
        else if(!isset($get["route"]))
        {
            $page = new PageController();
            $page->home();
        }
        else
        {
            $page = new PageController();
            $page->erreur404();

        }
    }



}

?>