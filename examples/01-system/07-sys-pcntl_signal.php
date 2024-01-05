<?php

declare(ticks=1);

echo "Installing signal handler... (type ctrl+c)\n";

pcntl_signal(
    SIGINT,
    function ($signal) {
        echo 'Hi, you sent SIGINT, -' . $signal . '-' . PHP_EOL;
    }
);

sleep(100);
echo 'This is the end' . PHP_EOL;
