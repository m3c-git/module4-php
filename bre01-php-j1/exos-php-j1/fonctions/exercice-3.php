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

echo isOdd(10);