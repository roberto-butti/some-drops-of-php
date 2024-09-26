---
title: Getting the PHP version
description: Getting the PHP version via phpversion() function
sidebar:
  label: PHP version
---

## Get used PHP version: `phpversion()`

The `phpversion()` function retrieves the PHP version being
executed. This information can be helpful for various
purposes, such as checking compatibility with different versions or
verifying the level of security patches applied.

### Primary Use Cases

* Checking compatibility with different PHP versions
* Verifying the level of security patches applied

## Syntax and Parameters

```php
phpversion()
```

Where:

- `phpversion()`: The function to retrieve the PHP version.

The return type is a string, representing the version of PHP being
executed.

### Example:
```php
echo phpversion();
// Output: The current version of PHP (e.g., '8.3.10')
```

## Use Cases

### 1. Checking Compatibility with Different PHP Versions

Let's say we have an application that relies on a specific PHP feature,
but we want to make it compatible with different versions:

```php
$phpVersion = phpversion();
if (version_compare($phpVersion, '8.0.0', '<')) {
    // Apply compatibility fixes or workarounds for PHP 7.x versions
} else {
    // Use the available features and functionality
}
```

### 2. Verifying Security Patches

Suppose we have a critical application that requires specific security
patches to be applied:

```php
$patchLevel = phpversion();
if (strpos($patchLevel, '8.') !== false) {
    // Apply additional security patches or fixes required for PHP 8.x
versions
} else {
    // Perform a manual review of the patch level and apply necessary
fixes
}
```

## Common Pitfalls

* Be aware that `phpversion()` returns a string, which may not always be
easy to parse or compare.
* Use `version_compare()` to correctly compare PHP versions and avoid
potential issues.

## Additional Resources

For more information on PHP versions and compatibility, see:

* [PHP Documentation: PHP
Versioning](https://www.php.net/manual/en/faq.version.php)
* [W3Schools: PHP Version
Comparison](https://www.w3schools.com/php/ref_func_version_compare.asp)

