<?php

$numbers = [1,2,3,4];

foreach ($numbers as $number) {
  echo $number * 2 .PHP_EOL;
}


$scores = [
  'Tsuchida' => 50,
  'Kawasaki' => 90,
  'Kohama' => 70,
  ];
  
 foreach ($scores as $name => $score) {
   echo $name . ':' . $score . PHP_EOL;
 } 