<?php


// for ($num = 1; $num <= 100; $num++) {
		
// 	if($num % 3 == 0 && $num % 5 != 0) {
// 			echo "Fizz\n";
// 	} 

// 	elseif($num % 5 == 0 && $num % 3 != 0) {
// 		echo "Buzz\n";
// 	}

// 	elseif($num % 3 == 0 && $num % 5 == 0) {
// 		echo "FizzBuzz\n";
// 	}

// 	else {
// 		echo "\$num has a value of {$num}\n";
// 	}

// }

// stored variable solution

for ($num = 1; $num <= 100; $num++) {

	$divBy3 = ($num % 3 == 0);
	$divBy5 = ($num % 5 == 0);

	// rest of code not modified to use $divBy variables
		
	if($num % 3 == 0 && $num % 5 != 0) {
			echo "Fizz\n";
	} 

	elseif($num % 5 == 0 && $num % 3 != 0) {
		echo "Buzz\n";
	}

	elseif($num % 3 == 0 && $num % 5 == 0) {
		echo "FizzBuzz\n";
	}

	else {
		echo "\$num has a value of {$num}\n";
	}

}
