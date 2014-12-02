<?php

// Ask user to choose input and output measures from array (tsp), (tbsp), (floz), (cp), (pt).
// 

// Ask user for measurement: float type

// Ask what unit measure to convert to (tsp), (tbsp), (floz), (cp), (pt).

// probably be a switch statement, some functions:

$conFrom = array('[A]' => 'Tsp', '[B]' => 'Tbsp', '[C]' => 'fl oz', '[D]' => 'Cups', '[E]' => 'Pints', '[F]' =>'Quarts', '[G]' => 'Gallons');

$tsp = 2.5;

// Defined Functions

// function listMeasures

function listMeasure($measures) {
	$measure = '';
	foreach ($measures as $key => $value) {
		// key++;
		$measure .= "$key $value\n";
	}
	return "$measure\n";
}

// function getInput

function getInput($numTrigger = false) {
	if($numTrigger) {
		return strtoupper(trim(fgets(STDIN)));
	} else {
		return round((trim(fgets(STDIN))), 2);
	}
}




echo listMeasure($conFrom) . PHP_EOL;

echo "Please select a unit of measure by letter: \n";

$input = getInput($numTrigger = true);

echo "You entered: $input\n";


// function convert_tsp_to_tbsp($tsp) {
// 	return "{$tsp} teaspoons = " . round(($tsp * 0.33333), 2) . " tablespoons\n";
// }

// echo convert_tsp_to_tbsp($tsp);


// or

// function convert_to_tbsp($convert_from) {
// 	switch($convert_from) {
// 		case 'tsp':
// 			formula
// 			break;
// 		case 
// 	}
// }