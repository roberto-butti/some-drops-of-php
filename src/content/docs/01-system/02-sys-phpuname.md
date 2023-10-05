---
title: Getting the OS information
description: Getting the OS information via php_uname() function
sidebar:
  label: OS information
---

## Display OS information: `php_uname()`
Display information about the operating system.

:::tip[Did you know?]
`uname` (it means Unix Name) is a historical Unix command to display the name, version and other details about the current machine and the operating system running on it.
:::

With `php_uname()` you can retrieve operating system information in a PHP script.
The function has a parameter `mode`, that allows you to define which information you want returned:
- s : operating system name;
- n : the host name;
- r : the release name;
- v : the version info;
- m : the machine name;
- a : all information above.

You can use:
```php
$operating_system = php_uname("s");
```
Or you can walk through all options available:
```php
$options =  [
  "s" => "Operating System",
  "n" => "Hostname",
  "r" => "Release name",
  "v" => "Version info",
  "m" => "Machine Name",
  "a" => "Full infos"
];

foreach ($options as $key => $title) {
  echo $title . ": ". php_uname($key) . PHP_EOL;
}
```
