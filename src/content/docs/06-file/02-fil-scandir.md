---
title: Parsing a Directory
description: Parsing a directory, retrieving the elements in the directory in PHP
sidebar:
  label: Parse a directory
---

## Parsing directory: `scandir()`

If you need to obtain the list of files in a directory (like `ls` command does) you can use the `scandir()` function.

```php
$files = scandir(__DIR__);
var_dump($files);
```

A directory name (string) as input will get you an array of strings: filenames, directory names, also including special directories like "." and "..".

You can control the sorting with 2 constants. The default is an ascending sorting (alphabetical). With `SCANDIR_SORT_DESCENDING` you can obtain string with a descending order:

```php
$files = scandir(__DIR__, SCANDIR_SORT_DESCENDING);
var_dump($files);
```

Or, if you don't want to sort at all, you can use `SCANDIR_SORT_NONE`:

```php
$files = scandir(__DIR__, SCANDIR_SORT_NONE);
var_dump($files);
```

If you don't want the "." and ".." in your list, eliminating the first 2 items **is wrong**, because most of the time in alphabetical order "." and ".." are in the 2 first positions. But, what if you have a filename that begins with "-" for example?

So my suggestion is to drop 2 elements by value. I have in mind 2 ways, the first one is looping through elements and skipping "." and "..". The most elegant way is using the `array_diff()` function:

```php
$files = array_diff(scandir(__DIR__), [".", ".."];
var_dump($files);

```
