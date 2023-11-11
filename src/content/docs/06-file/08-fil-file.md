---
title: Read file into array
description: Read file contents into an array using the file() function
sidebar:
  label: Read file into array
---

## Read file content: `file()`
If you want to be able to read a file, you can use the `file()` function. It puts the file contents into an array so you can work with it line by line or as a list.
Assuming you have a list of countries in a text `(.txt)` file and you need to display the list, you can use the `file()` function to read the file and convert it to an array.

Here's an example:

```php

$countries = file('countries.txt');

print_r($countries);

```

The text file content:

```text

Australia
Afghanistan
Albania
Algeria
........

```

In the example above, the output would be:

```text

Array ( [0] => Australia [1] => Afghanistan [2] => Albania [3] => Algeria ........ )

```

## The `file()` function parameters

The `file()` function has three parameters which are passed as arguments.

```php

file ( $filename , $flags , $context )

```

- `$filename`: is the path to the file.
- `$flags`: is an optional parameter that can be one or more of the constants.
- `$context`:  allows you to specify a context for the file handle.

Below are the file constants:

| Flag                   | Description                                       |
|------------------------|---------------------------------------------------|
| FILE_USE_INCLUDE_PATH  | Search for the file in the include path.          |
| FILE_IGNORE_NEW_LINES  | Skip the newline at the end of the array element. |
| FILE_SKIP_EMPTY_LINES  | Skip empty lines in the file.                     |

## Adding options and context

```php

// Retrieving the content of the current PHP file
print_r(file(__FILE__));

// You can retrieve remote files also
print_r(file('https://cdn.wsform.com/wp-content/uploads/2020/06/color_web_safe.csv'));

//If you need to set some header, you can use the "context"
$opts = [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n"
    ]
];
$context = stream_context_create($opts);
print_r(file(
    filename: 'https://cdn.wsform.com/wp-content/uploads/2020/06/color_web_safe.csv',
    context: $context
));

```

## File types that can be handled

Various file types can be handled by the `file()` function, including:

- `Text files (*.txt)`: These are standard text files that contain plain, unformatted text.
- `CSV files (*.csv)`: These are comma-separated values files that contain tabular data.
- `HTML files (*.html, *.htm)`: These files contain HTML markup and can be read into an array.
- `XML files (*.xml)`: These are files that contain structured data in the XML format.
- `Log files (*.log)`: These are text-based files used to store a record of events or messages.
- `Config files (*.config, *.ini, etc.)`: These are files that store configuration data in a specific format.

File extensions are not a restriction on the `file()` function. In general it can read any text-based file. The result might not be as expected if the file contains binary data or non-textual data.
