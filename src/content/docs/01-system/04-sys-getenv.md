---
title: Getting environment variables
description: Getting the environment variables via getenv() function
sidebar:
  label: Environment variables
---

## Get environment variable value: `getenv()`

The function `getenv()` retrieves the value of an environment variable.
The function has an optional parameter: the name of the variable.
It returns a string with the value of the variable.
For example, in order to display the environment variable `PATH`:
```php
echo getenv("PATH");
```
If you use a name of variable that does not exist, it returns the boolean value `false`:
```php
echo getenv("var_that_not_exists"); // bool false
```

### All environment variables
If you call the function without any parameter all environment variables will be returned as an `array`:
```php
$envVars = getenv();
print_r($envVars); // array of strings
```
