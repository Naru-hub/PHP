<?php

// if (null) {
//   echo 'true' .PHP_EOL;
// } else {
//   echo 'false' .PHP_EOL;
// }

// $a = null;
// unset($a);
// var_dump($a);

// class Member
// {
//   function getName()
//   {
//     echo "名前を返します";
//   }
// }

// $member = new Member;
// echo gettype($member);

$triple = function ($int) {
  return $int * 3;
};

$numbers = array_map($triple,[1,2,3]);

var_dump(implode('',$numbers));
var_dump(is_callable($triple));