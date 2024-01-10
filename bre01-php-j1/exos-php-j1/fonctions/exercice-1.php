<?php

function concat(string $string1, string $string2) : string
{
    return $string1 . "" . $string2;
}

echo concat("Hello ", "World !<br>");