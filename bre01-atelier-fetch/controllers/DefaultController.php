<?php

class DefaultController extends AbstractController
{

    public function home() : void
    {
        echo "home"; 
    }

    public function notFound() : void
    {
        echo "notFound"; 

        
    }
}