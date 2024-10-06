<?php

function cube($n)
{
    return $n * $n * $n;
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
/*
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
*/

// Second example with multiple arrays
$firstNames = ['Mary', 'John'];
$lastNames = ['Jane', 'Doe', "bb"];

function addGreeting($first, $last)
{
    return 'Hello, ' . $first . ' ' . $last . '!';
}

$greetedNames = array_map('addGreeting', $firstNames, $lastNames);

print_r($greetedNames);
/*
Array
(
    [0] => Hello, Mary Jane!
    [1] => Hello, John Doe!
)
*/


// Third example with multiple arrays for performing some math calculation
// For each month of the last year (so 12 element), I have an array with
// the number of Kilometers done by running and an array with the number
// of Kilometers done by cycling.
// I want to calculate the sum of the Kilometers done for each month.

$kmBiking = [252, 280, 294, 302, 260, 298, 302, 320, 450, 342, 312, 301];
$kmRunning = [102, 95, 101, 80, 86, 121, 114, 102, 96, 84, 95, 105];


$totalKmsPerMonth = array_map(
    fn($bike, $run) => $bike + $run,
    $kmBiking,
    $kmRunning,
);

print_r($totalKmsPerMonth);
/*
Array
(
    [0] => 354
    [1] => 375
    [2] => 395
    [3] => 382
    [4] => 346
    [5] => 419
    [6] => 416
    [7] => 422
    [8] => 546
    [9] => 426
    [10] => 407
    [11] => 406
)
*/


$kmBiking = [252, 280, 294, 302, 260, 298, 302, 320, 450, 342, 312, 301];
$kmRunning = [102, 95, 101, 80, 86, 121, 114, 102, 96, 84, 95, 105];
$totalKmsPerYear = 0;

$totalKmsPerMonth = array_map(
    function ($bike, $run) use (&$totalKmsPerYear) {
        $totalKmsPerYear = $totalKmsPerYear + $bike + $run;
        return $bike + $run;
    },
    $kmBiking,
    $kmRunning,
);

print_r($totalKmsPerMonth);
print_r($totalKmsPerYear);
