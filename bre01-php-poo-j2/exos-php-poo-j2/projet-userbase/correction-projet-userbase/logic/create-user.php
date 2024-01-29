<?php

require_once "../models/User.class.php";
require_once "../managers/UserManager.class.php";

$um = new UserManager();

if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["role"]))
{
    $user = new User($_POST["username"], $_POST["email"], password_hash($_POST["password"], PASSWORD_BCRYPT), strtoupper($_POST["role"]));
    $um->saveUser($user);
}

header("Location: /projet-userbase/index.php");

