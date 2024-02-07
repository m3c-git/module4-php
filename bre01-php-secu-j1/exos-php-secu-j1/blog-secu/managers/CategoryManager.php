<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CategoryManager extends AbstractManager
{
    public function __construct()
    {

        parent::__construct();

    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM categories');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);

        return $categories;

    }

    public function findOne(int $id) : ? int
    {
        $id = $_GET["id"];

        if(isset($id))
        {
            $query = $this->db->prepare('SELECT * FROM categories WHERE id = :id');
            $parameters = [
                'id' => $id
                ];
                $query->execute($parameters);
                $category = $query->fetch(PDO::FETCH_ASSOC);

                return $category ;
    
        }

    }

}