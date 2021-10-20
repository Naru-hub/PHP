<?php

const MAXIMUM_NAME_LENGTH = 10;

echo '名前を入力してください' . PHP_EOL;
$name = trim(fgets(STDIN));

if (mb_strlen($name) < MAXIMUM_NAME_LENGTH) {
  echo '名前の長さはOK!' . PHP_EOL;
} else {
  echo '名前が長すぎます' .PHP_EOL;
}
//PHP Fatal error:  Uncaught Error: Call to undefined function mb_strlen() in /home/ec2-user/environment/book_log/Q1.php:8 出る
//マルチバイト関数には文字コード設定が必要