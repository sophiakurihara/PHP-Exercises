<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = date('N');


switch($dayOfWeek) {
    case 1:
        echo "Today is Monday" . PHP_EOL;
        break;
    case 2:
        echo "Today is Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Today is Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Today is Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Today is Friday" . PHP_EOL;
        break;
    case 6:
        echo "Today is Saturday" . PHP_EOL;
        break;
    case 7:
        echo "Today is Sunday" . PHP_EOL;
        break;
}
