---
title: Getting the monotonic time
description: Getting the monotonic time via hrtime() function
sidebar:
  label: Monotonic time
---

## Get monotonic time: `hrtime()`

:::note
A monotonic clock is a time source that won't ever jump forward or backward (due to NTP or Daylight Savings Time updates)
:::

When you need to calculate the elapsed time between two points you will need to save the start time and the end time to calculate the difference. The elapsed time should not be affected by external behavior like time modification by an external software (NTP) or time adjustment.

The `hrtime()` returns an array of two integers:
- seconds (first element at index `0`)
- nanoseconds (second element at index `1`)

```php
// Calling hrtime with no parameter ("false" is the default),
// it returns an array of integers in the form [seconds, nanoseconds]
$monotonictime = hrtime();
print_r($monotonictime);
/*
Array
(
    [0] => 119061
    [1] => 668127916
)
*/

```

The `hrtime()` function may also have an optional second boolean parameter `$as_number`. If the parameter is set to `true`, then the `hrtime()` function returns an `int` value (nanoseconds) instead of the array of integers in the form [seconds, nanoseconds]. Probably calling `hrtime(true)` makes the calculation of elapsed time easier like in the example below:

```php

$start = hrtime(true);
sleep(2); // execute some tasks
$time = hrtime(true) - $start;

$timeInSeconds = $time / 1_000_000_000;
// or in a shorter form:
$timeInSeconds = $time / 1e+9;

echo "Exection time in seconds: " . $timeInSeconds . PHP_EOL;

```
