---
title: Getting the hash of a file
description: Getting the hash of a file in PHP
sidebar:
  label: MD5 of a file
---

## The Fingerprint of a File: `md5_file()`
The `md5_file()` function calculates the md5 hash of a given file (the fingerprint).

The md5 hash is a string with a 32-character hexadecimal number.

It is useful when you need to compare 2 versions of the same file. For example, it is useful for large files downloaded from the internet just to check if the download file is corrupted and/or matches with the original file.

Or it is useful to track if a file was changed. If two md5 hashes are equal, it means that the files are the same.

```php
echo md5_file(__FILE__);
// 0cd9c44d2e3a87fc1217c02f69f78fa6
```
