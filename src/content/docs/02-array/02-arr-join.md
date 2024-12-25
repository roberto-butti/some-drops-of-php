---
title: Array to string
description: creating a string from the array elements
sidebar:
  label: Array to string
---

With PHP you can convert an array into a string.
To do that we have the `implode()` function and for historical and retro-compatibility reasons we have also the `join()` function. The `join()` function is an alias for `implode()`. So from the developer perspective, there are no differences in terms of result calling `implode()` or calling `join()`.

## A string from an array:  `implode()` and/or `join()`

If you need to create a string starting from an array you can use the `implode()` (or `join()`) function.
For example:
- you have an array `["a", "b" , "c"]` and you want to obtain `"abc"`;
- you have an array `["a", "b" , "c"]` and you want to obtain `"a-b-c"` (with "-" as the separator);
The `implode()` (or `join()`) function concatenates each element of the array using the string separator.
The elements may be string, character, number, or boolean.
The separator may be a string (or just one character).

If you have an array of characters and you want to obtain a string with "-" as the separator:
```php
$string = implode("-", ["a", "b", "c"]); // "a-b-c"
```
You can also use a longer string as the separator:
```php
$string = implode("--", ["aa", "bb", "cc"]); // "aa--bb--cc"
```

If you have an array of strings and you want to obtain a string with " " as the separator:
```php
$string = implode(" ", ["How", "are", "you", "?"]); // "How are you ?"
```
You can join not just strings but numbers and booleans as well:
```php
$string = implode("_", ["a", 1, true]); // "a_1_1"
```

You can omit the separator to concatenate the elements of the array, the returned string is a string with the array elements concatenated with no separator character:
```php
$string = implode(["a", "b", "c"]); // "abc"
```

:::note
In all the examples above the `implode()` function is used. In the same way, with the same parameters and the same result you can use the `join()` function if you prefer because `join` is an alias for `implode`.
:::
