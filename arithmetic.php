<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

// Add code to test your functions here
$a = 25;
$b = 5;

echo add($a, $b) . PHP_EOL;
echo subtract($b, $a) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;