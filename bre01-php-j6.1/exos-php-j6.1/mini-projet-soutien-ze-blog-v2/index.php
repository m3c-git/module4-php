<?php
error_reporting(E_ERROR | E_PARSE); // j'en ai besoin sur mon post parce que mon serveur PHP est un poil strict (commentaire formateur)

require "config/connexion.php";
require "data/posts.php";

$route = null;

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}

require "layout.phtml";

?>

