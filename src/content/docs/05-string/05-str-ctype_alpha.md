---
title: Validating an alphabetic string
description: Validating an alphabetic string in PHP
sidebar:
  label: Validating alphabetic string
---

## Validating alphabetic strings: `ctype_alpha()`
When you need to validate strings, you can use one of the `ctype_...()` functions.

The `ctype_alpha()` function returns `true` if the input string contains all alphabetic characters.

```php
ctype_alpha("myteststring"); // true
ctype_alpha("my test string"); // false
```
