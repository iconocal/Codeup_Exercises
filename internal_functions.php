<?php

// Internal PHP Functions Exercise


$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or 
// empty, and display "$variable_name is SET|EMPTY"

function checkVar($variable) {
	if (isset($variable)) {
		return "SET";
	} else {
		return "EMPTY";
	}
	
}

echo "\$nothing is " . checkVar($nothing) . PHP_EOL;
echo "\$something is " . checkVar($something) . PHP_EOL;
echo "\$array is " . checkVar($array) . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;






// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results










