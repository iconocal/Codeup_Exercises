<?php

// function add($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
//     	echo $a + $b . PHP_EOL;
// 	} else {
// 		echo "ERROR: Both arguments must be numbers\n";
// 	}
// }

// function subtract($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
//     	echo $a - $b . PHP_EOL;
// 	} else {
// 		echo "ERROR: Both arguments must be numbers\n";
// 	}
// }

// function multiply($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
//     	echo $a * $b . PHP_EOL;
// 	} else {
// 		echo "ERROR: Both arguments must be numbers\n";
// 	}

// }

function numError($a, $b) {
	echo "ERROR: Both arguments must be numbers\n";
	echo "You entered {$a} and {$b}\n";
}

function divError($b) {
	echo "ERROR: Your divisor was {$b}. That is not allowed.\n";
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	if ($b === 0) {
    		divError($b);
		} else {
			echo $a / $b . PHP_EOL;
		} 
	} else {
		numError($a, $b);
		}	
}


// function modulus($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
// 		echo $a % $b . PHP_EOL;
// 	} else {
// 		echo "ERROR: Both arguments must be numbers\n";
// 	}		
// }



$num1 = 10;
$num2 = 0;

// add($num1, $num2);

// subtract($num1, $num2);

// multiply($num1, $num2);

divide($num1, $num2);

// modulus($num1, $num2);










// default value: boolean $strict determines which is done, if or else
// this allows for different behaviors within the same function

// function compare($a, $b, $strict = TRUE) {
//     if ($strict === true) {
//         echo $a === $b ? 'True' : 'False';
//     } else {
//         echo $a == $b ? 'True' : 'False';
//     }

//     echo PHP_EOL;
// }

// compare('Madonna', 'Lady Gaga', true);
// compare('Madonna', 'Lady Gaga');


// Validating Arguments
// use variable casting to temporarily force the type of data you want
// in this case it would convert input to integers if that's what we want
//

// function add($a, $b) {
//     echo (int) $a +  (int) $b;
// }

// // But the BEST way to do this is like such:

// function add($a, $b) {
//     if (is_numeric($a) && is_numeric($b)) {
//         echo $a + $b;
//     } else {
//         echo "ERROR: Both arguments must be numbers\n";
//     }
// }










?>