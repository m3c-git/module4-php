<?php

class DefaultController extends AbstractController
{
    public function home() : void
    {
        $this->render("home", []);

    }

    public function page404() : void
    {
        $this->render("404", []);

    }

 
}
