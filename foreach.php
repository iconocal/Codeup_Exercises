<?php

// Foreach exercise iteration #2: foreach through the array($things) and output variable type

// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $value) {

//     echo gettype($value) . PHP_EOL;
// }

// Foreach exercise iteration #3: foreach through the array and output ONLY var type scalar.

// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $value) {

//     if (is_scalar($value)) {
//     echo $value . PHP_EOL;

//     }
    
// }


//
// Create a loop that will echo out every value, including those nested in arrays
//

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {

    if (is_array($thing)) {
    
        foreach ($thing as $subItem) {
            echo "$subItem\n";
            }
    }

    if (!is_array($thing)) {
     
        echo "$thing\n";
    
        }
    
}
    



