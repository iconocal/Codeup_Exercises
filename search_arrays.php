<?php

 // first names
//  $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

//  $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// ////////////////////////
// // DEFINED FUNCTIONS //
// //////////////////////

// // Function: searchValues

// function searchforName($needle, $haystack) {
// 	$lookFor = $needle;

// 	$result = array_search($lookFor, $haystack);

// 	if ($result === 0 || $result >= 1) {
// 		// return "$haystack[$result]\n";
// 		return true;
// 	} else {
// 			return false;
// 	}
// }


// Function: compareValues

// Set counter = 0
// Loop through first array, name by name
// For each name in the first array, loop through the second array and 
// increment counter when matches are found
// or

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Dean'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



function compareArrays($names, $compare) {
	$count = 0;
	foreach ($names as $name) {
		if (array_search($name, $compare) !== false) {
	 		$count++;
	 	}	

	}
	
	return $count;
}


echo "The number of common values is: " . compareArrays($names, $compare) . PHP_EOL;

// Program Begins Here

// $testName = 'Tina';

// echo searchforName($testName, $names) . PHP_EOL;




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

