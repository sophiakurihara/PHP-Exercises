<?php

$first = 100;
$second = 15;

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a + $b;
	} else {
		return throwErrorMessage();
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a - $b;
	} else {
		return throwErrorMessage();
	}
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a * $b;
	} else {
		return throwErrorMessage();
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    return $a / $b;
	} else {
		return throwErrorMessage();
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		return throwErrorMessage();
	}
}

function throwErrorMessage() {
	return "ERROR: Both arguments must be numbers.\n";
}
// Add code to test your functions here

echo add($first, $second) . PHP_EOL;
echo subtract($second, $first) . PHP_EOL;
echo multiply($first, $second) . PHP_EOL;
echo divide($first, $second) . PHP_EOL;
echo modulus($first, $second) . PHP_EOL;