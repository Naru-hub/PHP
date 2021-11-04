<?php

// echo gettype(1) . PHP_EOL;
// echo gettype(0) . PHP_EOL;
// echo gettype(-1) . PHP_EOL;

// var_dump(0b10);
// var_dump(010);
// var_dump(0x10);
// var_dump(PHP_INT_MAX);
// var_dump((PHP_INT_MAX+1) === (PHP_INT_MAX+2));

// $a = 'php';
// $b = $a;
// $a[0] = 'z';

// echo $a . PHP_EOL;
// echo $b . PHP_EOL;


// $c = 'php';
// $d = &$c;
// $c[0] = 'z';

// echo $c . PHP_EOL;
// echo $d . PHP_EOL;

$numbers = [1,2,3];
$doublenumbers = [];

foreach ($numbers as $number) {
  $doublenumbers[] = $number * 2;
}

print_r($doublenumbers);



function double($i)
{
  return $i*2;
}
$n = double(3);
echo $n; //