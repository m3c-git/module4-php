<?php

class ShopController extends AbstractController
{

    public function shop() : void
    {

        $pm = new ProductManager();
        $products = $pm->findAll();
        dump($products);


            



        $this->render("shop/shop.html.twig", [
            "title" => "Boutique", "products" => $products
        ]);
    }

    public function addToCart() : void
    {

        $_SESSION["cart"] = [];

        if(isset($_POST["product_id"]))
        {
 
           }
            $productById = new ProductManager();
            //$product = $productById->findOne($_POST["product_id"]);

            //$product->toArray();

            $_SESSION["cart"] = ["pomme" => ["name" => "golden", "description" => "délicieuse pomme", "picture_url" => "picture_url_golden.com", "picture_alt" => "alt de la picture" ]];

            $this->renderJson($_SESSION["cart"]);
            
            var_dump($_SESSION["cart"]);
            
            
        

    }

    public function cart() : void
    {
        $this->render("shop/cart.html.twig", [
            "title" => "Panier"
        ]);

    }
}
