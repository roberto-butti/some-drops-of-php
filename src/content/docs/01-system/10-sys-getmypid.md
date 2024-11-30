---
title: Getting the process identifier
description: Getting the current process identifier via getmypid() function
sidebar:
  label: Process identifier
---

## Retrieve the current Process Identifier: `getmypid()`

Any active process is identified by operating system by a Process IDentifier (PID).
This number may be used to kill or manage the process.
In the _shell_, to retrieve the list of processes with the PID, you can use the `ps` command.

In a PHP script you can retrieve the current process identifier with `getmypid()`.

It returns an integer of the identifier or `false` if an error occurs.

```php

$myPid = getmypid(); // for example 19740
echo "If you want to kill me, execute: kill -9 " . $myPid;
sleep(100000);
```
