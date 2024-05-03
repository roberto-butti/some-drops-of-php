---
title: Rounding numbers
description: Rounding float  or decimal numbers with PHP via round() function
sidebar:
  label: Rounding numbers
---

## Rounding numbers with the `round()` function

The `round()` function is a powerful tool for enabling you to round floating-point numbers to the nearest integer or a specified number of decimal places.

The `round()` function accepts three parameters: the number you want to round and, optionally, the number of decimal places to round to and the way and the logic to round decimal numbers. If the second parameter is omitted, `round()` will round to the nearest integer.

```php
$number = 3.76;
$rounded = round($number);
```

In the example above using round without the second parameter, the decimal number `3.76` is rounded to the nearest integer number so that `4.0`.

```php
$number = 3.76;
$rounded = round($number, 1);
// the result is 3.8
```

In the example above using `1` as the precision number (second parameter), the returned number (the nearest number with 1 precision digit) is `3.8`.

What if, the number you want to round is in the middle for example `3.5` and you want to round with `0` digits as precision?
In this case, you can use the third parameter of the `round()` function that allows you to determine the way you want to round the number.

## The rounding mode

When using the `round()` function in PHP, you can specify the rounding mode by providing one of the following constants as the third parameter:

- `PHP_ROUND_HALF_UP`: This mode rounds the number away from zero when it's halfway there. For example, `3.5` becomes `3.0`, and `-3.5` becomes `-4.0`.

```php
$number = 3.5;
$rounded = round($number, mode: PHP_ROUND_HALF_UP);
// the result is 4.0
```

- `PHP_ROUND_HALF_DOWN`: In this mode, the number is rounded towards zero when it's halfway there. So, `1.5` becomes `1.0`, and `-1.5` becomes `-1.0`.


```php
$number = 3.5;
$rounded = round($number, mode: PHP_ROUND_HALF_DOWN);
// the result is 3.0
```

- `PHP_ROUND_HALF_EVEN`: Here, the number is rounded towards the nearest **even** value when it's halfway there. This means that both `3.5` and `4.5` become `4.0`.

```php
$number = 3.5;
$rounded = round($number, mode: PHP_ROUND_HALF_EVEN);
// the result is 4.0
$number = 4.5;
$rounded = round($number, mode: PHP_ROUND_HALF_EVEN);
// the result is 4.0
```

- `PHP_ROUND_HALF_ODD`: In this mode, the number is rounded towards the nearest **odd** value when it's halfway there. So, `3.5` becomes `3.0`, and `2.5` becomes `3.0`.

```php
$number = 3.5;
$rounded = round($number, mode: PHP_ROUND_HALF_ODD);
// the result is 3.0
$number = 4.5;
$rounded = round($number, mode: PHP_ROUND_HALF_ODD);
// the result is 5.0
```

These modes provide flexibility in how numbers are rounded, allowing you to choose the rounding behavior that best suits your specific needs.

:::caution[Be careful]
The potential errors that can occur when rounding floating-point numbers are typically referred to as rounding errors or accumulated rounding errors. Accumulated rounding errors occur when multiple rounding operations are performed sequentially, leading to a cumulative discrepancy between the exact mathematical result and the rounded values.
In the provided example:

```php
$result = (1/3) + (1/3) + (1/3);
// result 1.0
$result = round(1/3,3) + round(1/3, 3) + round(1/3,3);
// result 0.999
```

Each division result (`1/3`) is rounded to three decimal places, resulting in approximate values of `0.333`. When these rounded values are summed together, the accumulated rounding errors can lead to a final result that differs slightly from the exact mathematical result.

In this case, the sum of the rounded values (`0.333` + `0.333` + `0.333`) might not precisely equal `1.0` due to the accumulated rounding errors.
:::


## Negative precision

As mentioned, the second parameter of the `round()` function is precision.
When the precision parameter is negative, it defines the number of significant digits before the decimal point to which the number is rounded. For example, with a precision of `-1`, the number is rounded to the nearest multiple of ten (the tens place). So, `234.56` would become `230`. With a precision of `-2`, it's rounded to the nearest multiple of one hundred (the hundreds place), making `234.56` become `200.0`. Similarly, with a precision of `-3`, it's rounded to the nearest thousand (the thousands place), making `234.56` become `0.0`.
