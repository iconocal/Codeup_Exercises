<?php

// Internal PHP Functions Exercise


$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or 
// empty, and display "$variable_name is SET|EMPTY"


function checkVar($variable) {
	unset($variable);
	if (isset($variable)) {
		return "SET";
	} else {
		return "EMPTY";
	}
	
}


// function checkEmpty($variable) {
// 	if (empty($variable)) {
// 		return "EMPTY";
// 	} else {
// 		return "NOT EMPTY";
// 	}
// }


echo "\$nothing is " . checkVar($nothing) . PHP_EOL;
echo "\$something is " . checkVar($something) . PHP_EOL;
echo "\$array is " . checkVar($array) . PHP_EOL;

echo PHP_EOL;
echo PHP_EOL;

// Check to see is $something is EMPTY or not

// echo "\$something is " . checkEmpty($something) . PHP_EOL;

// echo PHP_EOL;
// echo PHP_EOL;



// Serialize the array $array, and output the results



// Unserialize the array $array, and output the results










