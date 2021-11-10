<?php

// $i = 1;
// while ($i <= 10) 
// {
//   echo $i++;
// }

// $i = 1;
// while ($i <= 10):
//   echo $i;
//   $i++;
//   endwhile;
  
//   $x = 1;
//   while ($x <= 5) {
//     echo "The number is: $x <br>";
//     $x++;
//   }
  
  
//   $x = 0;
  
//   while ($x <= 100) {
//     echo "The number is: $x <br>";
//     $x += 10;
//   }
  
  // $arr = array("orange","banana","apple","raspberry");
  
  // $i = 0;
  // while ($i < count($arr)) {
  //   $a = $arr[$i];
  //   echo $a . "\n";
  //   $i++;
  // }
  
  // $myArray = array('aa','bb','cc','dd');
  // while (list ($key, $val) = each ($myArray)) echo $val;
  // reset($myArray);
  // while (list ($key, $val) = each ($myArray)) echo $val;
  
  
//do-while

// $i =0;
// do {
//   echo $i;
// } while ($i > 0);

// do {
//     if ($i < 5) {
//       echo "iは十分大きくありません。";
//       break;
//     }
//     $i *= $factor;
//     if ($i < $minimum_limit) {
//         break;
//     }
//     echo "iはOKです。";
    
// } while (0);

$numbers = array();
$array_size = 10;

for ($i = 0; $i < $array_size; $i++) {
  do {
    $random = rand(1,1000);
  } while (($random % 2) == 1);
  $numbers[] = $random;
}

asort($numbers);

echo '<pre>';
print_r($numbers);
echo '</pre>';

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);