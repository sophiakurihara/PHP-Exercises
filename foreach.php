<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $stuff) {
	if (is_integer($stuff)) {
		echo "{$stuff} is an integer.\n";
	} elseif (is_float($stuff)) {
		echo "{$stuff} is a float.\n";
	} elseif (is_bool($stuff)) {
		echo "{$stuff} is a boolean.\n";
	} elseif (is_array($stuff)) {
		echo "{$stuff} is an array.\n";
	} elseif (is_null($stuff)) {
		echo "{$stuff} is null.\n";
	} else {
		echo "{$stuff} is a string.\n";
	}
}