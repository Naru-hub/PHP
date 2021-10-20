<?php
$i = 0;  //グローバルスコープ

function call()
{
  $i = 0; //ローカルスコープ
}

while ($i < 5) {
  call();
  $i++;
  echo '呼び出し:' . $i .'回目' . PHP_EOL;
}