<?php

// $number = 1;
// echo $number++ . PHP_EOL;  //1
// echo $number . PHP_EOL;    //2


// $number = 1;
// echo ++$number . PHP_EOL;  //2
// echo $number . PHP_EOL;    //2

$number = 1;
var_dump($number == 1);
var_dump($number === 1);
var_dump($number == '1');   //bool(true)
var_dump($number === '1');  //bool(false)

$x1 = 1;
$y1 = 1;
$x2 = 2;
$y2 = 2;

echo sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);