<?php

const TAX = 0.1;
$price = 100 * (1 + TAX);
echo $price . PHP_EOL;

const TAX = 0.2;             //PHP Notice:  Constant TAX already defined in /home/ec2-user/environment/book_log/const.php on line 7で定数なので定義しなおせない
$price = 100 * (1 + TAX);
echo $price . PHP_EOL;