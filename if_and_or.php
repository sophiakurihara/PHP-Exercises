<?php

$x = 0;
$y = 5;
$z = 10;

// TODO:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}\n";
}
// TODO:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
if (0 < $x || $x < 10) {
	echo "0 is less than {$x} OR {$x} is less than 10";
}
// TODO:
// repeat the if statement for $y and $z.
if (0 < $y || $z < 10) {
	echo "0 is less than {$y} OR {$z} is less than 10";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".

if (0 < $x && $x < 10) {
	echo "0 is less than {$x} AND {$x} is less than 10";
}

// TODO:
// repeat the if statement for $y and $z.
if (0 < $y && $y < $z) {
	"0 is less than {$y} OR {$y} is less than {$z}";
}