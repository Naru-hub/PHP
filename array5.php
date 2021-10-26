<?php

// $weights = [
//     'Kumagae' => 50,
//     'Suemitsu' => 90,
//     'Kawasaki' => 45,
//   ];
  
//   sort($weights);
//   // asort($weights);
//   var_dump($weights);

// $movie = [
//     'name' => 'totoro',
//   ];
// $movie['year'] = 1988;

// $movie2 = [
//     'director' => 'Miyazaki Hayao',
//   ];
  
// $movie3 = array_merge($movie, $movie2);
// var_dump(count($movie3));

// function square($n)
// {
//     return $n * $n;
// }

// $arr = [2,4,6];
// $newArr = array_map('square', $arr);
// print_r($newArr);

// function even($n)
// {
//     return ($n % 2) ===0;
// }

// $arr = [1,2,3,4,5];
// $newArr = array_filter($arr,'even');
// print_r($newArr);

$userAges = [
        'Tanaka' => 20,
        'kimura' => 25,
        'Tabata' => 40,
    ];
    
    $userOver30 = array_filter
    ($userAges, function ($v) {
        return $v >= 30;
    });
    
    print_r($userOver30);
    
    