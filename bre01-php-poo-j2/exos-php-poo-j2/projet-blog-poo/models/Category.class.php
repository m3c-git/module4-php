<?php

require "Post.class.php";


class Category
{

    private ? int $id = null; 
    private array $Post = [];


    public function __construct(private string $title, private string $description){

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

    public function getDescription() : string 
    {
        return $this->description;
    }

    public function setEmail(string $description) : void
    {
        $this->description = $description;
    }
   
    public function getPost() : array 
    {
        return $this->Post;
    }

    public function setPost(string $Post) : void
    {
        $this->Post = $Post;
    }
   

    public function addPost(Post $publi) : void 
    {
        foreach($this->Post AS $key => $article)
        {
            if($article != $publi)
            {
                $this->Post = $publi;
            }

        }
    }

    public function removePost(Post $publi) : void
    {

        unset($this->Post[$publi]);

    }


}

?>