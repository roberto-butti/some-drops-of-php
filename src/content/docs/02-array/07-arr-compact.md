---
title: Creating array from variables
description: creating an array from variables
sidebar:
  label: Creating array from variables
  badge:
# ['note', 'danger', 'success', 'caution', 'tip', 'default']
    text: Updated
    variant: note
---

## Creating array from variables: `compact()`

If you have variables such as:

```php
$name = "My name";
$lastname = "My lastname";
```
and you need to create an array where the keys correspond to the variable names ("name" and "lastname") and the values correspond to the variable values, you can use the `compact()` function. This function is particularly useful when you have a method that requires variables to be passed in a compact format to another method. For instance, in controllers, you may use certain variables and then pass them as input values in an array to a template renderer.

After calling the `compact()` function with the above examples, you will obtain:

```
Array
(
    [name] => My name
    [lastname] => My lastname
)
```

Here an example using the `compact()` function:

```php
$name = "My name";
$lastname = "My lastname";
$a = compact("name", "lastname");
print_r($a);
/*
Array
(
    [name] => My name
    [lastname] => My lastname
)
*/
```

You can use the `compact()` function by passing the names of variables as strings with multiple parameters. Alternatively, you can call `compact()` with an array of variable names as strings, which produces equivalent behavior:

```php
$name = "My name";
$lastname = "My lastname";
$a = compact(["name", "lastname"]);
print_r($a);
/*
Array
(
    [name] => My name
    [lastname] => My lastname
)
*/
```
