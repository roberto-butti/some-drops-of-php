---
title: Trimming a string
description: Trimming a string in PHP
sidebar:
  label: Trim
---

## Delete characters: `trim()`

With `trim()` function you can delete one or more characters from the beginning and end of a string.

Usually, the `trim()` function is intended as stripping blank space, in this case you can delete any characters.

```php
echo trim("*_***___TEST_*______________", "*_") . PHP_EOL;
// result: TEST
```

The second parameter, you can list the characters that you want to eliminate.
