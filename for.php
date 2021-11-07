<?php

for ($i = 1; $i <= 10; $i++) {
  echo $i . PHP_EOL ;
}

$people = [
    ['name' => 'Hamada', 'height' => 170],
    ['name' => 'Matsumoto', 'height' => 180],
  ];
  
for ($i = 0; $i < count($people); $i++) {
    echo $people[$i]['height'] . PHP_EOL;
}


//while
$i = 0;
while($i <= 100) {
  echo $i . PHP_EOL;
  $i += 10;
}

  
  //break,continue
  
  $numbers = [1, 4, 8, 'abc', 10];
  $even = 0;
  
  foreach($numbers as $number) {
    if (!is_numeric($number)) {
      echo '数値ではないので処理を中断' . PHP_EOL;
      break;
    }
    if ($number % 2) {    //奇数をスキップ
      continue;
    }
    $even += $number;
  }
  
  echo '偶数の値の合計' . $even . PHP_EOL;