---
title: Getting memory usage
description: Getting the memory usage via memory_get_usage() function
sidebar:
  label: Memory usage
---

## Get memory usage in bytes: `memory_get_usage()`

Sometimes you need to calculate or track the memory used by your running script.

The `memory_get_usage()` function has a boolean parameter.
The default is `false`.
With the default value (`false`), you can get the number of bytes used by your script.
With the parameter set to `true` you get the bytes pre-allocated for memory pages.

```php
$mem = memory_get_usage();
$mem = memory_get_usage(true);
```
