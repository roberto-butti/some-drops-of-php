<?php

$arr = ['a', 'b'];
$exists = array_key_exists(0, $arr); // true
var_dump($exists);
$exists = array_key_exists(1, $arr); // true
var_dump($exists);
$exists = array_key_exists(2, $arr); // false
var_dump($exists);

$arr = ['a' => 'first one', 'b' => 'second one'];
$exists = array_key_exists('a', $arr); // true
var_dump($exists);
$exists = array_key_exists('b', $arr); // true
var_dump($exists);
$exists = array_key_exists('c', $arr); // false
var_dump($exists);
