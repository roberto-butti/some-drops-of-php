---
title: Getting loaded PHP modules
description: Getting the loaded PHP modules via get_loaded_extensions() function
sidebar:
  label: Loaded PHP extensions
---

## Loaded PHP modules: `get_loaded_extensions()`

The execution of the PHP scripts could use core PHP functionalities and/or functionalities provided by modules.
For example, modules are:

- `bcmath`: arbitrary precision mathematics which supports numbers represented as strings;
- `ctype`: provides functions for checking character string, for example if a character is numeric or alphabetic or alphanumeric etc...
- `fileinfo`: provides functions for detecting the mime type and the encoding of a file;
- `JSON`: provides a parser for JSON files;
- `Mbstring`: provides multibyte string functions;
- `OpenSSL`: provides functions for encryption and decryption;
- `PDO`: provides functions for accessing databases;
- `Tokenizer`: provides functions for parsing text and extracting PHP tokens;
- `XML`: provides functions for parsing XML files.

The availability of these modules depend on how the PHP engine was compiled and the configuration of the PHP installation (php.ini).

To know which modules are available, the `get_loaded_extensions()` function exists.
It returns an array with the names of the modules:
```php
$extensions = get_loaded_extensions();
foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```
To obtain only Zend extensions, set `true` as a parameter. For example, you could obtain something like `Xdebug` and `Zend OPcache`:

```php
$extensions = get_loaded_extensions(true);

foreach ($extensions as $key => $extension) {
    echo $extension . PHP_EOL;
}
```
