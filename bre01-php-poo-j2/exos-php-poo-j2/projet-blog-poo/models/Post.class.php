<?php

require "User.class.php";
require "Category.class.php";

class Post
{

    private ? int $id = null; 
    private array $categories = [];

    public function __construct(private string $title, private string $excerpt, private string $content, private User $author, private string $createdat){

    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function setId(string $id) : void
    {
        $this->id = $id;
    }

    public function getTitle() : string 
    {
        return $this->title;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    public function getExcerpt() : string 
    {
        return $this->excerpt;
    }

    public function setExcerpt(string $excerpt) : void
    {
        $this->excerpt = $excerpt;
    }
   
    public function getContent() : string 
    {
        return $this->content;
    }

    public function setContent(string $content) : void
    {
        $this->content = $content;
    }

    public function getAuthor() : User
    {
        return $this->author;
    }

    public function setAuthor(User $author) : void
    {
        $this->author = $author;
    }
   
    public function getCreatedat() : string 
    {
        return $this->createdat;
    }

    public function setCreatedat(string $createdat) : void
    {
        $this->createdat = $createdat;
    }

    public function getCategories() : array 
    {
        return $this->categories;
    }

    public function setCategories(string $categories) : void
    {
        $this->categories = $categories;
    }
   
    public function addCategory(Category $category) : void 
    {
        foreach($this->categories AS $key => $categorie)
        {
            if($categorie != $category)
            {
                $this->categories = $category;
            }

        }
    }

    public function removeCategory(Category $category) : void
    {
        unset($this->categories[$category]);
    
    }


}

?>