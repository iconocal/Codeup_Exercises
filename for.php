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
// $tempinc = STDIN
// terminary op to check for integer
// $incrementer = $tempinc IF $tempinc = integer
// if no/invalid input set $incrementer to 1 by default

fwrite(STDOUT, "Increment by: ");
$tempinc = trim(fgets(STDIN));
$incrementer = (is_numeric($tempinc)) ? $tempinc : 1;


// loop below with information above
// set $i with a range of $start to $end
// increment using $incrementer

for ($i= $start; $i <= $end; $i += $incrementer) { 
	echo "$i\n";
}


