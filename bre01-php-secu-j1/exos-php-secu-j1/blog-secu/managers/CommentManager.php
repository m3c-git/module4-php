<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class CommentManager extends AbstractManager
{
    public function __construct()
    {

        parent::__construct();

    }

    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM comments');
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_ASSOC);

        return $comments;

    }

    public function findByPost(int $postId) : ? int
    {
        $postId = $_GET["post_id"];

        if(isset($postId))
        {
            $query = $this->db->prepare('SELECT comments.*, posts.id FROM comments 
            INNER JOIN posts ON posts.id = comments.post_id ORDER BY posts.id WHERE posts.id = :postId');
            $parameters = [
                'postId' => $postId
                ];
                $query->execute($parameters);
                $postByCategory = $query->fetch(PDO::FETCH_ASSOC);

                return $postByCategory ;
    
        }

    }

    public function create(Comment $comment) : void
    {
        //$comment = new Comment();
        $content = $_POST['content']; // Il faut prendre le nom de l'attribut "id" dans lesfomulaires
        $user_id = $_POST['user_id'];
        $post_id = $_POST['post_id'];
        
    
    
    
        
       /* Lors du INSERT à ne pas mettre les colonne entre double quote ou quote simple.
        Ne pas mettre les valeurs du VALUE entre backquote*/
        $query = $this->db->prepare("INSERT INTO comments (content, user_id, post_id,) VALUES (:content, :user_id, :post_id)");
        $parameters = [
            'content' => $content, 'user_id' => $user_id, 'post_id' => $post_id
            ];
        $query->execute($parameters);
    
    }


}