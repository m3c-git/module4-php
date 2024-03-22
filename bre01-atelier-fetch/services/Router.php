<?php

class Router 
{
    public function handleRequest(array $get) : void
    {
        $sc = new ShopController;
        $dc = new DefaultController;


        
        if(isset($get["route"]))
        {
            if($get["route"] === "boutique")
            {
                $sc->shop();
            }
            else if($get["route"] === "ajouter-au-panier")
            {
                $sc->addToCart();
            }
            else if($get["route"] === "panier")
            {
                $sc->cart();
            }
            else
            {
                $dc->notFound();
                
            }
        }
        else
        {
            $dc->home();
        }
    }
}