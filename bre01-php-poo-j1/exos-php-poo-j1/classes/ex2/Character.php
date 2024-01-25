<?php

require "Character.class.php";

$user1 = new Character(1);

echo "{$user1->getgetFullName()} <br>";

$user1->setFirstName("Sarah");
$user1->setLastName("Connor");

echo "{$user1->getgetFullName()}";

?>