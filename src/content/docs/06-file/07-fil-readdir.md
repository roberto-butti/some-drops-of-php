---
title: Walkthrough a Directory
description: Walkthrough a directory in PHP
sidebar:
  label: Walkthrough a directory
---

## Read dir: `readdir()`

If you need to parse a directory: list all files, retrieve all files (including hidden files) etc, you can use the `readdir()` function.

NOTE:

- it needs to be used with `opendir()` and `closedir()`;
- it doesn't return all the files immediately but one by one, so you need to loop through the `readdir()` results

```php
// Open the directory and obtain a handle variable
$handle = opendir('.');
// loops through "readdir"
while (false !== ($entry = readdir($handle))) {
    echo $entry . PHP_EOL;
}
// close the handle variable
closedir($handle);
```
