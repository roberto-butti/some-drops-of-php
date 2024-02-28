---
title: Mapping an array
description: applying a function to each element of an array
sidebar:
  label: Mapping an array
  badge:
# ['note', 'danger', 'success', 'caution', 'tip', 'default']
    text: Updated
    variant: note
---

## Apply function to each array element: `array_map()`
If you wish to execute a specific logic (a function) on every element within an array without resorting to manual iteration, the `array_map()` function provides a convenient solution.
This function facilitates the application of a designated function to each element of the array, resulting in the generation of a new array with the modified elements, while preserving the original array's length.

When utilizing `array_map()`, the first parameter denotes the function to be applied to each element, while the second parameter represents the array upon which the function operates. Subsequently, the function specified as the first parameter is executed for every element of the array, culminating in the creation of a new array containing the modified values.

Let's illustrate this with an example where we compute the cube of each element in an array:


```php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);

print_r($b);

```

In the example provided, the variable `$a` represents the input array consisting of 5 integer elements.
The function `cube()` takes one input parameter. Within the `array_map()` function, the input array (specified as the second parameter) is iterated over. For each element encountered, the `cube()` function (designated as the first parameter, specified as a string denoting the function's name) is invoked.

As a result, the `array_map()` function generates a new array `$b` containing 5 elements. Each element within `$b` corresponds to the result obtained by applying the cube function to the corresponding element of the input array `$a`.


The input array `$a`:
```
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
```

The output array `$b`:
```
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
```


## Using multiple arrays

If you have multiple array variables and need to concatenate their corresponding values, you can utilize `array_map()` with multiple arrays by separating each array with a comma `,`.

Here's an example demonstrating the usage of `array_map()` with multiple arrays, where the `addGreeting()` function takes more than one parameter (arrays with the same number of elements):

```php

$firstNames = ['Mary', 'John'];
$lastNames = ['Jane', 'Doe'];

function addGreeting($first, $last)
{
    return 'Hello, ' . $first .' '. $last . '!';
}

$greetedNames = array_map('addGreeting', $firstNames, $lastNames);

print_r($greetedNames);
```

In the example above, the output would be:

```php
['Hello, Mary Jane!', 'Hello, John Doe!']
```


## Another example of using multiple arrays

Here's another example involving multiple arrays for performing mathematical calculations.
For each month of the past year (thus, comprising 12 elements), I have an array representing the number of kilometers run and another array representing the number of kilometers cycled. My goal is to calculate the total kilometers covered for each month.

In this example, instead of defining a traditional function, I'll employ an arrow function `fn($bike, $run) => $bike + $run`, which returns the sum of the first parameter `$bike` and the second parameter `$run`.

```php
$kmBiking = [252, 280, 294, 302, 260, 298, 302, 320, 450, 342, 312, 301];
$kmRunning = [102, 95, 101, 80, 86, 121, 114, 102, 96, 84, 95, 105];


$totalKmsPerMonth = array_map(
    fn($bike, $run) => $bike + $run,
    $kmBiking,
    $kmRunning
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
```


## Calculating additional information

The `array_map()` function returns an array of elements as a result of executing a specified function for each element. If you need to calculate additional information, you can harness the combined power of the `array_map()` function and the `use()` directive in function definitions.

For instance, suppose you have two arrays: one containing the distance run per month and the other containing the distance ridden. You may wish to calculate:

- The total distance for each month.
- The total distance for the entire year.

In this scenario, you can define a variable, such as `$totalKmsPerYear`, to act as an accumulator for the total distance. You can then pass this variable to the anonymous function using the `use()` directive.
The `use()` directive is particularly useful for passing values to anonymous functions. Without it, the anonymous function may not have sufficient visibility of variables defined outside its scope.

Additionally, it's important to note that since we intend to modify the value of the accumulator variable, it must be passed to the anonymous function by reference, not by value. To achieve this, prepend the variable with the `&` operator, such as `&$totalKmsPerYear`.

```php

$kmBiking = [252, 280, 294, 302, 260, 298, 302, 320, 450, 342, 312, 301];
$kmRunning = [102, 95, 101, 80, 86, 121, 114, 102, 96, 84, 95, 105];
$totalKmsPerYear = 0;

$totalKmsPerMonth = array_map(
    function ($bike, $run) use (&$totalKmsPerYear) {
        $totalKmsPerYear = $totalKmsPerYear + $bike + $run;
        return $bike + $run;
    },
    $kmBiking,
    $kmRunning
);

print_r($totalKmsPerMonth);
print_r($totalKmsPerYear);
```