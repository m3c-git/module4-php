<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class Comment
{
    private ? int $id = null;

    public function __construct(private string $content, private User $user_id, private Post $post_id)
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

     /* Le getter de l'attribut user_id */
    public function getUserId() : User 
    {
        return $this->user_id;
    }

    /* Le setter de l'attribut user_id */
    public function setUserId(string $user_id) : void
    {
        $this->user_id = $user_id;
    }

    /* Le getter de l'attribut post_id */
    public function getPostId() : Post 
    {
        return $this->post_id;
    }

    /* Le setter de l'attribut post_id */
    public function setPostId(Post $post_id) : void
    {
        $this->post_id = $post_id;
    }

}