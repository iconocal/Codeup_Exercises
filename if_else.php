<?php

// $a = 5;
// $b = 10;
// $c = '10';

// // Shorten the next 2 statements into an if/else

// // if ($a < $b) {
// //     // output the appropriate result
// //     echo "$a is less than $b";
// // }

// // if ($b > $a) {
// //     // output the appropriate result
// //     echo "$b is greater than $a";
// // }

// if ($a < $b) {
// 	echo "$a is less than $b";
// } else {
// 	echo "$b is greater than $a";
// }



// // Shorten the next 2 statements into an if/else

// $a = 5;
// $b = 10;
// $c = '10';

// if ($b >= $c) {
//     // output the appropriate result
//     echo "$b is greater than or equal to $c\n";
// }

// if ($b <= $c) {
//     // output the appropriate result
//     echo "$b is less than or equal to $c\n";
// }

// $a = 5;
// $b = 10;
// $c = '10';

// echo ($b >= $c) ? "$b is greater than or equal to $c\n" : "$b is less than or equal to $c\n";





// combine the next 4 conditionals into
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal


$a = 5;
$b = 10;
$c = '10';

// if ($b == $c) {
//     // output the appropriate result
//     echo "$b is equal to $c";
// }

// if ($b === $c) {
//     // output the appropriate result
//     echo "$b is identical to $c";
// }

// if ($b != $c) {
//     // output the appropriate result
//     echo "$b is not equal to $c";
// }

// if ($b !== $c) {
//     // output the appropriate result
//     echo "$b is not identical to $c";
// }


// Is equivalent to...

if ($b == $c) {
	echo "$b is equal to $c";
} elseif ($b === $c) {
	echo "$b is identical to $c";
} elseif ($b != $c) {
	echo "$b is not equal to $c";
} elseif ($b !== $c) {
	echo "$b is not identical to $c";
}




