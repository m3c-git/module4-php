<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Post
{
    private ? int $id = null;

    public function __construct(private string $title, private string $excerpt, private string $content, private User $author, private string $created_at)
    {
        
    }

    /* Le getter de l'attribut id */
    public function getId() : int 
    {
        return $this->id;
    }

    /* Le setter de l'attribut id */
    public function setId(string $id) : void
    {
        $this->id = $id;
    }

     /* Le getter de l'attribut title */
     public function getTitle() : string 
     {
         return $this->title;
     }
 
     /* Le setter de l'attribut title */
     public function setTitle(string $title) : void
     {
         $this->title = $title;
     }

     /* Le getter de l'attribut excerpt */
    public function getExcerpt() : string 
    {
        return $this->excerpt;
    }

    /* Le setter de l'attribut excerpt */
    public function setExcerpt(string $excerpt) : void
    {
        $this->excerpt = $excerpt;
    }

    /* Le getter de l'attribut content */
    public function getContent() : string 
    {
        return $this->content;
    }

    /* Le setter de l'attribut content */
    public function setContent(string $content) : void
    {
        $this->content = $content;
    }

    /* Le getter de l'attribut author */
    public function getAuthor() : User 
    {
        return $this->author;
    }

    /* Le setter de l'attribut author */
    public function setRole(User $author) : void
    {
        $this->author = $author;
    }

    /* Le getter de l'attribut created_at */
    public function getCreatedAt() : string 
    {
        return $this->created_at;
    }

    /* Le setter de l'attribut created_at */
    public function setCreatedAt(string $created_at) : void
    {
        $this->created_at = $created_at;
    }

}