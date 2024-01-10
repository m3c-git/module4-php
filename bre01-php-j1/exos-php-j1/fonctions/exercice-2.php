<?php

function average(array $array1,) : float
{
    return array_sum($array1) / count($array1);
}

echo average([12, 15, 18, 9])."<br>";
echo average([12, 15, 18, 11, 14])."<br>";