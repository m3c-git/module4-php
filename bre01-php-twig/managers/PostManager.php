<?php

use LDAP\Result;

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

    public function findAll() : array
    {


        $query = $this->db->prepare('SELECT * FROM posts');
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $posts = [];

        foreach($results as $item)
        {
            $post = new Post($item["title"], $item["excerpt"], $item["content"]);
            $post->setId($item["id"]);
            $posts[] = $post;
        }

        return $posts;
    }

    
}