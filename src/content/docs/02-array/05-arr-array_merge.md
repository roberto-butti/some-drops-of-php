---
title: Merging arrays
description:  Merging arrays
sidebar:
  label: Merging arrays
---
If you need to merge two or more arrays you can choose to use the `array_merge()` function or use the spread operator.

## Merge arrays with `array_merge()`

The `array_merge()` function merges or appends 2 or more arrays.
If you have 2 arrays, the first one with 3 elements and the second one with 4 elements, `array_merge()` will return a new array with 7 elements.

```php
$array_1 = [1,2,3];
$array_2 = [3,4,5,6];

print_r(array_merge($array_1, $array_2));
```

The result is an array with 7 elements with keys that start from 0:

```text
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
```

Very simple.
Now let's focus on the keys. In PHP, arrays are implemented as maps, a kind of list that associates values to keys.

### Key collision: array merge of arrays with numeric keys

If the keys are integers during the merge operation the keys are "rewritten", so you will obtain an array with keys starting from 0, and the original keys don't matter. Consider the following example for clarity:

```php
$array_1 = [3 => "three, array 1",2 => "two, array 1",1 => "one, array 1"];
$array_2 = [3 => "three, array 2",4 => "four, array 2",5 => "five, array 2",6 => "six, array 2"];

print_r(array_merge($array_1, $array_2));
```

The result is an array with 7 elements with new keys:

```text
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
```

### Key collision: array merge of arrays with string keys

If the keys are strings the merge operation keeps the original keys. In case of collision, only the last element will be included in the array:

```php
$array_1 = ["one" => 1,"two" => 2,"three" => 3];
$array_2 = ["three" => "three","four" => "four","five" => "five","six" => "six"];

print_r(array_merge($array_1, $array_2));
```

Take a look at what happens to the ("three" => 3) element of the first array and the ("three" => "three") element of the second array. Because of the "collision" ("three" was used as a key twice), only the value associated with the last "three" is preserved:

```text
Array
(
    [one] => 1
    [two] => 2
    [three] => three
    [four] => four
    [five] => five
    [six] => six
)
```

## Merge arrays with the spread operator

The spread operator `...` used with arrays, expands the items of the array.

```php
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
```

Merging arrays via the spread operator (`...`) involves combining two or more arrays into a single array by unpacking their elements. The unpacked elements of each array will be the elements of the new array, like the next example:

```php
$array_1 = ['🍎', '🍋', '🍓'];
$array_2 = ['🍌', '🍊', '🍐'];
$items = [ ...$array_1, ...$array_2 ];

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
```

In the example above the `$items` array is a flat array with all the elements from the `$array_1` and `$array_2` arrays.

Using the spread operator, regarding the collision of keys, the same explanation made for the `array_merge()` function applies.

```php
$array_1 = ["a" => '🍎', "b" => '🍋', "c" => '🍓'];
$array_2 = ["a" => '🍌', "b" => '🍊', "c" =>'🍐'];
$items = [...$array_1, ...$array_2];
print_r($items);
/*
Array
(
    [a] => 🍌
    [b] => 🍊
    [c] => 🍐
)
*/
```
