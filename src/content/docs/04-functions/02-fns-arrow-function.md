---
title: Arrow functions in PHP
description: Arrow functions in PHP
sidebar:
  label: Arrow functions
slug: functions/arrow
---

Arrow functions are similar to anonymous functions but offer a more concise syntax and are intended for simpler use cases.

```php
// Defining a classical function
function sum_classic($x, $y) {
    return $x + $y;
}
// defining an anonymous function
$sum_anonymous = function ($x, $y) {
    return $x + $y;
};
// defining an arrow function
$sum_arrow = fn($x, $y) => $x+y;


```

Arrow functions in PHP differ from anonymous functions in several ways, one of which is their ability to access variables from the "external" scope. This means variables defined outside the arrow function can be directly used within its expression.

## An example

For example, consider the following code snippet:

```php
$a = 4;
$b= 5;
$sumx = fn() => $a + $b;
echo $sumx() . PHP_EOL;
```

Here, the variables `$a` and `$b` are declared and initialized outside the arrow function. The arrow function (assigned to `$sumx` and declared with `fn()`) captures these variables and uses them in its expression to calculate their sum. When the function is called, it outputs `9`.
