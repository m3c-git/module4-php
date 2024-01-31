<?php 

require "./config/autoload.php";

$get = new Router();
$get->handleRequest($_GET);

?>