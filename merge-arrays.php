<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays ($arrayOne, $arrayTwo) {
	$arrayThree = [];
	foreach ($arrayOne as $value) {
		$result = array_search($value, $arrayTwo);
		array_push($arrayThree, $value);
	}

	foreach ($arrayTwo as $value) {
		$result2 = array_search($value, $arrayOne);
		if ($result2 !== false) {
			$extraNames = array_shift($arrayThree);
			array_push($arrayThree, $extraNames);
		} else {
			array_unshift($arrayThree, $value);
		}	
	} 

	print_r($arrayThree);

}

combineArrays($names, $compare);