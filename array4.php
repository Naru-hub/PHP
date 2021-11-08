<?php


$members = [
    'taguchi',
    'age' => 25,
    'sales',
    'hoge',
];

$member = ['T','A'];
var_dump($members);


$fruits = array(
    "fruits" => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1,2,3,4,5,6),
    "holes" => array("first", 5 => "second", "third")
    );
    print_r($fruits);
    
    $array = array(1, 1, 1, 1,  1, 8 => 1, 4 => 1, 19, 3 => 13);
    print_r($array);
    
    
    $firstquarter = array(1 => 'January', 'February', 'March');
    print_r($firstquarter);
    
    $foo = array('bar' => 'baz');
    echo "Hello {$foo['bar']}!";
    
    