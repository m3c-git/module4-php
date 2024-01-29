<?php 

require "Reader.class.php";

$user = new User();

$reader = new Reader($email = "test@test.fr", $password = "toto");

$favorite = $reader->addBookToFavorites("Tintin");
$favorite = $reader->addBookToFavorites("Milou");

var_dump($favorite);

$favorite = $reader->removeBookFromFavorites("Tintin");
var_dump($favorite);

var_dump($reader->login());

?>