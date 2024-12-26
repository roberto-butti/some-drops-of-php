---
title: Registering the shutdown function
description: Registering the shutdown function via register_shutdown_function() function
sidebar:
  label: Shutdown function
---

## Shutdown function: `register_shutdown_function()`

Suppose you have the `exit()` function called in multiple points.
If you want to detect the shutdown triggered by `exit()` call, you can "register" your function that you want to call once `exit()` is executed.

```php
register_shutdown_function(function () {
    echo 'Shutting down.', PHP_EOL;
});

exit("Good bye!");
```
