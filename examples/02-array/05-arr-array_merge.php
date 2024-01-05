<?php

// merge of two arrays
$array_1 = [1, 2, 3];
$array_2 = [3, 4, 5, 6];
print_r(array_merge($array_1, $array_2));
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 3
    [4] => 4
    [5] => 5
    [6] => 6
)
*/

// merge of two arrays with numeric keys
$array_1 = [3 => 'three, array 1', 2 => 'two, array 1', 1 => 'one, array 1'];
$array_2 = [3 => 'three, array 2', 4 => 'four, array 2', 5 => 'five, array 2', 6 => 'six, array 2'];
print_r(array_merge($array_1, $array_2));
/*
Array
(
    [0] => three, array 1
    [1] => two, array 1
    [2] => one, array 1
    [3] => three, array 2
    [4] => four, array 2
    [5] => five, array 2
    [6] => six, array 2
)
*/

// merge of two arrays with string keys
$array_1 = ['one' => 1, 'two' => 2, 'three' => 3];
$array_2 = ['three' => 'three', 'four' => 'four', 'five' => 'five', 'six' => 'six'];
print_r(array_merge($array_1, $array_2));
/*
Array
(
    [one] => 1
    [two] => 2
    [three] => three
    [four] => four
    [five] => five
    [six] => six
)
*/

$array_1 = ['🍎', '🍋', '🍓'];
$array_2 = ['🍌', '🍊', '🍐'];
var_dump(...$array_1, ...$array_2);
/*
string(4) "🍎"
string(4) "🍋"
string(4) "🍓"
string(4) "🍌"
string(4) "🍊"
string(4) "🍐"
*/

$items = [...$array_1, ...$array_2];
print_r($items);
/*
Array
(
    [0] => 🍎
    [1] => 🍋
    [2] => 🍓
    [3] => 🍌
    [4] => 🍊
    [5] => 🍐
)
*/


$array_1 = ["a" => '🍎', "b" => '🍋', "c" => '🍓'];
$array_2 = ["a" => '🍌', "b" => '🍊', "c" => '🍐'];
$items = [...$array_1, ...$array_2];
print_r($items);
