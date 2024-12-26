---
title: Generating an array
description: Creating an array with a sequence of values
sidebar:
  label: Generating an array
---

## Generate and fill a new array: `range()`

To generate an array with a sequence of values, you can utilize the `range()` function.

For instance, if you need to create an array containing the values 1, 2, 3, 4, 5 (from 1 to 5), you can employ the `range()` function with two arguments. The first argument represents the lower value, and the second argument represents the higher value:

```php
$a = range(1,5);
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
```

To create a similar array with descending values, you can set the higher value as the first argument. The `range()` function implementation automatically detects the descending approach if the first argument is greater than the second one:

```php
$a = range(5,1);
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
```

If you use ASCII characters instead of integers, you will create an array with the sequence of characters:

```php
$a = range('a','e');
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
```

You can also create character arrays in descending order:

```php
$a = range('e','a');
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
```

If you are using strings instead of single characters, just the first character of the string will be considered:

```php
$a = range('anaconda','elephant');
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
```

If you intend to create an array containing `'A'..'Z'` and `'a'..'z'`, you cannot directly use `range('A', 'z')`. This is because the `range()` function for characters is based on the ASCII table. In the middle of the ASCII table, between upper and lower case characters, there are additional characters such as `[ \ ] ^ _`.

Instead, you can use the `range()` function separately for upper case and lower case characters, and then merge the two sequences:


```php
$a = array_merge(range('A','Z'), range('a','z'));
```

You can also generate a range of floating-point numbers. In this case, each number in the sequence is incremented by 1.0 from the previous value:

```php
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
```

### Step

The third parameter (optional, with a default value of 1) determines the increment for each element. For example, if you want to generate odd numbers within the range of 1 to 10:

```php
$a = range(1,10,2);
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
```

The step parameter can be negative. In such cases, a sequence in descending order is created:

```php
$a = range(10,1,-2);
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
```

If you use a negative step value and the first parameter is lower than the second one, a `ValueError` exception is raised:

```php
$a = range(1,10,-2);
```

Will raise the `ValueError` exception:

```text
ValueError range(): Argument #3 ($step) must be greater than 0 for increasing ranges.
```
