<?php

// basic sequence, from 1 to  5
$a = range(1, 5);
print_r($a);
/*
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
*/

// descending with numbers, from 5 to 1
$a = range(5, 1);
print_r($a);
/*
Array
(
    [0] => 5
    [1] => 4
    [2] => 3
    [3] => 2
    [4] => 1
)
*/

// with chars
$a = range('a', 'e');
print_r($a);
/*
Array
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
)
*/

// descending, from 'e' to 'a'
$a = range('e', 'a');
print_r($a);
/*
Array
(
    [0] => e
    [1] => d
    [2] => c
    [3] => b
    [4] => a
)
*/

// upper and lower case
$s = implode(array_merge(range('A', 'Z'), range('a', 'z')));
echo $s . PHP_EOL;
/*
ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz
*/

// Float
$a = range(1.5, 4.45);
print_r($a);
/*
Array
(
    [0] => 1.5
    [1] => 2.5
    [2] => 3.5
)
*/


// Step, odd numbers
$a = range(1, 10, 2);
print_r($a);
/*
Array
(
    [0] => 1
    [1] => 3
    [2] => 5
    [3] => 7
    [4] => 9
)
*/

// Step, negative
$a = range(10, 1, -2);
print_r($a);
/*
Array
(
    [0] => 10
    [1] => 8
    [2] => 6
    [3] => 4
    [4] => 2
)
*/
