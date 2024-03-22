<?php

class DefaultController extends AbstractController
{
    public function home() : void
    {
        //$this->render("home", []);
        echo '$this->ac->home()<br>';

    }

    public function page404() : void
    {
        //$this->render("404", []);
        echo '$this->ac->page404()<br>';

    }

 
}
