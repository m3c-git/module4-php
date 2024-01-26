<?php // Correction formateur, je n'avais pas compris 'ennonce de cette partie
require "Character.class.php";

$character = new Character("Ragnar");

$sword = new Weapon("Sword", 10);

$character->setWeapon($sword);

echo "{$character->getName()} : {$character->getWeapon()->getName()} : {$character->getWeapon()->getDamages()} dégâts<br>";

echo $character->fight();

?>