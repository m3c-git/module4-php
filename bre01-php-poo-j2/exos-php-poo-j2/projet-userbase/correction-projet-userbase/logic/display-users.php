<?php

require_once "managers/UserManager.class.php";

$um = new UserManager();

$um->loadUsers();

$users = $um->getUsers();
