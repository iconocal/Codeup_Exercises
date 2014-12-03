<?php


// Converts array into list n1, n2, ..., and n3

// Adds alphabetize capability //

function humanized_list($inputArray, $alpha = false) {
	if ($alpha == true) {
		sort($inputArray);
	}

	$lastName = array_pop($inputArray);
	$newList = implode(', ', $inputArray);

	return "{$newList}, and {$lastName}";

}

//////////////////
// Main Script //
////////////////

 // Original String to explode //

 $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


// TODO: Convert the string into an array //

$physicistsArray = explode(', ', $physicistsString);

// Function call to humanize that list //

$famousFakePhysicists = humanized_list($physicistsArray, true);

// Output sentence //

echo $famousFakePhysicists . PHP_EOL;










 ?>