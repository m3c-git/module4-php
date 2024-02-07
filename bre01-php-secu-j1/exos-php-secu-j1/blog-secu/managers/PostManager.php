<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class PostManager extends AbstractManager
{
    public function __construct()
    {

        parent::__construct();

    }

    public function findLatest() : array
    {
        $query = $this->db->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT 4');
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

    public function findByCategory(int $categoryId) : ? int
    {
        $categoryId = $_GET["category_id"];

        if(isset($categoryId))
        {
            $query = $this->db->prepare('SELECT posts.*, posts_categories.category_id, categories.title FROM posts  
            INNER JOIN posts_categories ON posts.id = posts_categories.post_id 
            JOIN categories ON categories.id = posts_categories.category_id
            ORDER BY posts_categories.category_id WHERE posts_categories.category_id = :categoryId');
            $parameters = [
                'categoryId' => $categoryId
                ];
                $query->execute($parameters);
                $postByCategory = $query->fetch(PDO::FETCH_ASSOC);

                return $postByCategory ;
    
        }

    }


}