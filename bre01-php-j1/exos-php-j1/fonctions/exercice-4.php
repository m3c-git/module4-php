<?php

function getFirst(array $array1,) : ? int
{
    if (!empty($array1))
    {
        return $array1[0];
    }
    else
    {
        return null;
    }
}

echo getFirst([13, 24, 45]); // doit afficher 13
echo "<br>";
var_dump(getFirst([])); // doit afficher null
echo "<br>";
