<?php

function isOdd(int $nb1) : bool
{
    if($nb1%1 === 1)
    {
        return false;
    }
    else
    {
        return true;
    }
    
}

var_dump(isOdd(12)); // doit afficher 1 ou true
echo "<br>";
var_dump(isOdd(29)); // doit afficher 0 ou false
echo "<br>";