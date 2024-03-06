<?php

class AuthController extends AbstractController
{
    public function register() : void
    {
        $this->render("register", []);
    }

    public function checkRegister() : void
    {
        $this->redirect("index.php?route=register", []);
        //echo '$this->ac->checkRegister()<br>';
    }

    public function login() : void
    {
        $this->render("login", []);
        
    }

    public function checkLogin() : void
    {
        $this->redirect("index.php?route=login", []);
       //echo '$this->ac->checkLogin()<br>';
    }

    public function logout() : void
    {
        $this->redirect("index.php?route=login", []);
        //echo '$this->ac->logout()<br>';

    }

}
