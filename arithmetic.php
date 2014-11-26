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

$num1 = 10;
$num2 = 5;

echo add($num1, $num2) . PHP_EOL;

echo subtract($num1, $num2) . PHP_EOL;

echo multiply($num1, $num2) . PHP_EOL;

echo divide($num1, $num2) . PHP_EOL;

echo modulus($num1, $num2) . PHP_EOL;



?>