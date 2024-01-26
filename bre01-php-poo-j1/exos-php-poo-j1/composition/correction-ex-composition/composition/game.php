<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

require "Character.class.php";

$character = new Character("Ragnar");

$sword = new Weapon("Sword", 10);

$character->setWeapon($sword);

echo "{$character->getName()} : {$character->getWeapon()->getName()} : {$character->getWeapon()->getDamages()} dégâts<br>";

echo $character->fight();
