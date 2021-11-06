<?php

$pref = '福岡';

switch ($pref) {
  case '東京';
    echo '関東';
    break;
  case '京都';
    echo '関西';
    break;
  case '福岡';
    echo '九州';
    break;
  default:
    echo 'それ以外のエリア';
}


/match式

$pref = '大阪';

$area = match　($pref) {
  '東京'=>'関東',
  '京都','大阪' => '関西',
  default => 'その他のエリア',
};

echo $area;

$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);