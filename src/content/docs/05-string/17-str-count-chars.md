---
title: 'Counting Character Occurrences in a String with PHP'
description: "Learn how to use PHP's count_chars() function to analyze strings by counting character occurrences, identifying unique or unused characters, and more."
sidebar:
  label: Character Frequencies
---

# Counting characters via `count_chars()`

The `count_chars()` function in PHP analyzes a given string and counts the occurrences of each character (including whitespace and special characters). The function's behavior can be customized using the `mode` parameter, which determines the type of data returned, such as character counts, unique characters, or unused characters.

## Syntax and parameters

```php
count_chars(string $string, int $mode = 0): array|string
```

### Parameters:

- `string` (required): The input string to be analyzed.
- `mode` (optional): An integer that determines the return value format. The default is 0.
  - 0: Returns an array with the character code as key and its frequency as value.
  - 1: Same as 0, but includes only characters with a frequency > 0.
  - 2: Same as 0, but includes only characters with a frequency = 0.
  - 3: Returns a string containing all unique characters.
  - 4: Returns a string containing all unused characters.

With the default `mode` (`0`), the function returns a list of all characters and their frequencies, including characters with a frequency of `0`.

### Return value:

The function returns an array or a string depending on the `mode` parameter.

## Use cases

### 1. Character frequency analysis

```php
$text = "Hi Folks! We love PHP! PHP is amazing!";
$charCount = count_chars($text, 1);

print_r($charCount);
/*
Array
(
    [32] => 7
    [33] => 3
    [70] => 1
    [72] => 3
    [80] => 4
    [87] => 1
    [97] => 2
    [101] => 2
    [103] => 1
    [105] => 3
    [107] => 1
    [108] => 2
    [109] => 1
    [110] => 1
    [111] => 2
    [115] => 2
    [118] => 1
    [122] => 1
)
*/

foreach ($charCount as $char => $count) {
    echo "'" . chr($char) . "' occurs $count time(s)\n";
}

/*
Character frequency in 'Hi Folks! We love PHP! PHP is amazing!':
' ' occurs 7 time(s)
'!' occurs 3 time(s)
'F' occurs 1 time(s)
'H' occurs 3 time(s)
'P' occurs 4 time(s)
'W' occurs 1 time(s)
'a' occurs 2 time(s)
'e' occurs 2 time(s)
'g' occurs 1 time(s)
'i' occurs 3 time(s)
'k' occurs 1 time(s)
'l' occurs 2 time(s)
'm' occurs 1 time(s)
'n' occurs 1 time(s)
'o' occurs 2 time(s)
's' occurs 2 time(s)
'v' occurs 1 time(s)
'z' occurs 1 time(s)
*/
```

This example demonstrates how to analyze the frequency of characters in a string, which can be useful for tasks like basic text analysis or simple encryption techniques.

### 2. Finding unique characters

```php
$text = "Hi Folks! We love PHP! PHP is amazing!";
$uniqueChars = count_chars($text, 3);
echo "Unique characters: $uniqueChars" . PHP_EOL;
// Unique characters:  !FHPWaegiklmnosvz
```

This use case shows how to extract all unique characters from a string, which can be helpful in scenarios like generating character sets or validating input.

### 3. Checking for unused characters

```php
$text = "Hi Folks! We love PHP! PHP is amazing!";
$unusedChars = count_chars($text, 4);
echo "Unused ASCII characters: " . bin2hex($unusedChars) . "\n";
```

This example illustrates how to find characters not used in a given string, which can be useful for tasks like checking if a string is a pangram or identifying available characters for encoding.

## Common pitfalls

1. **Case sensitivity**: `count_chars()` is case-sensitive. 'A' and 'a' are treated as different characters.

2. **Multibyte characters**: this function only works with single-byte encoded strings. For multibyte encoded strings (e.g., UTF-8), use `mb_split()` in combination with `array_count_values()`.

3. **Performance**: this function might be memory-intensive for very large strings. Consider using alternative methods for large-scale text processing.

## Additional resources

- [PHP Manual: `count_chars()`](https://www.php.net/manual/en/function.count-chars.php)
- [String Functions](/05-string/00-str-intro/)
- [PHP official documentation for `mb_split()`](https://www.php.net/manual/en/function.mb-split.php)
- [PHP official documentation for `array_count_values()`](https://www.php.net/manual/en/function.array-count-values.php)