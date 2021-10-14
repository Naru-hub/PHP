<?php

// $numbers = [1,2,3,4,5];

// foreach ($numbers as $number) {
//   echo $number * 2 .PHP_EOL;
// }

$currencies = [
  'japan' => 'yen',
  'us' => 'dollar',
  'england' => 'pound',
  ];
  foreach($currencies as $country => $currency) {
    echo $country . ': '. $currency .PHP_EOL;
  }




//無限ループwhile
// $i = 0;

// while (true) {
//   //50より少なければ
//   if ($i <= 50) {
//       //10ずつ増やし、数値を出力する
//       // $i = $i + 10;
//       echo $i . PHP_EOL;
//       $i += 10;
//   } else {
//       //ループ処理を終了する
//       break;
//   }
// }