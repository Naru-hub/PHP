<?php

$members = ['Watanabe','Fukusima'];
$members[] = 'Taguchi';
echo $members[2] . PHP_EOL;

$user = ['name','Kume'];
$user['age'] = 25;
echo $user['age'] . PHP_EOL;

//多次元配列
$members = [
  [
    'name' => 'Fukusima',
    'age' => '35',
  ],
  [
    'name' => 'Kume',
    'age' => '25',
  ],
];

echo $members[0]['name'] . PHP_EOL;
echo $members[1]['age'] . PHP_EOL;


$members = [
    [
      'name' => 'yamaura',
      'team' => [
        'sales',
        'marketing',
        ],
    ],
];
  
var_dump($members[0]['team'][1]);  