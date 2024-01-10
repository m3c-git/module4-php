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
       echo "$user[firstName]"; 
       echo "<br>";
       echo "$user[lastName]"; 
       echo "<br>";
       echo "$user[firstName]"; 
       echo "<br>";
       echo "$user[lastName]";
    
}