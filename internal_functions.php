<?php

// Internal PHP Functions Exercise


$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or 
// empty, and display "$variable_name is SET|EMPTY"

function checkVar($variable) {
	if (isset($variable)) {
		return "Variable is set.";
	} else {
		return "Variable is empty.";
	}
	
}

echo checkVar($nothing) . PHP_EOL;
echo checkVar($something) . PHP_EOL;
echo checkVar($array) . PHP_EOL;






// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results










