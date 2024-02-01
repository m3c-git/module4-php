<?php





class CheckConnexion 
{
    

    public function __construct(){}

    public function checkco() : void
    {
        if(isset($_POST["loginEmail"])  && isset($_POST["loginPassword"]))
        {
            echo "<p>Hello</p><br>";
            $check = new UserManager(); 
            $check->findAll();
            var_dump($check);
        }
        
    }

}
$page = new CheckConnexion();
$page->checkco();

?>