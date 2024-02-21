<?php

class Router
{
    private BlogController $bc;
    
    public function __construct()
    {
        $this->bc = new BlogController();
    }

    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->bc->home();
        }
    }
}