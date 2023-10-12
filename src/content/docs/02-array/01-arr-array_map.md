---
title: Mapping an array
description: applying a function to each element of an array
sidebar:
  label: Mapping an array
---

## Apply function to each array element: `array_map()`
If you want to apply logic (a function) for each element of an array instead of using a loop, you may use the `array_map()` function.
This results in the creation of a new array of the same length with the modified elements.
The first parameter is the function name and the second parameter is the array to apply the function to.
A new array is returned with the values modified by the function defined as the first parameter.

Here's an example:

```php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);

print_r($b);
```

In the example above, the output of the $b variable would be:

```php
[1, 8, 27, 64, 125]
```

## Using multiple arrays

You can also use multiple arrays in the `array_map()` function by seperating them with commas.
Assuming you have several array variables and you need to join each of the values,
you can use `array_map()` with multiple arrays by seperating each of the arrays with commas(,).

Here's an example:

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

