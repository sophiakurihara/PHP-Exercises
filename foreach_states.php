<?php
$states = [
			    'AL' => 'Alabama',
			    'AK' => 'Alaska',
			    'AZ' => 'Arizona',
			    'AR' => 'Arkansas',
			    'CA' => 'California',
			    'CO' => 'Colorado',
			    'CT' => 'Connecticut',
			    'DE' => 'Delaware',
			    'DC' => 'District of Columbia',
			    'FL' => 'Florida',
			    'GA' => 'Georgia',
			    'HI' => 'Hawaii',
			    'ID' => 'Idaho',
			    'IL' => 'Illinois',
			    'IN' => 'Indiana',
			    'IA' => 'Iowa',
			    'KS' => 'Kansas',
			    'KY' => 'Kentucky',
			    'LA' => 'Louisiana',
			    'ME' => 'Maine',
			    'MD' => 'Maryland',
			    'MA' => 'Massachusetts',
			    'MI' => 'Michigan',
			    'MN' => 'Minnesota',
			    'MS' => 'Mississippi',
			    'MO' => 'Missouri',
			    'MT' => 'Montana',
			    'NE' => 'Nebraska',
			    'NV' => 'Nevada',
			    'NH' => 'New Hampshire',
			    'NJ' => 'New Jersey',
			    'NM' => 'New Mexico',
			    'NY' => 'New York',
			    'NC' => 'North Carolina',
			    'ND' => 'North Dakota',
			    'OH' => 'Ohio',
			    'OK' => 'Oklahoma',
			    'OR' => 'Oregon',
			    'PA' => 'Pennsylvania',
			    'PR' => 'Puerto Rico',
			    'RI' => 'Rhode Island',
			    'SC' => 'South Carolina',
			    'SD' => 'South Dakota',
			    'TN' => 'Tennessee',
			    'TX' => 'Texas',
			    'VI' => 'US Virgin Islands',
			    'UT' => 'Utah',
			    'VT' => 'Vermont',
			    'VA' => 'Virginia',
			    'WA' => 'Washington',
			    'WV' => 'West Virginia',
			    'WI' => 'Wisconsin',
			    'WY' => 'Wyoming'
			  ];

echo "These states contain the letter 'x' in their names:\n";
foreach ($states as $key => $value) {
	if (strpos($value, 'x') !== false) {
		echo "\t$value\n";	
	}
}

echo "These states do NOT contain the letter 'a' in their names:\n";
foreach ($states as $key => $value) {
	if (strpos($value, 'a') == false) {
		echo "\t$value\n";
	}
}

$vowels = ['a','e','i','o','u','A','E','I','O','U'];

echo "States and their abbreviations, starting with vowels:\n";
foreach ($states as $key => $value) {
	if (in_array($key[0], $vowels)) {
		echo "\t$key : $value\n";
	}

}

// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array

$startAndEnd = [];
foreach ($states as $key => $value) {
	if (in_array($value[0], $vowels, $strict = true) 
		&& in_array(substr($value, -1), $vowels, $strict = true)) {
		$startAndEnd[$key] = $value;
	}
}

echo "These are states starting and ending with vowels:" . PHP_EOL;
foreach ($startAndEnd as $startAndEnd) {
	echo "\t$startAndEnd" . PHP_EOL;
}

// use a foreach to construct a new array containing states with names that are more than one word.
	// call the array $statesWithMoreThanOneWordNames
	// echo "These are the states with more than one word in their name"
	// then echo each state name below
$moreThanOne = [];
foreach ($states as $key) {
	if(strpos($key, ' ') !== false) {
		array_push($moreThanOne, $key);
	}
}

echo "These are the states with more than one word:" . PHP_EOL;
foreach ($moreThanOne as $moreThanOne) {
	echo "\t$moreThanOne" . PHP_EOL;
}

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"
$arrayOfCardinalStates = [];

echo "These are the states with North, East, South, or West in their names:\n";
foreach ($states as $key => $value) {
	if (in_array($value[0], $directions)) {
		echo "\t$key : $value\n";
	}
}

