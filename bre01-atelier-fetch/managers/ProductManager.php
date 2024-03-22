<?php

class ProductManager extends AbstractManager
{

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM products');



        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        $products = [];
        if($result)
        {
            $value = new Product($result["name"], $result["description"], $result["picture_url"], $result["picture_alt"],$result["price"]);
            $value->setId($result["id"]);

            $products[] = $value;

            return $products;
        }

        return null;
    }


    public function findOne(int $id) : ? Product
    {
        $query = $this->db->prepare('SELECT * FROM products WHERE id=:id');

        $parameters = [
            "id" => $id
        ];

        $query->execute($parameters);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if($result)
        {
            $product = new Product($result["name"], $result["description"], $result["picture_url"], $result["picture_alt"],$result["price"]);
            $product->setId($result["id"]);

            return $product;
        }

        return null;
    }

    

}