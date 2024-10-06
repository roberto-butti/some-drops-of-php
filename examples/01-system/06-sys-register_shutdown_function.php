<?php

register_shutdown_function(
    function (): void {
        echo 'Shutting down.', PHP_EOL;
    },
);

$wantExit = true;
if ($wantExit) {
    exit('Good bye! (before shutdown)' . PHP_EOL);
}
echo 'This statement will never be executed' . PHP_EOL;
