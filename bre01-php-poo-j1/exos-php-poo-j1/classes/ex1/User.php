<?php

require "User.class.php";

$user1 = new User(1, "admin", "admin");
$user2 =  new User(2, "user", "user");

echo "{$user1->getId()} : {$user1->getUserName()} {$user1->getPassword()}<br>" ;

echo "{$user2->getId()} : {$user2->getUserName()} {$user2->getPassword()}";


?>