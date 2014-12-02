<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


////////////////////////
// DEFINED FUNCTIONS //
//////////////////////

// Function: searchValues

function searchforName($needle, $haystack) {
	$lookFor = $needle;

	$result = array_search($lookFor, $haystack);

	if ($result === 0 || $result >= 1) {
		// return "$haystack[$result]\n";
		return 'TRUE';
	} else {
			return "FALSE";
	}
}


// Function: compareValues


// Program Begins Here

$testName = 'Tina';

echo searchforName($testName, $names) . PHP_EOL;




// Thomas' Search for Name Function Code

// $names1 = ['Wally', 'Tina', 'Dana', 'Mike', 'Amy', 'Adam'];


// function foundValue($name, $array) {
// 	$result = array_search($name, $array);

// 	// var_dump($result);

// 	if ($result === false) {
// 		return 'FALSE';
// 	} else {
// 			return 'TRUE';
// 	}
// }

// $nameToSearch = 'Wally';
// $arrayToSearch = $names1;

// echo foundValue($nameToSearch, $arrayToSearch) . PHP_EOL;

