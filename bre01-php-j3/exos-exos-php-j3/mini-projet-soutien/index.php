<?php 
error_reporting(E_ERROR | E_PARSE);
require "post.phtml";

$route = null;

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}

require "layout.phtml";

?>