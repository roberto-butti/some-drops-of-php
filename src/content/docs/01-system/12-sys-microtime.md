---
title: Getting the current UNIX timestamp
description: Getting the currenti UNIX timestamp via microtime() function
sidebar:
  label: Current timestamp
---

## Return current UNIX timestamp: `microtime()`

The function `microtime()` returns the current UNIX timestamp in seconds, with microseconds.
The function `microtime()` may have an input boolean parameter to control the output:
- no input or input `false`: it returns a string in the form "msec sec";
```php
// Calling microtime with no parameter ("false" is the default),
// it returns a string in the form "msec sec"
$microtime = microtime();
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;
```
- input `true`: it returns a float sec.msec.
```php
// Calling microtime with "true" parameter,
// it returns a float sec.msec
$microtime = microtime(true);
$microtimeType = gettype($microtime);
echo $microtime . " (" . $microtimeType . ")" . PHP_EOL;
```

## Why you need to avoid to use microtime() to measure the time
If you need to measure the time consumed, like a stopwatch or timer, you should use the `hrtime()` function.
This is because `microtime()` reads the current time from the clock.
If you read the start time and the end time to calculate the difference you could see some inconsistency. For example, let's try to think about if the datetime is changed between readings (manually or software like ntp will update the clock, so the date time).


:::tip
If you need to measure time like a stopwatch or timer, you should use another function: `hrtime()`.
:::