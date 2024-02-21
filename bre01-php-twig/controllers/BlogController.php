<?php

class BlogController extends AbstractController
{
    public function home()
    {
        $posts = new PostManager();
        $posts = $posts->findAll();
        dump($posts);

        $this->render("home.html.twig", ["posts" => $posts]);
    }
}