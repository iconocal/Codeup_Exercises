<?php

// function add($a, $b) {
//     echo $a + $b;
// }

// function subtract($a, $b) {
//     echo $a - $b;
// }

// function multiply($a, $b) {
//     echo $a * $b;
// }

// function divide($a, $b) {
//     echo $a / $b;
// }

// function modulus($a, $b) {
// 	echo $a % $b;
// }

// $num1 = 10;
// $num2 = 5;

// echo add($num1, $num2) . PHP_EOL;

// echo subtract($num1, $num2) . PHP_EOL;

// echo multiply($num1, $num2) . PHP_EOL;

// echo divide($num1, $num2) . PHP_EOL;

// echo modulus($num1, $num2) . PHP_EOL;


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