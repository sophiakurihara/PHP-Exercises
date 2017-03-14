<?php

fwrite(STDOUT, 'Feed me a starting number:' . PHP_EOL);

$start = trim(fgets(STDIN) . PHP_EOL);

fwrite(STDOUT, 'Feed me an ending number:' . PHP_EOL);

$end = trim(fgets(STDIN) . PHP_EOL);

fwrite(STDOUT, 'Count by what increment? Enter an integer:' . PHP_EOL);

$increment = trim(fgets(STDIN) . PHP_EOL);

fwrite(STDOUT, 'Counting...' . PHP_EOL);

if(!is_numeric($start) || !is_numeric($end)) {
	fwrite(STDOUT, "Please enter integers as arguments:" . PHP_EOL);
} elseif (is_numeric($increment) && $increment > 0) {
	for ($i = $start; $i <= $end; $i += $increment) {
	echo "$i\n";
	}
} else {
	for ($i = $start; $i <= $end; $i++) {
	echo "$i\n";
	}
	fwrite(STDOUT, "Please only enter an integer for increment value." . PHP_EOL);
}

exit(0);