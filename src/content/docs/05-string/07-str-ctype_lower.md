---
title: Validating a lower alphabetic string
description: Validating a lower alphabetic string in PHP
sidebar:
  label: Validating lower alpha string
---

## Validate strings, lower case letters: `ctype_lower()`

The `ctype_lower()` function returns `true` if the input string contains all alphabetic lower case characters `("a".."z")`:

```php
ctype_lower("abcdefg"); // true
ctype_lower("abCDEFG"); // false
```
