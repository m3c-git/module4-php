<?php

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

        $listcategories = [];

        foreach($categories AS $key => $category)
        {
            
            $listcategories[] = new Category($category["name"]);
            $listcategories[$key]->setId($category["id"]);
        }
        return $listcategories;
    }

    public function create(Category $Category) : void
    {    $Category;
        
       /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
        Ne pas mettre les valeurs du VALUE entre backquote*/
        $query = $this->db->prepare("INSERT INTO categories (name) VALUES (:name)");
        $parameters = [
            'name' => $Category
            ];
        $query->execute($parameters);



    }

}



?>