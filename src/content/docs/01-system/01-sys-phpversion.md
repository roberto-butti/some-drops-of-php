---
title: Getting the PHP version
description: Getting the PHP version via phpversion() function
sidebar:
  label: PHP version
---

## Get used PHP version: `phpversion()`
Sometimes, you need to retrieve the version of PHP running.
The `phpversion()` function returns a string with the version of PHP used for running the current script, for example `8.2.10`.

```php
$version = phpversion();
echo $version;
```
