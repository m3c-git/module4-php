<?php

require_once "../models/User.class.php";
require_once "../managers/UserManager.class.php";

$um = new UserManager();

if(isset($_GET["id"]))
{
    $user = new User("", "", "", "");
    $user->setId($_GET["id"]);

    $um->deleteUser($user);
}

header("Location: /projet-userbase/index.php");