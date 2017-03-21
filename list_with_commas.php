<?php

function humanizedList($array, $sort = false) {
	if ($sort !== false) {
		asort($array);
		array_pop($array);
		array_push($array, 'and Tony Stark.');
	} else {
		array_pop($array);
		array_push($array, 'and Tony Stark.');
	}

$newArray = implode(', ', $array);

return ($newArray);
	
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$famousFakePhysicistsArray = explode(', ', $physicistsString);

$famousFakePhysicists = humanizedList($famousFakePhysicistsArray, asort);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}" . PHP_EOL;

