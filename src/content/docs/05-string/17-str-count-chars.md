---
title: 'Counting character occurrences in a string'
description: 'Counting character occurrences in a string using the count_chars() function'
sidebar:
  label: count_chars
---

# count_chars()

## Introduction

The `count_chars()` function in PHP is a powerful tool for analyzing the character composition of a string. It counts the occurrences of every character (including whitespace and special characters) in the given string, providing detailed information about the string's contents.

## Syntax and Parameters

```php
count_chars(string $string, int $mode = 0): array|string
```

### Parameters:

- `string` (required): The input string to be analyzed.
- `mode` (optional): An integer that determines the return value format. Default is 0.
  - 0: Returns an array with the character code as key and its frequency as value.
  - 1: Same as 0, but includes only characters with a frequency > 0.
  - 2: Same as 0, but includes only characters with a frequency = 0.
  - 3: Returns a string containing all unique characters.
  - 4: Returns a string containing all unused characters.

### Return Value:

Depending on the `mode`, the function returns either an array or a string.

## Use Cases

### 1. Character Frequency Analysis

```php
$text = "Hello, World!";
$charCount = count_chars($text, 1);

foreach ($charCount as $char => $count) {
    echo "'" . chr($char) . "' occurs $count time(s)\n";
}
```

This example demonstrates how to analyze the frequency of characters in a string, which can be useful for tasks like basic text analysis or simple encryption techniques.

### 2. Finding Unique Characters

```php
$text = "abracadabra";
$uniqueChars = count_chars($text, 3);
echo "Unique characters: $uniqueChars\n";
```

This use case shows how to extract all unique characters from a string, which can be helpful in scenarios like generating character sets or validating input.

### 3. Checking for Unused Characters

```php
$text = "The quick brown fox jumps over the lazy dog";
$unusedChars = count_chars($text, 4);
echo "Unused ASCII characters: " . bin2hex($unusedChars) . "\n";
```

This example illustrates how to find characters that are not used in a given string, which can be useful for tasks like checking if a string is a pangram or identifying available characters for encoding.

## Common Pitfalls

1. **Case Sensitivity**: `count_chars()` is case-sensitive. 'A' and 'a' are treated as different characters.

2. **Multibyte Characters**: This function only works with single-byte encoded strings. For multibyte encoded strings (e.g., UTF-8), use `mb_split()` in combination with `array_count_values()`.

3. **Performance**: For very large strings, this function might be memory-intensive. Consider using alternative methods for large-scale text processing.

## Additional Resources

- [PHP Manual: count_chars()](https://www.php.net/manual/en/function.count-chars.php)
- [String Functions](./string-functions.md)
- [mb_split()](./mb-split.md)
- [array_count_values()](../02-array/array-count-values.md)