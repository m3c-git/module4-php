<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];


foreach($users as $user)
{
       echo "$user[0][firstName]"; 
       echo "<br>";
       echo "$user[0][lastName]"; 
       echo "<br>";
       echo "$user[1][firstName]"; 
       echo "<br>";
       echo "$user[1][lastName]";
    
}