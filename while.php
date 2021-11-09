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
  
  $arr = array("orange","banana","apple","raspberry");
  
  $i = 0;
  while ($i < count($arr)) {
    $a = $arr[$i];
    echo $a . "\n";
    $i++;
  }
  
  $myArray = array('aa','bb','cc','dd');
  while (list ($key, $val) = each ($myArray)) echo $val;
  reset($myArray);
  while (list ($key, $val) = each ($myArray)) echo $val;
  
  
