<?php

if(isset($_POST["loginEmail"])  && isset($_POST["loginPassword"]))
{
    $check = new UserManager(); 
    $check->findAll();
    var_dump($check);
}

?>