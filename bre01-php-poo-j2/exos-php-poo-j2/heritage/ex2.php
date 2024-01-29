<?php 

require "Character.class.php";
require "Warrior.class.php";
require "Mage.class.php";

$character = new Character();

$warrior = new Warrior($life = 50, $name = "toto", $energy = 60);

$mage = new Mage($life = 10, $name = "papo", $mana = 30);

echo "{$character->introduce()}<br>";
echo "{$warrior->introduce()}<br>";
echo "{$mage->introduce()}<br>";
echo "<br>";
echo "{$warrior->introduce()}, j'ai {$warrior->getLife()} de vies et $energy d'energies <br>";
echo "{$mage->introduce()}, j'ai {$mage->getLife()} de vies et $mana de mana <br>";


?>