<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

class Router
{
    private AuthController $ac;
    private DefaultController $bc;

    public function __construct()
    {
        $this->ac = new AuthController();
        $this->bc = new DefaultController();
    }
    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->bc->home();
        }
        else if(isset($get["route"]) && $get["route"] === "register")
        {
            $this->ac->register();
        }
        else if(isset($get["route"]) && $get["route"] === "check-register")
        {
            $this->ac->checkRegister();
        }
        else if(isset($get["route"]) && $get["route"] === "login")
        {
            $this->ac->login();
        }
        else if(isset($get["route"]) && $get["route"] === "check-login")
        {
            $this->ac->checkLogin();
        }
        else if(isset($get["route"]) && $get["route"] === "logout")
        {
            $this->ac->logout();
        }
        else if(isset($get["route"]) && $get["route"] === "home")
        {
            $this->bc->home();
        
        }
        else
        {
            $this->bc->page404();
        
        }

    }
}