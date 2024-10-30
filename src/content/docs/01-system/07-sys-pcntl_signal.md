---
title: Listening signals
description: Listening signals via pcntl_signal() function
sidebar:
  label: Listening signals
---

## Listening signals: `pcntl_signal()`

One of the methods used by the operating system to communicate with the running processes is through _signals_.
The operating system uses _signals_ to communicate to the processes something like: "I want to stop your execution."
For example, if the user wants to stop the execution of the process, he can use the _shell_ command `kill` or pressing `CTRL+C` to tell the operating system send a signal to the target process.

If in a PHP script you want to detect when the script receives a signal, you can use the `pcntl_signal()` function.
The first argument is the signal you want to detect.
The `kill` command, and `CTRL+C` both send a `SIGINT` signal.
The second argument is the custom function to be executed, when the script receives the signal.

> In order to make pcntl_signal work in the right way, use `declare(ticks=1);`

```php
declare(ticks=1);
echo "Installing signal handler...\n";
/**
 * listening SIGINT signal.
 * SIGINT is triggered by:
 * - kill command
 * - CTRL + C keys
 */
pcntl_signal(
    SIGINT,
    function ($signal) {
        echo "Hi, you sent SIGINT, -" . $signal . "-" . PHP_EOL;
    }
);
sleep(100);
echo "This is the end" . PHP_EOL;
```
