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

foreach ($states as $key => $value) {
	if (strpos($value, 'x') !== false) {
		echo "This state contains the letter 'x' in its name:";
		echo "\t$value\n";	
	}
}

foreach ($states as $key => $value) {
	if (strpos($value, 'a') == false) {
		echo "This state does NOT contain the letter 'a' in its name:";
		echo "\t$value\n";
	}
}

foreach ($states as $key => $value) {
	if ($key[0] == 'A') {
		echo "$key : $value\n";
	} elseif ($key[0] == 'E') {
		echo "$key : $value\n";
	} elseif ($key[0] == 'I') {
		echo "$key : $value\n";
	} elseif ($key[0] == 'O') {
		echo "$key : $value\n";
	} elseif ($key[0] == 'U') {
		echo "$key : $value\n";
	}

}

// Use a foreach to make a new array containing states that start with and end with vowels
	// call the array $statesStartingAndEndingWithVowels
	// echo "These are states starting and ending with vowels"
	// then echo each state name in this new array
foreach ($states as $key => $value) {
	$startAndEnd = array();
	
	if (substr($value, -1) == 'a' || substr($value, -1) == 'e' || substr($value, -1) == 'i' || substr($value, -1) == 'o' || substr($value, -1) == 'u') {
		if ($value[0] == 'A') {
			echo "$value\n";
			$startAndEnd.= $value;
		} elseif ($value[0] == 'E') {
			echo "$value\n";
		} elseif ($value[0] == 'I') {
			echo "$value\n";
		} elseif ($value[0] == 'O') {
			echo "$value\n";
		} elseif ($value[0] == 'U') {
			echo "$value\n";
		} 
	}
}

// use a foreach to construct a new array of all the states with "North" "East" "South" or "West"
	// call the array $arrayOfCardinalStates
	// echo "These are states with north, south, east, or west in their name"

