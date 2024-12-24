---
title: Formatting a string
description: Formatting a string in PHP using the sprintf() function
sidebar:
  label: Formatting a string
---

## Using `sprintf()` function for formatting a string

The `sprintf()` function helps create strings using a template structure.

```php
$template = "Hi %s, how are you?";
$name = "John";
echo sprintf($template, $name);
// "Hi John, how are you?"
```

The `%s` serves as a placeholder for a string. It indicates that at the current position, according to this format, I intend to substitute the placeholder with a value. The value is defined as the second parameter in the `sprintf()` function call.

In the same way, you can use the placeholder `%d` for numbers :

```php
$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old.', $name, $age);
echo $string;
// "Hi John, you are 25 years old."
```

In this last example, with the ways shown, value ordering plays a crucial role in placeholder substitution. The first declared value `$name` is used to replace the first placeholder found in the string. The second declared value `$age` is used to replace the second placeholder and so on.

There is the possibility of declaring placeholders with index:

```php
$name = 'John';
$age = 25;
$string = sprintf('Hi %s, you are %d years old. Goodbye my friend %1$s', $name, $age);
echo $string;
// "Hi John, you are 25 years old. Goodbye my friend John"
```

In the last example scenario, the `1$`, in the `%1$s` placeholder, signifies "take the first value from the list of the `sprintf()` parameters".
The first value is `$name`, while the second value in the example is `$age`.
So, the returned string of the `sprintf()` function:

```php
sprintf('Hi %s, you are %d years old. Goodbye my friend %1$s', $name, $age);
```

will be: "Hi **John**, you are **25** years old. Goodbye my friend **John**".

### Padding

If you need to add fill characters when replacing a placeholder, you can define how many characters in total the replaced value should have.

For example, if you want to add space characters at the beginning of the defined value to get a string of a predefined length, say 10 characters, you can use the syntax: `%10s`.

```php
$name = 'John';
$age = 25;
echo sprintf('---%10s: %s---', "Name", $name);
echo PHP_EOL;
echo sprintf('---%10s: %d---', "Age", $age);
//---      Name: John---
//---       Age: 25---
```

You can also define the padding character. If you want to use the underscore for the fill, you must use `'_` (single quotes and the necessary character).

```php
echo sprintf("%'_10s", "Some");
//______Some
```


By default, filler characters are added before the string. Therefore, `%10s` applied to the string "Something" (9 characters long) will only put 1 space before the string.

```php
echo sprintf('-%10s-', "Something");
// - Something-
```

If you want to add the filler characters at the end of the string, use dash `-` char before the number of chars:

```php
echo sprintf('*%-25s*', "Left with spaces");
//*Left with spaces         *

```

So combining alignment (`-`) and pad character (`'`) definition:

```php
// Setting padding char (underscore) with single quote after % char
echo sprintf("*%'_25s*", "Right with underscores");
//*___Right with underscores*
// setting padding chat + alignment left
echo sprintf("*%'_-25s*", "Left with underscores");
//*Left with underscores____*
```

If the result string is longer than the number of total padding characters, the result will not be truncated by default.

For example with the string "Something", if you are using `%2s`, the padding will be ignored.

```php
echo sprintf("*%2s*", "Something");
//*Something*
```

If you want to force and truncate the result string, you can use the dot notation:

```php
echo sprintf("*%2.4s*", "Something");
//*Some*
```

### Numbers (integers)

In addition to the ability to format strings, it is also possible to format numbers, like integers, floats, decimals etc.
For formatting integers, you can use the `%d` placeholder:

```php
echo sprintf("*%d*", 512);
//*512*
```

Even if you can use numbers via %d placeholders, the `sprintf()` function **will return always a string**.

```php
$result = sprintf("*%d*", 512);
echo gettype($result);
// string
```

If you want to add space characters at the beginning of the defined number value to get a string of a predefined length, say 8 characters, you can use the syntax: `%8d`.

```php
echo sprintf("*%8d*", 512);
//*     512*
```

You can also define the padding character. If you want to use the `0` character for the fill, you must use `'0` (single quotes and the necessary character).
By default, filler characters are added before the value. Therefore, `%'08d` applied to the number 512 (3 characters long) will only put five characters before the 512 value.

```php
echo sprintf("*%'08d*", 512);
//*00000512*
```

If the padding value is lower than the total amount of chars, the padding is ignored:

```php
echo sprintf("*%2d*", 512);
//*512*
```

If you want to add the filler characters at the end of the value, use dash `-` char before the number of chars. For example, here you can "fill at the end" via `-` char, for a total amount of `8` digits (`d`):

```php
echo sprintf("*%-8d*", 512);
// *512     *
```

If you wish to customize the filler characters, substituting the default space character with an underscore `_`, you can utilize the `'` apostrophe:

```php
echo sprintf("*%-'_8d*", 512);
//*512_____*
```
in detail explaining all the characters `%-'_8d`:
- `%`: here, it starts a placeholder;
- `-`: append the filler character at the end of the value;
- `'`: use the custom character filler;
- `_`: the custom character used as filler;
- `8`: the total length of the final string;
- `d`: the source value is a number.

If you have a list of values and you need to pick a specific value by the position you can use the `$` symbol. For example, if you want to use the second value you can use `2$`:

```php
echo sprintf('*%2$8d*', 512, 1024);
//*    1024*
```

and of course, you can combine the other directives, try this:

```php
echo sprintf("*%2$-'_8d*", 512,1024);
//*1024____*
```

### Numbers (floats)

If you are working with floats, you probably also want to control the number of decimal digits.
Floats with decimals (6 decimal digits by default):

```php
echo sprintf('*%f*', 1.25);
//*1.250000*
```

Floats with 3 decimals:

```php
echo sprintf("*%5.3f*", 1.25);
//*1.250*
```

Floats rounded to 3 decimals:

```php
echo sprintf("*%5.3f*", 1.2519);
//*1.252*
```

And combining multiple directives, you can obtain string from floats rounded to 3 decimals prefixed with 0 for reaching 10 digits:

```php
echo sprintf("*%'010.3f*", 1.2519);
//*000001.252*
```

and this more complex one:

```php
echo sprintf("*%'_-10.3f*", 1.2519);
//*1.252_____*
```

- `%`: placeholder;
- `'_`: underscore as character filler;
- `-`: append the filler characters at the end of the value;
- `10`: final string length;
- `.3`: 3 decimals;
- `f`: the value is a float number.






### Formatting cheat sheet


| What                                                         | Char   | Placeholder |
| ------------------------------------------------------------ | ------ | ----------- |
| A string                                                     |        | %s          |
| A string padded with 10 chars                                | 10     | %10s        |
| A string padded with 10 underscore chars                     | '_     | %'_10s      |
| A string padded with 10 underscore chars (left alignment)    | -      | %'_-10s     |
| A long string padded, and truncated if is longer             | .      | %2.2s       |
| Integer                                                      |        | %d          |
| Integer with padding                                         | 8      | %8d         |
| Integer aligned left with spaces                             | -      | %-8d        |
| Integer aligned left with a custom char                      | '0     | %'08d       |
| Float with decimals                                          |        | %f          |
| Float with 3 decimals with 5 digits in total (counting also decimal separator) | 5.3    | %5.3f       |
| Float with 3 decimals prefixed with 0 for reaching 10 digits | '010.3 | %'010.3f    |
