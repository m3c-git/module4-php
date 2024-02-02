<?php

require "models/Category.php";
require "managers/AbstractManager.php";
require "managers/CategoryManager.php";






// instanciez une nouvelle catégorie en laissant son id null
$category = new Category("Street Workout");

// passez la en argument de la méthode create de votre manager
$createcategory = new CategoryManager();
$createcategory = $createcategory->create($category);

// var_dump de la catégorie que vous venez d'instancier
var_dump($createcategory);
