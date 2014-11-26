<?php

function add($a, $b) {
    echo $a + $b;
}

function subtract($a, $b) {
    echo $a - $b;
}

function multiply($a, $b) {
    echo $a * $b;
}

function divide($a, $b) {
    echo $a / $b;
}

function modulus($a, $b) {
	echo $a % $b;
}

echo add(1, 1) . PHP_EOL;

echo subtract(10, 3) . PHP_EOL;

echo multiply(3, 3) . PHP_EOL;

echo divide(21, 3) . PHP_EOL;

echo modulus(100, 2) . PHP_EOL;



?>