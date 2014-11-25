<?php

// Foreach exercise iteration #2: foreach through the array($things) and output variable type

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {

    echo gettype($value) . PHP_EOL;
}

// Foreach exercise iteration #3: foreach through the array and output ONLY var type scalar.

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {

    echo gettype($value) . PHP_EOL;
}





