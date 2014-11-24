<?php

// Prompt user for starting 
// stdout message
// $start = stdin

fwrite(STDOUT, "Enter starting number: ");
$start = trim(fgets(STDIN));

// ask user for end number
// stdout message
// $end = stdin

fwrite(STDOUT, "Enter end number: ");
$end = trim(fgets(STDIN));

// ask user for incrementer
// stdout message
// $incrementer = stdin

fwrite(STDOUT, "Increment by: ");
$incrementer = trim(fgets(STDIN));

// loop below with information above
// set $i with a range of $start to $end
// increment using $incrementer

for ($i=$start; $i <= $end; $i += $incrementer) { 
	echo "$i\n";
}


