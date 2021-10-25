<?php

//$students = [学年=>[名前,名前]];
$students = [1=>['Tanaka','Sato'],2=>['Kawasaki']];
for($grade=1;$grade<=count($students);$grade++) {
  for($nameIndex=0; $nameIndex < count($students[$grade]);$nameIndex++) {
    echo $students[$grade][$nameIndex] . PHP_EOL;
  }
}
var_dump($students);