---
title: Ending the execution
description: ending the execution of the script via exit() function
sidebar:
  label: Exit
---

## How to exit: `exit()`

If you are running a script and want to stop execution and return to the shell the right way, you should use the `exit()` function.

Why?
- with the `exit()` function you can specify the exit status code. The status `0` means "everything is fine", the status value greater than 0 means something went wrong with the execution;
- with `exit()` function it is possible to specify a string as parameter, printed at the end of the execution;
- when the `exit()` function is called, a callback function is automatically executed. The function executed is defined with `register_shutdown_function()`.


### Exit parameter
```php
exit(0); // exit and returns 0 exit code, everything is ok;
exit(1); // exit and returns 1 exit code, something went wrong;
exit("Good bye") // exit, returns 0 and it displays "Good bye"
```



The exit code is a convention to communicate the exit status of your execution to the shell that started executing the script.
For example, in your shell environment you can detect the exit code via `$?` shell variable.

```sh
php -r 'exit(1);'
if [[ $? -ne 0 ]] ; then ; echo "there was an error executing your php script"; fi
```
