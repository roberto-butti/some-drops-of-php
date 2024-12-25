---
title: Padding a string
description: Padding a string in PHP
sidebar:
  label: Padding string
---

## Padding strings: `str_pad()`
With the `str_pad()` function, you can pad (fill with some characters) a string.

To pad a string with spaces until it reaches the length of ten chars:

```php
echo str_pad("Hello", 10) . "-";
// Hello     -
```

The default is to pad with blank spaces `" "` at the end of the original string.

If you need to change the default behavior you have the third parameter to define the char for padding.

```php
echo str_pad("Hello", 10, "+");
// Hello+++++
```

You can also define more chars for padding:

```php
echo str_pad("Hello", 10, "+*");
// Hello+*+*+
```

You can define the "direction" of the pad with the constant `STR_PAD_RIGHT` (the default) or `STR_PAD_LEFT` or `STR_PAD_BOTH`:

```php
echo str_pad("Hello", 10, "+", STR_PAD_BOTH);
// ++Hello+++
```
