<?php

fwrite(STDOUT, 'Feed me a starting number:' . PHP_EOL);

$start = trim(fgets(STDIN) . PHP_EOL);

fwrite(STDOUT, 'Feed me an ending number:' . PHP_EOL);

$end = trim(fgets(STDIN) . PHP_EOL);

fwrite(STDOUT, 'Counting...' . PHP_EOL);

for ($i = $start; $i <= $end; $i++) {
	echo "$i\n";
}