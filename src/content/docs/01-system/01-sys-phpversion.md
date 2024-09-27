---
title: Getting the  version of PHP or extension
description: Getting the PHP version and/or an extension version  via the `phpversion()` function
sidebar:
  label: PHP/extension version
---

## Get used PHP version: `phpversion()`

The `phpversion()` function retrieves the PHP version currently being executed by the current process.

It's also useful for checking if a specific extension is installed and retrieving its version.

### Primary use cases

* Software compatibility checks
* Error reporting and logging
* Retrieving the version of a specific PHP extension

## Syntax and parameters

```php
$version = phpversion();
```

Where:

- `phpversion()`: The function to retrieve the PHP version.

The return type is a string, representing the version of PHP being
executed.

### Example for retrieving the PHP version
```php
echo phpversion();
// Output: The current version of PHP (e.g., '8.3.10')
```

### Example for retrieving the version of a specific extension

With the `phpversion()` function, you can pass an optional argument to retrieve the version of a specific PHP extension.

```php
$extension = "openswoole";
phpversion($extension);
// it returns a string like "22.1.2"
```

The `extension` parameter is optional. It is a string representing the name of the PHP extension whose version you want to retrieve. If provided, `phpversion()` returns the version of that extension. If the extension is not enabled, it returns `false`.

```php
$extension = "ext-not-exists";
phpversion($extension);
// it returns the boolean `false` value
```



## Use Cases

### 1. Software compatibility checks

When deploying software, it's essential to ensure compatibility with
different PHP versions. You can use `phpversion()` to check the client's
PHP version and adjust your application accordingly. Or you want to remember the user that is using a deprecated version of PHP that will be no more supported in the future.

```php
$current_version = phpversion();
if ($current_version < '8.2') {
    // Client has an outdated PHP version.
} else {
    // Client has a compatible or newer PHP version.
}
```

### 2. Error reporting and logging

To identify potential issues, you can log the PHP version used to execute
your script.

```php
$log_file = 'php_version.log';
$log_message = 'PHP version: ' . phpversion() . "\n";
file_put_contents($log_file, $log_message, FILE_APPEND);
```

### 3. Retrieving the version of a specific PHP extension

You can use `phpversion("extension-name")` to check the version of a particular extension. This is helpful for ensuring that the extension is enabled and is of the correct version for your application.
```php
$openswooleVersion = phpversion('openswoole');
if ($openswooleVersion !== false) {
    echo "OpenSwoole version: " . $openswooleVersion;
} else {
    echo "OpenSwoole extension is not enabled.";
}
```

## Common pitfalls

* Be aware that `phpversion()` returns a string, which may not always be
easy to parse or compare.
* Use `version_compare()` to correctly compare PHP versions and avoid
potential issues.

## Additional resources

For more information on PHP versions and compatibility, see:

* [PHP Documentation: PHP
Versioning](https://www.php.net/manual/en/function.phpversion.php)
